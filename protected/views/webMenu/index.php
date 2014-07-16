<?php
/* @var $this WebMenuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Web Menus',
);

$this->menu=array(
	array('label'=>'Create WebMenu', 'url'=>array('create')),
	array('label'=>'Manage WebMenu', 'url'=>array('admin')),
);
?>

<h1>Web Menus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
