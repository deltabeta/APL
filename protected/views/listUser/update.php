<?php
/* @var $this ListUserController */
/* @var $model ListUser */

$this->breadcrumbs=array(
	'List Users'=>array('index'),
	$model->list_id=>array('view','id'=>$model->list_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ListUser', 'url'=>array('index')),
	array('label'=>'Create ListUser', 'url'=>array('create')),
	array('label'=>'View ListUser', 'url'=>array('view', 'id'=>$model->list_id)),
	array('label'=>'Manage ListUser', 'url'=>array('admin')),
);
?>

<h1>Update ListUser <?php echo $model->list_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>