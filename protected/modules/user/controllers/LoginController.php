<?php

class LoginController extends Controller {

    public $defaultAction = 'login';

    /**
     * Displays the login page
     */
    public function actionLogin() {
        if (Yii::app()->user->isGuest) {
            $model = new UserLogin;
            // collect user input data
            if (isset($_POST['UserLogin'])) {
                $model->attributes = $_POST['UserLogin'];
                // validate user input and redirect to previous page if valid
                if ($model->validate()) {
                    $this->lastViset();
                    if (Yii::app()->getBaseUrl() . "/index.php" === Yii::app()->user->returnUrl)
                        $this->redirect(Yii::app()->controller->module->returnUrl);
                    else
                        $this->redirect(Yii::app()->user->returnUrl);
                }
            }
            // display the login form
            $this->render('/user/login', array('model' => $model));
        } else
            $this->redirect(Yii::app()->controller->module->returnUrl);

       return array(
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

    private function lastViset() {
        $lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
        $lastVisit->lastvisit_at = date('Y-m-d H:i:s');
        $lastVisit->save();
    }

    public function actions() {
        return array(
            'oauth' => array(
                'class' => 'ext.hoauth.HOAuthAction',
            ),
            'oauthadmin' => array(
                'class' => 'ext.hoauth.HOAuthAdminAction',
            ),
        );
    }

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl',
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('oauthadmin'),
                'users' => UserModule::getAdmins(),
            ),
//            array('deny', // deny all users
//                'actions' => array('oauthadmin'),
//                'users' => array('*'),
//            ),
        );
        }
    public function hoauthCheckAccess($user)      
  {
    
            
    // the false as the second parameter will disable default error rendering
    $accessCode = $this->action->yiiUserCheckAccess($user, false);
    // do other stuff
    return $accessCode;
  }
    

}
