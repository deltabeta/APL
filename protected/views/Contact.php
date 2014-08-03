<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-Contact-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email'); ?>
		<?php echo $form->error($model,'contact_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_name_first'); ?>
		<?php echo $form->textField($model,'contact_name_first'); ?>
		<?php echo $form->error($model,'contact_name_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_name_last'); ?>
		<?php echo $form->textField($model,'contact_name_last'); ?>
		<?php echo $form->error($model,'contact_name_last'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_login_pass'); ?>
		<?php echo $form->textField($model,'contact_login_pass'); ?>
		<?php echo $form->error($model,'contact_login_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_address_nr'); ?>
		<?php echo $form->textField($model,'contact_address_nr'); ?>
		<?php echo $form->error($model,'contact_address_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_iso_country'); ?>
		<?php echo $form->textField($model,'contact_iso_country'); ?>
		<?php echo $form->error($model,'contact_iso_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_name_ini'); ?>
		<?php echo $form->textField($model,'contact_name_ini'); ?>
		<?php echo $form->error($model,'contact_name_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_adress'); ?>
		<?php echo $form->textField($model,'contact_adress'); ?>
		<?php echo $form->error($model,'contact_adress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_address_addon'); ?>
		<?php echo $form->textField($model,'contact_address_addon'); ?>
		<?php echo $form->error($model,'contact_address_addon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_city'); ?>
		<?php echo $form->textField($model,'contact_city'); ?>
		<?php echo $form->error($model,'contact_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_phone'); ?>
		<?php echo $form->textField($model,'contact_phone'); ?>
		<?php echo $form->error($model,'contact_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_website'); ?>
		<?php echo $form->textField($model,'contact_website'); ?>
		<?php echo $form->error($model,'contact_website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_tw'); ?>
		<?php echo $form->textField($model,'contact_tw'); ?>
		<?php echo $form->error($model,'contact_tw'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_fb'); ?>
		<?php echo $form->textField($model,'contact_fb'); ?>
		<?php echo $form->error($model,'contact_fb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_go'); ?>
		<?php echo $form->textField($model,'contact_go'); ?>
		<?php echo $form->error($model,'contact_go'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_yt'); ?>
		<?php echo $form->textField($model,'contact_yt'); ?>
		<?php echo $form->error($model,'contact_yt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_li'); ?>
		<?php echo $form->textField($model,'contact_li'); ?>
		<?php echo $form->error($model,'contact_li'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_imported_src'); ?>
		<?php echo $form->textField($model,'contact_imported_src'); ?>
		<?php echo $form->error($model,'contact_imported_src'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_gender'); ?>
		<?php echo $form->textField($model,'contact_gender'); ?>
		<?php echo $form->error($model,'contact_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_is_imported'); ?>
		<?php echo $form->textField($model,'contact_is_imported'); ?>
		<?php echo $form->error($model,'contact_is_imported'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_status'); ?>
		<?php echo $form->textField($model,'contact_status'); ?>
		<?php echo $form->error($model,'contact_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_bio'); ?>
		<?php echo $form->textField($model,'contact_bio'); ?>
		<?php echo $form->error($model,'contact_bio'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->