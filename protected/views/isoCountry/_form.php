<?php
/* @var $this IsoCountryController */
/* @var $model IsoCountry */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'iso-country-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'country_iso'); ?>
		<?php echo $form->textField($model,'country_iso'); ?>
		<?php echo $form->error($model,'country_iso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_name'); ?>
		<?php echo $form->textField($model,'country_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'country_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'geo_region_id'); ?>
		<?php echo $form->textField($model,'geo_region_id'); ?>
		<?php echo $form->error($model,'geo_region_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'continent_code'); ?>
		<?php echo $form->textField($model,'continent_code',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'continent_code'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->