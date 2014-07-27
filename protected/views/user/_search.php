<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_package_id'); ?>
		<?php echo $form->textField($model,'user_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_pass'); ?>
		<?php echo $form->textField($model,'user_pass',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_credits'); ?>
		<?php echo $form->textField($model,'user_credits'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_registered'); ?>
		<?php echo $form->textField($model,'user_registered'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_verified'); ?>
		<?php echo $form->textField($model,'user_verified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_activity'); ?>
		<?php echo $form->textField($model,'user_activity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_deactivated'); ?>
		<?php echo $form->textField($model,'user_deactivated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_initials'); ?>
		<?php echo $form->textField($model,'porfile_initials'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_name_first'); ?>
		<?php echo $form->textField($model,'porfile_name_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_name_last'); ?>
		<?php echo $form->textField($model,'porfile_name_last'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_address'); ?>
		<?php echo $form->textField($model,'porfile_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_address_nr'); ?>
		<?php echo $form->textField($model,'porfile_address_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_address_addon'); ?>
		<?php echo $form->textField($model,'porfile_address_addon',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_city'); ?>
		<?php echo $form->textField($model,'porfile_city',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_country'); ?>
		<?php echo $form->textField($model,'porfile_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_phone'); ?>
		<?php echo $form->textField($model,'porfile_phone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_mobile'); ?>
		<?php echo $form->textField($model,'porfile_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_camp_name'); ?>
		<?php echo $form->textField($model,'porfile_camp_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_camp_function'); ?>
		<?php echo $form->textField($model,'porfile_camp_function',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_camp_country'); ?>
		<?php echo $form->textField($model,'porfile_camp_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_camp_account'); ?>
		<?php echo $form->textField($model,'porfile_camp_account',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_camp_email'); ?>
		<?php echo $form->textField($model,'porfile_camp_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_camp_website'); ?>
		<?php echo $form->textField($model,'porfile_camp_website',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porfile_coc'); ?>
		<?php echo $form->textField($model,'porfile_coc',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profile_remarks'); ?>
		<?php echo $form->textArea($model,'profile_remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usetting_sender_name'); ?>
		<?php echo $form->textField($model,'usetting_sender_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usetting_sender_email'); ?>
		<?php echo $form->textField($model,'usetting_sender_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usetting_replyto_name'); ?>
		<?php echo $form->textField($model,'usetting_replyto_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usetting_replyto_email'); ?>
		<?php echo $form->textField($model,'usetting_replyto_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usetting_bounce_email'); ?>
		<?php echo $form->textField($model,'usetting_bounce_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->