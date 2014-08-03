<?php
/* @var $this WebMenuController */
/* @var $model WebMenu */

$this->breadcrumbs=array(
	'Web Menus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WebMenu', 'url'=>array('index')),
	array('label'=>'Manage WebMenu', 'url'=>array('admin')),
);
?>

<h1>Create WebMenu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>