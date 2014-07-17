<?php

class LoginController extends Controller
{
	public $defaultAction = 'login';

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if (Yii::app()->user->isGuest) {
			$model=new UserLogin;
                        $contact=null;
			// collect user input data
			if(isset($_POST['UserLogin']))
			{
				$model->attributes=$_POST['UserLogin'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
                            
					$this->lastViset();
                                              $contact= Contact::model()->findByPk(Yii::app()->user->id);
                                              if($contact!=null){
                                                 
                  $this->redirect(array('/contact/dashbord/'.Yii::app()->user->id),array(
			'model'=>$contact));
                                              }else{
                                                  $client = Client::model()->findByPk(Yii::app()->user->id);
                                                   $this->redirect(array('/client/dashbord/'.Yii::app()->user->id),array(
			'model'=>$contact));
                                              }
//					if (Yii::app()->getBaseUrl()."/index.php" === Yii::app()->user->returnUrl)
//						$this->redirect(Yii::app()->controller->module->returnUrl);
//					else
//						$this->redirect(Yii::app()->user->returnUrl);
				}
			}
			// display the login form
			$this->render('/user/login',array('model'=>$model));
		} else
			$this->redirect(Yii::app()->controller->module->returnUrl);
	}
	
	private function lastViset() {
		$lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
		$lastVisit->lastvisit_at = date('Y-m-d H:i:s');
		$lastVisit->save();
	}

}