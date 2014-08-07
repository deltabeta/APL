<?php
/* @var $this FunctionsController */
/* @var $model Functions */

$this->breadcrumbs=array(
	'Functions'=>array('index'),
	$model->function_id,
);

$this->menu=array(
	array('label'=>'List Functions', 'url'=>array('index')),
	array('label'=>'Create Functions', 'url'=>array('create')),
	array('label'=>'Update Functions', 'url'=>array('update', 'id'=>$model->function_id)),
	array('label'=>'Delete Functions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->function_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Functions', 'url'=>array('admin')),
);
?>

<h1>View Functions #<?php echo $model->function_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'function_id',
		'function_title',
	),
)); ?>
