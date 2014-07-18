<?php
/* @var $this ListUserController */
/* @var $model ListUser */

$this->breadcrumbs=array(
	'List Users'=>array('index'),
	$model->list_id,
);

$this->menu=array(
	array('label'=>'List ListUser', 'url'=>array('index')),
	array('label'=>'Create ListUser', 'url'=>array('create')),
	array('label'=>'Update ListUser', 'url'=>array('update', 'id'=>$model->list_id)),
	array('label'=>'Delete ListUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->list_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListUser', 'url'=>array('admin')),
);
?>

<h1>View ListUser #<?php echo $model->list_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'list_id',
		'list_user',
		'list_name',
		'ist_notes',
	),
)); ?>
