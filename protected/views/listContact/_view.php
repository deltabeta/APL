<?php
/* @var $this ListContactController */
/* @var $data ListContact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->list_id), array('view', 'id'=>$data->list_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_user')); ?>:</b>
	<?php echo CHtml::encode($data->list_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_name')); ?>:</b>
	<?php echo CHtml::encode($data->list_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ist_notes')); ?>:</b>
	<?php echo CHtml::encode($data->ist_notes); ?>
	<br />


</div>