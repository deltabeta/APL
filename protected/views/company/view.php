<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->comp_id,
);

$this->menu=array(
	array('label'=>'List Company', 'url'=>array('index')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'Update Company', 'url'=>array('update', 'id'=>$model->comp_id)),
	array('label'=>'Delete Company', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->comp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Company', 'url'=>array('admin')),
);
?>

<h1>View Company #<?php echo $model->comp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'comp_id',
		'comp_group',
		'comp_name',
		'comp_address',
		'comp_address_nr',
		'comp_address_nr_addon',
		'comp_postal_code',
		'comp_city',
		'country_iso',
		'comp_pub_region',
		'comp_pub_country_iso',
		'comp_pub_city',
		'comp_phone',
		'comp_fax',
		'comp_email',
		'comp_website',
		'comp_main_contact',
	),
)); ?>
