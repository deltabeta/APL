<?php
/* @var $this WebMenuController */
/* @var $model WebMenu */

$this->breadcrumbs=array(
	'Web Menus'=>array('index'),
	$model->menu_id,
);

$this->menu=array(
	array('label'=>'List WebMenu', 'url'=>array('index')),
	array('label'=>'Create WebMenu', 'url'=>array('create')),
	array('label'=>'Update WebMenu', 'url'=>array('update', 'id'=>$model->menu_id)),
	array('label'=>'Delete WebMenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->menu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WebMenu', 'url'=>array('admin')),
);
?>

<h1>View WebMenu #<?php echo $model->menu_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'menu_id',
		'menu_title',
		'menu_title_c',
		'menu_parent',
		'menu_path',
		'menu_header',
		'menu_header_c',
		'menu_order',
		'menu_type',
		'menu_online',
		'menu_content',
		'menu_lang_country',
		'menu_lang_group',
		'menu_added',
	),
)); ?>
