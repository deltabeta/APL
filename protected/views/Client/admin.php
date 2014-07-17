<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

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
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_package_id',
		'user_pass',
		'user_credits',
		'user_registered',
		'user_verified',
		/*
		'user_activity',
		'user_deactivated',
		'user_password_request',
		'user_email',
		'porfile_initials',
		'porfile_name_first',
		'porfile_name_last',
		'porfile_address',
		'porfile_address_nr',
		'porfile_address_addon',
		'porfile_city',
		'porfile_country',
		'porfile_phone',
		'porfile_mobile',
		'porfile_camp_name',
		'porfile_camp_function',
		'porfile_camp_country',
		'porfile_camp_account',
		'porfile_camp_email',
		'porfile_camp_website',
		'porfile_coc',
		'profile_remarks',
		'usetting_sender_name',
		'usetting_sender_email',
		'usetting_replyto_name',
		'usetting_replyto_email',
		'usetting_bounce_email',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
