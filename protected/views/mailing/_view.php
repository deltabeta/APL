<?php
/* @var $this MailingController */
/* @var $data Mailing */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mailing_id), array('view', 'id'=>$data->mailing_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<?php echo CHtml::encode($data->body); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startdate')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enddate')); ?>:</b>
	<?php echo CHtml::encode($data->enddate); ?>
	<br />


</div>