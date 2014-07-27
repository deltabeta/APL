<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id,
);

$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Create User', 'url'=>array('create')),
//	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->user_id)),
//	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->user_email; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'user_package_id',
		//'user_pass',
		'user_credits',
		'user_registered',
		'user_verified',
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
	),
)); ?>
