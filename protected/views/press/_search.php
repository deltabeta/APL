<?php
/* @var $this PressController */
/* @var $model Press */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'press_id'); ?>
		<?php echo $form->textField($model,'press_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_user'); ?>
		<?php echo $form->textField($model,'press_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_id'); ?>
		<?php echo $form->textField($model,'list_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_subject'); ?>
		<?php echo $form->textField($model,'press_subject',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_content'); ?>
		<?php echo $form->textArea($model,'press_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_status'); ?>
		<?php echo $form->textField($model,'press_status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_contacts_mailed'); ?>
		<?php echo $form->textField($model,'press_contacts_mailed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_contacts_failed'); ?>
		<?php echo $form->textField($model,'press_contacts_failed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_date'); ?>
		<?php echo $form->textField($model,'press_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_date_started'); ?>
		<?php echo $form->textField($model,'press_date_started'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_date_completed'); ?>
		<?php echo $form->textField($model,'press_date_completed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_sender_name'); ?>
		<?php echo $form->textField($model,'press_sender_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_sender_email'); ?>
		<?php echo $form->textField($model,'press_sender_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_replyto_name'); ?>
		<?php echo $form->textField($model,'press_replyto_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_replyto_email'); ?>
		<?php echo $form->textField($model,'press_replyto_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_file_1'); ?>
		<?php echo $form->textField($model,'press_file_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_file_2'); ?>
		<?php echo $form->textField($model,'press_file_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_file_3'); ?>
		<?php echo $form->textField($model,'press_file_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_pub_abc'); ?>
		<?php echo $form->textField($model,'press_pub_abc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_pub_linkedin'); ?>
		<?php echo $form->textField($model,'press_pub_linkedin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_pub_facebook'); ?>
		<?php echo $form->textField($model,'press_pub_facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press_pub_twitter'); ?>
		<?php echo $form->textField($model,'press_pub_twitter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->