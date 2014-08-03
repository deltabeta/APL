<?php
/* @var $this IsoCountryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Iso Countries',
);

$this->menu=array(
	array('label'=>'Create IsoCountry', 'url'=>array('create')),
	array('label'=>'Manage IsoCountry', 'url'=>array('admin')),
);
?>

<h1>Iso Countries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
