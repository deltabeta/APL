<?php
/* @var $this PressController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presses',
);

$this->menu=array(
	array('label'=>'Create Press', 'url'=>array('create')),
	array('label'=>'Manage Press', 'url'=>array('admin')),
);
?>

<h1>Presses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
