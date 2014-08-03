<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
// captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
// They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
            
            
            
            // OAUTH 
            'oauth' => array(
// the list of additional properties of this action is below
                'class' => 'ext.hoauth.HOAuthAction',
                // Yii alias for your user's model, or simply class name, when it already on yii's import path
// default value of this property is: User
                'model' => 'User',
                // map model attributes to attributes of user's social profile
// model attribute => profile attribute
// the list of avaible attributes is below
                'attributes' => array(
                    'email' => 'email',
                    'fname' => 'firstName',
                    'lname' => 'lastName',
                    'gender' => 'genderShort',
                    'birthday' => 'birthDate',
                    // you can also specify additional values, 
// that will be applied to your model (eg. account activation status)
                    'acc_status' => 1,
                ),
            ),
            // this is an admin action that will help you to configure HybridAuth 
// (you must delete this action, when you'll be ready with configuration, or 
// specify rules for admin role. User shouldn't have access to this action!)
            'oauthadmin' => array(
                'class' => 'ext.hoauth.HOAuthAdminAction',
            ),
        );
    }

    /**
     * Returns User model by its email
     * 
     * @param string $email 
     * @access public
     * @return User
     */
    public function findByEmail($email) {
        return self::model()->findByAttributes(array('email' => $email));
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
// renders the view file 'protected/views/site/index.php'
// using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionHowtouse() {
// renders the view file 'protected/views/site/index.php'
// using the default layout 'protected/views/layouts/main.php'
        $this->render('howtouse');
    }

    public function actionTipstowrite() {
// renders the view file 'protected/views/site/index.php'
// using the default layout 'protected/views/layouts/main.php'
        $this->render('tipstowrite');
    }

    public function actionForwhoandhow() {

        $modelpage = WebMenu::model()->findAllByAttributes(array('menu_id'=>8));
 
                // format models resulting using listData     
        $content = CHtml::listData($modelpage, 
                          'menu_id', 'menu_content');
        $this->render('forwhoandhow',array(
			'content'=>$content
		));
    }

    public function actionCostofuse() {
// renders the view file 'protected/views/site/index.php'
// using the default layout 'protected/views/layouts/main.php'
        $this->render('costofuse');
    }

    public function actionAbout() {
// renders the view file 'protected/views/site/index.php'
// using the default layout 'protected/views/layouts/main.php'
        $this->render('about');
    }

    public function adminmailing() {
// renders the view file 'protected/views/site/index.php'
// using the default layout 'protected/views/layouts/main.php'
         
        $this->render('adminmailing');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

// if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login1-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

// collect user input data
        if (isset($_POST['LoginForm']) && isset($_POST['yt1'])) {
            $model->attributes = $_POST['LoginForm'];
// validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login1())
// $this->redirect('index.php?r=user/dashboard');
                $this->redirect(Yii::app()->user->returnUrl);
        }

        if (isset($_POST['LoginForm']) && isset($_POST['yt0'])) {
            $model->attributes = $_POST['LoginForm'];
// validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
// display the login form
        }
        $this->render('login', array('model' => $model));
    }

    public function actionContactLogin() {
        $model = new LoginForm;

// if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login1-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

// collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
// validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login1())
                $this->redirect(Yii::app()->user->returnUrl);
//                if(Yii::app()->user->profile==1)
//                {
//                     $this->redirect('index.php?r=admin/dashboard');
//                }
//                else{
//                     $this->redirect('index.php?r=user/dashboard');
//                }
        }
// display the login form
        $this->render('ContactLogin', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function filters() {



        $tab = array('accessControl',
            'postOnly + delete',
            array('booster.filters.BoosterFilter - delete'),);
        return $tab;
    }

}

