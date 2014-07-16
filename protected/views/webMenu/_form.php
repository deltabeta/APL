<?php
/* @var $this WebMenuController */
/* @var $model WebMenu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'web-menu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_title'); ?>
		<?php echo $form->textField($model,'menu_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'menu_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_title_c'); ?>
		<?php echo $form->textField($model,'menu_title_c',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'menu_title_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_parent'); ?>
		<?php echo $form->textField($model,'menu_parent'); ?>
		<?php echo $form->error($model,'menu_parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_path'); ?>
		<?php echo $form->textField($model,'menu_path',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'menu_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_header'); ?>
		<?php echo $form->textField($model,'menu_header',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'menu_header'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_header_c'); ?>
		<?php echo $form->textField($model,'menu_header_c',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'menu_header_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_order'); ?>
		<?php echo $form->textField($model,'menu_order'); ?>
		<?php echo $form->error($model,'menu_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_type'); ?>
		<?php echo $form->textField($model,'menu_type',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'menu_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_online'); ?>
		<?php echo $form->textField($model,'menu_online',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'menu_online'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_content'); ?>
		<?php echo $form->textArea($model,'menu_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'menu_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_lang_country'); ?>
		<?php echo $form->textField($model,'menu_lang_country'); ?>
		<?php echo $form->error($model,'menu_lang_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_lang_group'); ?>
		<?php echo $form->textField($model,'menu_lang_group'); ?>
		<?php echo $form->error($model,'menu_lang_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_added'); ?>
		<?php echo $form->textField($model,'menu_added'); ?>
		<?php echo $form->error($model,'menu_added'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->