<?php
/* @var $this PressController */
/* @var $model Press */

$this->breadcrumbs=array(
	'Presses'=>array('index'),
	$model->press_id=>array('view','id'=>$model->press_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Press', 'url'=>array('index')),
	array('label'=>'Create Press', 'url'=>array('create')),
	array('label'=>'View Press', 'url'=>array('view', 'id'=>$model->press_id)),
	array('label'=>'Manage Press', 'url'=>array('admin')),
);
?>

<h1>Update Press <?php echo $model->press_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>