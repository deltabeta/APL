<?php
/* @var $this ListUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List Users',
);

$this->menu=array(
	array('label'=>'Create ListUser', 'url'=>array('create')),
	array('label'=>'Manage ListUser', 'url'=>array('admin')),
);
?>

<h1>List Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
