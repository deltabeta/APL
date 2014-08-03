<?php
/* @var $this IsoCountryController */
/* @var $model IsoCountry */

$this->breadcrumbs=array(
	'Iso Countries'=>array('index'),
	$model->country_iso=>array('view','id'=>$model->country_iso),
	'Update',
);

$this->menu=array(
	array('label'=>'List IsoCountry', 'url'=>array('index')),
	array('label'=>'Create IsoCountry', 'url'=>array('create')),
	array('label'=>'View IsoCountry', 'url'=>array('view', 'id'=>$model->country_iso)),
	array('label'=>'Manage IsoCountry', 'url'=>array('admin')),
);
?>

<h1>Update IsoCountry <?php echo $model->country_iso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>