<?php
/* @var $this PressController */
/* @var $data Press */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->press_id), array('view', 'id'=>$data->press_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_user')); ?>:</b>
	<?php echo CHtml::encode($data->press_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_id')); ?>:</b>
	<?php echo CHtml::encode($data->list_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_subject')); ?>:</b>
	<?php echo CHtml::encode($data->press_subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_content')); ?>:</b>
	<?php echo CHtml::encode($data->press_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_status')); ?>:</b>
	<?php echo CHtml::encode($data->press_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_contacts_mailed')); ?>:</b>
	<?php echo CHtml::encode($data->press_contacts_mailed); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('press_contacts_failed')); ?>:</b>
	<?php echo CHtml::encode($data->press_contacts_failed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_date')); ?>:</b>
	<?php echo CHtml::encode($data->press_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_date_started')); ?>:</b>
	<?php echo CHtml::encode($data->press_date_started); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_date_completed')); ?>:</b>
	<?php echo CHtml::encode($data->press_date_completed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_sender_name')); ?>:</b>
	<?php echo CHtml::encode($data->press_sender_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_sender_email')); ?>:</b>
	<?php echo CHtml::encode($data->press_sender_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_replyto_name')); ?>:</b>
	<?php echo CHtml::encode($data->press_replyto_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_replyto_email')); ?>:</b>
	<?php echo CHtml::encode($data->press_replyto_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_file_1')); ?>:</b>
	<?php echo CHtml::encode($data->press_file_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_file_2')); ?>:</b>
	<?php echo CHtml::encode($data->press_file_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_file_3')); ?>:</b>
	<?php echo CHtml::encode($data->press_file_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_pub_abc')); ?>:</b>
	<?php echo CHtml::encode($data->press_pub_abc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_pub_linkedin')); ?>:</b>
	<?php echo CHtml::encode($data->press_pub_linkedin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_pub_facebook')); ?>:</b>
	<?php echo CHtml::encode($data->press_pub_facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press_pub_twitter')); ?>:</b>
	<?php echo CHtml::encode($data->press_pub_twitter); ?>
	<br />

	*/ ?>

</div>