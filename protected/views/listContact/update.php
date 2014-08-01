<?php
/* @var $this ListContactController */
/* @var $model ListContact */

$this->breadcrumbs=array(
	'List Contacts'=>array('index'),
	$model->list_id=>array('view','id'=>$model->list_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ListContact', 'url'=>array('index')),
	array('label'=>'Create ListContact', 'url'=>array('create')),
	array('label'=>'View ListContact', 'url'=>array('view', 'id'=>$model->list_id)),
	array('label'=>'Manage ListContact', 'url'=>array('admin')),
);
?>

<h1>Update ListContact <?php echo $model->list_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>