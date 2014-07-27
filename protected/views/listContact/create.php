<?php
/* @var $this ListContactController */
/* @var $model ListContact */

$this->breadcrumbs=array(
	'List Contacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ListContact', 'url'=>array('index')),
	array('label'=>'Manage ListContact', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model,'contact'=>$contact, 'categories' => $categories,
            'isolanguages' => $isolanguages)); ?>