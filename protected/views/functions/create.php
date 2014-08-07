<?php
/* @var $this FunctionsController */
/* @var $model Functions */

$this->breadcrumbs=array(
	'Functions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Functions', 'url'=>array('index')),
	array('label'=>'Manage Functions', 'url'=>array('admin')),
);
?>

<h1>Create Functions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>