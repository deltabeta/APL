<?php

class ListContactController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = 'layoutjournalist';

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
                'actions' => array('admin', 'create', 'update', 'delete', 'deletelist','doc','docsearch'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array(''),
                'users' => array('admin'),
            ),
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

        $list = ListContact::model()->findByPk($id);
        $contact = $list->contacts;
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'contact' => $contact,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionDoc() {
 $doc = new ASolrDocument;
$doc->id = 123;
$doc->name = "test document";
$doc->save(); // adds the document to solr
$doc->getSolrConnection()->commit();
    }
    
    public function actionDocsearch() {
    $criteria = new ASolrCriteria;
$criteria->query = "name:test"; // lucene query syntax
$docs = ASolrDocument::model()->findAll($criteria);
    }
    
    
    public function actionCreate() {
        $model = new ListContact;


        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ListContact'])) {

            if (empty($_POST['listexist'])) {
                $model->attributes = $_POST['ListContact'];

                if ($model->save()) {
                    $contact = ListContact::model()->findByPk($model->list_id);
                    $contacts_id = $_POST['contact_id'];
                    $contact->contacts = $contacts_id;
                    $contact->save();
                    $this->redirect(array('view', 'id' => $model->list_id));
                }
            } else {
                $contact = ListContact::model()->findByPk($_POST['listexist']);
                $contacts = $contact->contacts;

                $i = 0;
                foreach ($contacts as $value) {
                    $anciencontact[$i] = $value->contact_id;
                    $i++;
                }
                $contacts_id = $_POST['contact_id'];
                $tabcontact = array_merge($anciencontact, $contacts_id);
                $contactinsert = array_unique($tabcontact);
                print_r($contactinsert);
                $contact->contacts = $contactinsert;

                $contact->save();
                $this->redirect(array('view', 'id' => $_POST['listexist']));
            }
        }
        $contact = Contact::model()->findAll();
        $listcontact = ListContact::model()->findAll();
        $this->render('create', array(
            'model' => $model, 'contact' => $contact, 'listcontact' => $listcontact
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ListContact'])) {
            $model->attributes = $_POST['ListContact'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->list_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionDeletelist($id) {
        $this->loadModel($id)->delete();

        $this->redirect(Yii::app()->request->baseUrl . '/listContact/index');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('ListContact');

        //$contact = ListContact::model()->findByPk(1);
        //$contact->contacts;
        //echo count($contact->contacts);
        //echo Yii::app()->user->id;
        $user = Client::model()->findByPk(Yii::app()->user->id);
        //print_r($user);
        $list = $user->lists;



        $this->render('index', array(
            'list' => $list,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new ListContact('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ListContact']))
            $model->attributes = $_GET['ListContact'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ListContact the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ListContact::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ListContact $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'list-contact-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
