<?php
/* @var $this PressController */
/* @var $model Press */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'press-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<h2>Email Information</h2> 
<!--	<div class="row">
            <?php echo $form->labelEx($model,'press_user'); ?>
		<?php echo $form->textField($model,'press_user'); ?>
		<?php echo $form->error($model,'press_user'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Contact List:'); ?>
 <?php  echo $form->dropDownList($model, 'list_id', CHtml::listData(ListContact::model()->findAll(), 'list_id', 'list_name')); ?>

		<?php echo $form->error($model,'list_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Subject:'); ?>
		<?php echo $form->textField($model,'press_subject',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'press_subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_content'); ?>
		<?php echo $form->textArea($model,'press_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'press_content'); ?>
	</div>

<h2>Sender & ReplyTo</h2>
	<div class="row">
		<?php echo $form->labelEx($model,'sender_name'); ?>
		<?php echo $form->textField($model,'press_sender_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'press_sender_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sender_email'); ?>
		<?php echo $form->textField($model,'press_sender_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'press_sender_email'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'replyto_name'); ?>
		<?php echo $form->textField($model,'press_replyto_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'press_replyto_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'replyto_email'); ?>
		<?php echo $form->textField($model,'press_replyto_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'press_replyto_email'); ?>
	</div>
<h2>Publication Type & Date</h2>

<div class="row">
		<?php echo $form->labelEx($model,'press_date'); ?>
		<?php echo $form->textField($model,'press_date'); ?>
		<?php echo $form->error($model,'press_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_date_started'); ?>
		<?php echo $form->textField($model,'press_date_started'); ?>
		<?php echo $form->error($model,'press_date_started'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_date_completed'); ?>
		<?php echo $form->textField($model,'press_date_completed'); ?>
		<?php echo $form->error($model,'press_date_completed'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'press_status'); ?>
		<?php echo $form->textField($model,'press_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'press_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_contacts_mailed'); ?>
		<?php echo $form->textField($model,'press_contacts_mailed'); ?>
		<?php echo $form->error($model,'press_contacts_mailed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_contacts_failed'); ?>
		<?php echo $form->textField($model,'press_contacts_failed'); ?>
		<?php echo $form->error($model,'press_contacts_failed'); ?>
	</div>

	


 <!--das muss gemacht werden  seif bitte nicht vergessen !!!!!!!!!!!!-->
<!--	
	<div class="row">
		<?php echo $form->labelEx($model,'press_file_1'); ?>
		<?php echo $form->textField($model,'press_file_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'press_file_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_file_2'); ?>
		<?php echo $form->textField($model,'press_file_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'press_file_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_file_3'); ?>
		<?php echo $form->textField($model,'press_file_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'press_file_3'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'press_pub_abc'); ?>
		<?php echo $form->textField($model,'press_pub_abc'); ?>
		<?php echo $form->error($model,'press_pub_abc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_pub_linkedin'); ?>
		<?php echo $form->textField($model,'press_pub_linkedin'); ?>
		<?php echo $form->error($model,'press_pub_linkedin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_pub_facebook'); ?>
		<?php echo $form->textField($model,'press_pub_facebook'); ?>
		<?php echo $form->error($model,'press_pub_facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'press_pub_twitter'); ?>
		<?php echo $form->textField($model,'press_pub_twitter'); ?>
		<?php echo $form->error($model,'press_pub_twitter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->