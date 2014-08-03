<?php
/* @var $this WebMenuController */
/* @var $model WebMenu */

$this->breadcrumbs=array(
	'Web Menus'=>array('index'),
	$model->menu_id=>array('view','id'=>$model->menu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WebMenu', 'url'=>array('index')),
	array('label'=>'Create WebMenu', 'url'=>array('create')),
	array('label'=>'View WebMenu', 'url'=>array('view', 'id'=>$model->menu_id)),
	array('label'=>'Manage WebMenu', 'url'=>array('admin')),
);
?>

<h1>Update WebMenu <?php echo $model->menu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>