<?php
/* @var $this MailingController */
/* @var $model Mailing */

$this->breadcrumbs=array(
	'Mailings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mailing', 'url'=>array('index')),
	array('label'=>'Manage Mailing', 'url'=>array('admin')),
);
?>

<h1>Create Mailing</h1>

<?php 

$this->renderPartial('_form', array('model'=>$model,'contact'=>$contact, 'user'=>$user)); ?>