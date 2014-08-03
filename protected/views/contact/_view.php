<?php
/* @var $this ContactController */
/* @var $data Contact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contact_id), array('view', 'id'=>$data->contact_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_email')); ?>:</b>
	<?php echo CHtml::encode($data->contact_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_name_ini')); ?>:</b>
	<?php echo CHtml::encode($data->contact_name_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_name_first')); ?>:</b>
	<?php echo CHtml::encode($data->contact_name_first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_name_last')); ?>:</b>
	<?php echo CHtml::encode($data->contact_name_last); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_gender')); ?>:</b>
	<?php echo CHtml::encode($data->contact_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_adress')); ?>:</b>
	<?php echo CHtml::encode($data->contact_adress); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_address_nr')); ?>:</b>
	<?php echo CHtml::encode($data->contact_address_nr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_address_addon')); ?>:</b>
	<?php echo CHtml::encode($data->contact_address_addon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_iso_country')); ?>:</b>
	<?php echo CHtml::encode($data->contact_iso_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_city')); ?>:</b>
	<?php echo CHtml::encode($data->contact_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_phone')); ?>:</b>
	<?php echo CHtml::encode($data->contact_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_website')); ?>:</b>
	<?php echo CHtml::encode($data->contact_website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_tw')); ?>:</b>
	<?php echo CHtml::encode($data->contact_tw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_fb')); ?>:</b>
	<?php echo CHtml::encode($data->contact_fb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_go')); ?>:</b>
	<?php echo CHtml::encode($data->contact_go); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_yt')); ?>:</b>
	<?php echo CHtml::encode($data->contact_yt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_li')); ?>:</b>
	<?php echo CHtml::encode($data->contact_li); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_bio')); ?>:</b>
	<?php echo CHtml::encode($data->contact_bio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_is_imported')); ?>:</b>
	<?php echo CHtml::encode($data->contact_is_imported); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_imported_src')); ?>:</b>
	<?php echo CHtml::encode($data->contact_imported_src); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_status')); ?>:</b>
	<?php echo CHtml::encode($data->contact_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_login_pass')); ?>:</b>
	<?php echo CHtml::encode($data->contact_login_pass); ?>
	<br />

	*/ ?>

</div>