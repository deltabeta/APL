<?php
/* @var $this PressController */
/* @var $model Press */

$this->breadcrumbs=array(
	'Presses'=>array('index'),
	$model->press_id,
);

$this->menu=array(
	array('label'=>'List Press', 'url'=>array('index')),
	array('label'=>'Create Press', 'url'=>array('create')),
	array('label'=>'Update Press', 'url'=>array('update', 'id'=>$model->press_id)),
	array('label'=>'Delete Press', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->press_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Press', 'url'=>array('admin')),
);
?>

<h1>View Press #<?php echo $model->press_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'press_id',
		'press_user',
		'list_id',
		'press_subject',
		'press_content',
		'press_status',
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
	),
)); ?>
