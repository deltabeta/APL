<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_package_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_package_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pass')); ?>:</b>
	<?php echo CHtml::encode($data->user_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_credits')); ?>:</b>
	<?php echo CHtml::encode($data->user_credits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_registered')); ?>:</b>
	<?php echo CHtml::encode($data->user_registered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_verified')); ?>:</b>
	<?php echo CHtml::encode($data->user_verified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_activity')); ?>:</b>
	<?php echo CHtml::encode($data->user_activity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_deactivated')); ?>:</b>
	<?php echo CHtml::encode($data->user_deactivated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_password_request')); ?>:</b>
	<?php echo CHtml::encode($data->user_password_request); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_initials')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_initials); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_name_first')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_name_first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_name_last')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_name_last); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_address')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_address_nr')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_address_nr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_address_addon')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_address_addon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_city')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_country')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_phone')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_camp_name')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_camp_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_camp_function')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_camp_function); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_camp_country')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_camp_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_camp_account')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_camp_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_camp_email')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_camp_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_camp_website')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_camp_website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porfile_coc')); ?>:</b>
	<?php echo CHtml::encode($data->porfile_coc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile_remarks')); ?>:</b>
	<?php echo CHtml::encode($data->profile_remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usetting_sender_name')); ?>:</b>
	<?php echo CHtml::encode($data->usetting_sender_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usetting_sender_email')); ?>:</b>
	<?php echo CHtml::encode($data->usetting_sender_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usetting_replyto_name')); ?>:</b>
	<?php echo CHtml::encode($data->usetting_replyto_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usetting_replyto_email')); ?>:</b>
	<?php echo CHtml::encode($data->usetting_replyto_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usetting_bounce_email')); ?>:</b>
	<?php echo CHtml::encode($data->usetting_bounce_email); ?>
	<br />

	*/ ?>

</div>