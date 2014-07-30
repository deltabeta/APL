<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->comp_id=>array('view','id'=>$model->comp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Company', 'url'=>array('index')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'View Company', 'url'=>array('view', 'id'=>$model->comp_id)),
	array('label'=>'Manage Company', 'url'=>array('admin')),
);
?>

<h1>Update Company <?php echo $model->comp_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>