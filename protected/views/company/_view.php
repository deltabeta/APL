<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->comp_id), array('view', 'id'=>$data->comp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_group')); ?>:</b>
	<?php echo CHtml::encode($data->comp_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_name')); ?>:</b>
	<?php echo CHtml::encode($data->comp_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_address')); ?>:</b>
	<?php echo CHtml::encode($data->comp_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_address_nr')); ?>:</b>
	<?php echo CHtml::encode($data->comp_address_nr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_address_nr_addon')); ?>:</b>
	<?php echo CHtml::encode($data->comp_address_nr_addon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_postal_code')); ?>:</b>
	<?php echo CHtml::encode($data->comp_postal_code); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_city')); ?>:</b>
	<?php echo CHtml::encode($data->comp_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_iso')); ?>:</b>
	<?php echo CHtml::encode($data->country_iso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_pub_region')); ?>:</b>
	<?php echo CHtml::encode($data->comp_pub_region); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_pub_country_iso')); ?>:</b>
	<?php echo CHtml::encode($data->comp_pub_country_iso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_pub_city')); ?>:</b>
	<?php echo CHtml::encode($data->comp_pub_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_phone')); ?>:</b>
	<?php echo CHtml::encode($data->comp_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_fax')); ?>:</b>
	<?php echo CHtml::encode($data->comp_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_email')); ?>:</b>
	<?php echo CHtml::encode($data->comp_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_website')); ?>:</b>
	<?php echo CHtml::encode($data->comp_website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_main_contact')); ?>:</b>
	<?php echo CHtml::encode($data->comp_main_contact); ?>
	<br />

	*/ ?>

</div>