<?php

class PressController extends Controller {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout = 'layoutjournalist';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('released', 'scheduled', 'delete', 'admin', 'drafts', 'create', 'update', 'deletepress', 'deletepress1'),
                'users' => array('@'),
            ),
//            array('allow', // allow admin user to perform 'admin' and 'delete' actions
//                'actions' => array( 'delete'),
//                'users' => array('admin'),
//            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionScheduled() {
        $press_user = Yii::app()->user->id;
        $criteria = new CDbCriteria;
        $criteria->condition = 'press_user=:press_user AND (press_status=:press_status OR press_status=:press_status1)';
        $criteria->params = array(':press_user' => $press_user, ':press_status' => 'Q', ':press_status1' => 'N');
        $presses = Press::model()->findAll($criteria);
        $this->render('scheduled', array(
            'presses' => $presses,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Press;
        $model->press_user = Yii::app()->user->id;
    
       $client = Client::model()->findByPk(Yii::app()->user->id);
       $model->press_sender_email=$client->user_email;
       $model->press_replyto_email=$client->user_email;
       $model->press_sender_name = $client->porfile_name_last;
        $model->press_replyto_name = $client->porfile_name_last;
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Press'])) {
            $model->attributes = $_POST['Press'];
             $model->press_content= str_replace("\r\n", '', $model->press_content);
            $status = $_POST['Press']['press_status'];
            // print_r($status);

            $model->press_date = date('Y-m-d H:i:s');
                    
          if ($status == 'N'){
            
                $model->press_date_started =date('Y-m-d H:i:s');
                $model->press_status = "Q";
      } 
            else if ($status == 'Q') {
                $model->press_date_started = $_POST['Press']['press_date_started'] . ' ' . $_POST['Press']['hours'] . ':00';
                $model->press_status = "Q";
            } else {
                    $model->press_status = "D";
             
                $model->press_date_started = null;
              
            }
            $model->press_file_1 = CUploadedFile::getInstance($model, 'press_file_1');
            $model->press_file_2 = CUploadedFile::getInstance($model, 'press_file_2');
            $model->press_file_3 = CUploadedFile::getInstance($model, 'press_file_3');
            //  $model->press_date_started = $_POST['Press']['press_date_started'].' '. $_POST['Press']['hours'].':00';       

            if ($model->save()) {

                //test mail 
//                $email = Yii::app()->mandrillwrap;
//                $email->sendEmail();

                if ($model->press_file_1 != null)
                    $model->press_file_1->saveAs(Yii::app()->basePath . '/uploads/' . $model->press_file_1);
                if ($model->press_file_2 != null)
                    $model->press_file_2->saveAs(Yii::app()->basePath . '/uploads/' . $model->press_file_2);
                if ($model->press_file_3 != null)
                    $model->press_file_3->saveAs(Yii::app()->basePath . '/uploads/' . $model->press_file_3);

                if ($status == "N" || $status == "Q")
                    $this->redirect(array('/press/scheduled'));
                else
                    
                    $this->redirect(array('/press/drafts'));



                // $this->redirect(array('view', 'id' => $model->press_id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }
    
    public function actionUpdate($id) {
          //$id = Yii::app()->user->id;
        $model = $this->loadModel($id);
        $file1=null;
        $file2=null;
        $file3=null;
        $file1= $model->press_file_1;
        $file2= $model->press_file_2;
        $file3= $model->press_file_3;
        $this->performAjaxValidation($model);
        if (isset($_POST['Press'])) {

            $model->attributes = $_POST['Press'];
             $model->press_content= str_replace("\r\n", '', $model->press_content);
                //$model->press_date = date('Y-m-d H:i:s');
              $status = $_POST['Press']['press_status'];
              
          if ($status == 'N'){
            
                $model->press_date_started =date('Y-m-d H:i:s');
                $model->press_status = "Q";
      } 
            else if ($status == 'Q') {
                $model->press_date_started = $_POST['Press']['press_date_started'] . ' ' . $_POST['Press']['hours'] . ':00';
                $model->press_status = "Q";
            } else {
                    $model->press_status = "D";
             
                $model->press_date_started = null;
              
            }
            
   
            $model->press_file_1 = CUploadedFile::getInstance($model, 'press_file_1');
            $model->press_file_2 = CUploadedFile::getInstance($model, 'press_file_2');
            $model->press_file_3 = CUploadedFile::getInstance($model, 'press_file_3');
        
         if( $model->press_file_1==null){
             if (!empty($file1)){
                 
                    
                    $model->press_file_1= $file1;
                   
                 }
         }
         
         else 
           if( $model->press_file_2==null){
             if (!empty($file2)){
                 
                    
                    $model->press_file_2= $file2;
                   
                 }
         }
           if( $model->press_file_3==null){
             if (!empty($file3)){
                 
                    
                    $model->press_file_3= $file3;
                   
                 }
         }
            
           
            if ($model->save()) {
                
                if ($model->press_file_1 != null){
                    $img1=Yii::app()->basePath . '/uploads/' . $model->press_file_1;
                   if(!file_exists($img1)){
                $model->press_file_1->saveAs(Yii::app()->basePath . '/uploads/' . $model->press_file_1);}}
                
                
                if ($model->press_file_2 != null){
                     $img2=Yii::app()->basePath . '/uploads/' . $model->press_file_2;
                     if(!file_exists($img2)){
                $model->press_file_2->saveAs(Yii::app()->basePath . '/uploads/' . $model->press_file_2);}}
                
                if ($model->press_file_3 != null){
                  $img3=Yii::app()->basePath . '/uploads/' . $model->press_file_3;
                     if(!file_exists($img3)){
                $model->press_file_3->saveAs(Yii::app()->basePath . '/uploads/' . $model->press_file_3);}}
                
                if ($status == "N" || $status == "Q")
                    $this->redirect(array('/press/scheduled'));
                else
                    $this->redirect(array('/press/drafts'));
                
            }
        }

        $this->render('update', array(
            'model' => $model
        ));
    }

    public function actionDrafts() {
        $press_user = Yii::app()->user->id;
        $criteria = new CDbCriteria;
        $criteria->condition = 'press_user=:press_user AND press_status=:press_status';
        $criteria->params = array(':press_user' => $press_user, ':press_status' => 'D');
        $presses = Press::model()->findAll($criteria);
        $this->render('drafts', array(
            'presses' => $presses,
        ));
        
        
    }

    public function actionReleased() {
        $press_user = Yii::app()->user->id;
        $criteria = new CDbCriteria;
        $criteria->condition = 'press_user=:press_user AND (press_status=:press_status OR press_status=:press_status1 )';
        $criteria->params = array(':press_user' => $press_user, ':press_status' => 'C', ':press_status1' => 'F');
        $presses = Press::model()->findAll($criteria);
        $this->render('released', array(
            'presses' => $presses,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        $this->redirect('drafts');
    }

    public function actionDeletepress($id) {

        $this->loadModel($id)->delete();
        $this->redirect(Yii::app()->request->baseUrl . '/index.php/press/drafts');
    }

    public function actionDeletepress1($id) {

        $this->loadModel($id)->delete();
        $this->redirect(Yii::app()->request->baseUrl . '/index.php/press/scheduled');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Press');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Press('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Press']))
            $model->attributes = $_GET['Press'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Press the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Press::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Press $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'press-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
