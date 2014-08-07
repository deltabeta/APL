<?php

class RegistrationController extends Controller {

    public $defaultAction = 'registration';

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
        );
    }

    /**
     * Registration user
     */
    public function actionRegistration() {
        Profile::$regMode = true;
        $model = new RegistrationForm;
        //$profile = new Profile;
        $contact = new Contact;
    $categories = new BusinessCategory;
    $iso_language = new IsoLanguage;
    $company = new Company;
    
        
        // ajax validator
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'registration-form') {
           // echo UActiveForm::validate(array($model, $profile));
            Yii::app()->end();
        }

        if (Yii::app()->user->id) {
            $this->redirect(Yii::app()->controller->module->profileUrl);
        } else {
            if (isset($_POST['RegistrationForm'],$_POST['Contact'] )) {
                $model->attributes = $_POST['RegistrationForm'];
                $contact->attributes = $_POST['Contact'];
               
                
                if ($model->validate() && $contact->validate()) {
                    $soucePassword = $model->password;
                    $model->activkey = UserModule::encrypting(microtime() . $model->password);
                    $model->password = UserModule::encrypting($model->password);
                    $model->verifyPassword = UserModule::encrypting($model->verifyPassword);
                    $model->superuser = 0;
                    $model->status = ((Yii::app()->controller->module->activeAfterRegister) ? User::STATUS_ACTIVE : User::STATUS_NOACTIVE);

                    if ($model->save(false)) {
                        $contact->contact_id = $model->id;
                         $contact->contact_email= $model->email;
                         $contact->contact_login_pass= $model->password = UserModule::encrypting($model->password);
                        $contact->save(false);
                        
                        $contactcat = Contact::model()->findByPk($contact->contact_id);
                        if(isset($_POST['BusinessCategory']['cat_title'])){
                            $categories_id = $_POST['BusinessCategory']['cat_title'];
                            $contact->businessCategories = $categories_id;
                        }
                        if(isset($_POST['IsoLanguage']['lang_iso'])){
                            $lang_iso = $_POST['IsoLanguage']['lang_iso'];
                            $contact->isoLanguages = $lang_iso;
                        }
                        
                        if(isset($_POST['Company']['comp_id'])){
                            
                            $companies = $_POST['Company']['comp_id'];
                            
                            foreach($companies as $value){
                                if(isset($_POST['country'.$value])){
                                    $countries = $_POST['country'.$value];
                                    foreach($countries as $c){
                                        $cgc = new ContactGeoCoverage;
                                        $cgc->contact = $contact->contact_id;
                                        $cgc->company = $value;
                                        $cgc->geoCountry = $c;
                                        $cgc->save();                                   
                                        
                                    }
                                }
                                
                            }
                            
                            
                            
//                           $contact->companies = $companies;
//                           $contact->geo_countries  = array(004,008,010);
                            
                        }
                        
                        //$contact->save();
                        



                        if (Yii::app()->controller->module->sendActivationMail) {


                            $activation_url = $this->createAbsoluteUrl('/user/activation/activation', array("activkey" => $model->activkey, "email" => $model->email));

                            Yii::import('ext.yii-mail.YiiMailMessage');
                            $message = new YiiMailMessage;
                            $message->setBody(	
                                    UserModule::t("Please activate you account go to {activation_url}", array('{activation_url}' => $activation_url))
                                    , 'text/html');
                            $message->subject = UserModule::t("Your registration  from {site_name}", array('{site_name}' => Yii::app()->name));
                            $message->addTo($model->email);
                            $message->from = Yii::app()->params['adminEmail'];
                            Yii::app()->mail->send($message);


                            //UserModule::sendMail($user->email,$subject,$message);
//    UserModule::sendMail(
//            $model->email, 
//            UserModule::t("You registered from {site_name}", 
//            array('{site_name}' => Yii::app()->name)), 
//            UserModule::t("Please activate you account go to {activation_url}", 
//            array('{activation_url}' => $activation_url))
//        );
                        }

                        if ((Yii::app()->controller->module->loginNotActiv || (Yii::app()->controller->module->activeAfterRegister && Yii::app()->controller->module->sendActivationMail == false)) && Yii::app()->controller->module->autoLogin) {
                            $identity = new UserIdentity($model->username, $soucePassword);
                            $identity->authenticate();
                            Yii::app()->user->login($identity, 0);
                            $this->redirect(Yii::app()->controller->module->returnUrl);
                        } else {
                            if (!Yii::app()->controller->module->activeAfterRegister && !Yii::app()->controller->module->sendActivationMail) {
                                Yii::app()->user->setFlash('registration', UserModule::t("Thank you for your registration. Contact Admin to activate your account."));
                            } elseif (Yii::app()->controller->module->activeAfterRegister && Yii::app()->controller->module->sendActivationMail == false) {
                                Yii::app()->user->setFlash('registration', UserModule::t("Thank you for your registration. Please {{login}}.", array('{{login}}' => CHtml::link(UserModule::t('Login'), Yii::app()->controller->module->loginUrl))));
                            } elseif (Yii::app()->controller->module->loginNotActiv) {
                                Yii::app()->user->setFlash('registration', UserModule::t("Thank you for your registration. Please check your email or login."));
                            } else {
                                Yii::app()->user->setFlash('registration', UserModule::t("Thank you for your registration. Please check your email."));
                            }
                            $this->refresh();
                        }
                    }
                } else
                    $contact->validate();
            }
            
            //$categories = BusinessCategory::model()->findAll();
            $this->render('/user/registration', array('model' => $model, 'contact' => $contact, 'categories'=>$categories, 'iso_language'=>$iso_language, 'company'=>$company));
        }
    }
    
    
    
    

}
