<?php
/* @var $this MailingController */
/* @var $model Mailing */

$this->breadcrumbs=array(
	'Mailings'=>array('index'),
	$model->mailing_id=>array('view','id'=>$model->mailing_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mailing', 'url'=>array('index')),
	array('label'=>'Create Mailing', 'url'=>array('create')),
	array('label'=>'View Mailing', 'url'=>array('view', 'id'=>$model->mailing_id)),
	array('label'=>'Manage Mailing', 'url'=>array('admin')),
);
?>

<h1>Update Mailing <?php echo $model->mailing_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>