<?php
/* @var $this MailingController */
/* @var $model Mailing */

$this->breadcrumbs=array(
	'Mailings'=>array('index'),
	$model->mailing_id,
);

$this->menu=array(
	array('label'=>'List Mailing', 'url'=>array('index')),
	array('label'=>'Create Mailing', 'url'=>array('create')),
	array('label'=>'Update Mailing', 'url'=>array('update', 'id'=>$model->mailing_id)),
	array('label'=>'Delete Mailing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mailing_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mailing', 'url'=>array('admin')),
);
?>

<h1>View Mailing #<?php echo $model->mailing_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mailing_id',
		'subject',
		'body',
		'startdate',
		'enddate',
	),
)); ?>
