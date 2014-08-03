<?php
/* @var $this PressController */
/* @var $model Press */

$this->breadcrumbs=array(
	'Presses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Press', 'url'=>array('index')),
	array('label'=>'Create Press', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#press-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Presses</h1>

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
	'id'=>'press-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'press_id',
		'press_user',
		'list_id',
		'press_subject',
		'press_content',
		'press_status',
		/*
		'press_contacts_mailed',
		'press_contacts_failed',
		'press_date',
		'press_date_started',
		'press_date_completed',
		'press_sender_name',
		'press_sender_email',
		'press_replyto_name',
		'press_replyto_email',
		'press_file_1',
		'press_file_2',
		'press_file_3',
		'press_pub_abc',
		'press_pub_linkedin',
		'press_pub_facebook',
		'press_pub_twitter',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
