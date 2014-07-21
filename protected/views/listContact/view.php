<?php
/* @var $this ListContactController */
/* @var $model ListContact */

$this->breadcrumbs=array(
	'List Contacts'=>array('index'),
	$model->list_id,
);

$this->menu=array(
	array('label'=>'List ListContact', 'url'=>array('index')),
	array('label'=>'Create ListContact', 'url'=>array('create')),
	array('label'=>'Update ListContact', 'url'=>array('update', 'id'=>$model->list_id)),
	array('label'=>'Delete ListContact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->list_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListContact', 'url'=>array('admin')),
);
?>

<h1>View ListContact #<?php echo $model->list_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'list_id',
		'list_user',
		'list_name',
		'ist_notes',
	),
)); ?>
