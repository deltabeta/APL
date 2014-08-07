<?php
/* @var $this FunctionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Functions',
);

$this->menu=array(
	array('label'=>'Create Functions', 'url'=>array('create')),
	array('label'=>'Manage Functions', 'url'=>array('admin')),
);
?>

<h1>Functions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
