<?php
/* @var $this WebMenuController */
/* @var $data WebMenu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->menu_id), array('view', 'id'=>$data->menu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_title')); ?>:</b>
	<?php echo CHtml::encode($data->menu_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_title_c')); ?>:</b>
	<?php echo CHtml::encode($data->menu_title_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_parent')); ?>:</b>
	<?php echo CHtml::encode($data->menu_parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_path')); ?>:</b>
	<?php echo CHtml::encode($data->menu_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_header')); ?>:</b>
	<?php echo CHtml::encode($data->menu_header); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_header_c')); ?>:</b>
	<?php echo CHtml::encode($data->menu_header_c); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_order')); ?>:</b>
	<?php echo CHtml::encode($data->menu_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_type')); ?>:</b>
	<?php echo CHtml::encode($data->menu_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_online')); ?>:</b>
	<?php echo CHtml::encode($data->menu_online); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_content')); ?>:</b>
	<?php echo CHtml::encode($data->menu_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_lang_country')); ?>:</b>
	<?php echo CHtml::encode($data->menu_lang_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_lang_group')); ?>:</b>
	<?php echo CHtml::encode($data->menu_lang_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_added')); ?>:</b>
	<?php echo CHtml::encode($data->menu_added); ?>
	<br />

	*/ ?>

</div>