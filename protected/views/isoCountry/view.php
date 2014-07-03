<?php
/* @var $this IsoCountryController */
/* @var $model IsoCountry */

$this->breadcrumbs=array(
	'Iso Countries'=>array('index'),
	$model->country_iso,
);

$this->menu=array(
	array('label'=>'List IsoCountry', 'url'=>array('index')),
	array('label'=>'Create IsoCountry', 'url'=>array('create')),
	array('label'=>'Update IsoCountry', 'url'=>array('update', 'id'=>$model->country_iso)),
	array('label'=>'Delete IsoCountry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->country_iso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IsoCountry', 'url'=>array('admin')),
);
?>

<h1>View IsoCountry #<?php echo $model->country_iso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'country_iso',
		'country_name',
		'geo_region_id',
		'continent_code',
	),
)); ?>
