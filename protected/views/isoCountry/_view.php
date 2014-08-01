<?php
/* @var $this IsoCountryController */
/* @var $data IsoCountry */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_iso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->country_iso), array('view', 'id'=>$data->country_iso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_name')); ?>:</b>
	<?php echo CHtml::encode($data->country_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('geo_region_id')); ?>:</b>
	<?php echo CHtml::encode($data->geo_region_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('continent_code')); ?>:</b>
	<?php echo CHtml::encode($data->continent_code); ?>
	<br />


</div>