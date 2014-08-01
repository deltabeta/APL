<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Contact', 'url'=>array('index')),
	array('label'=>'Create Contact', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contact-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contacts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'contact_id',
		'contact_email',
		'contact_name_ini',
		'contact_name_first',
		'contact_name_last',
		'contact_gender',
		/*
		'contact_adress',
		'contact_address_nr',
		'contact_address_addon',
		'contact_iso_country',
		'contact_city',
		'contact_phone',
		'contact_website',
		'contact_tw',
		'contact_fb',
		'contact_go',
		'contact_yt',
		'contact_li',
		'contact_bio',
		'contact_is_imported',
		'contact_imported_src',
		'contact_status',
		'contact_login_pass',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
