<?php
/* @var $this IsoCountryController */
/* @var $model IsoCountry */

$this->breadcrumbs=array(
	'Iso Countries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IsoCountry', 'url'=>array('index')),
	array('label'=>'Manage IsoCountry', 'url'=>array('admin')),
);
?>

<h1>Create IsoCountry</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>