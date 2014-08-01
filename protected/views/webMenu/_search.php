<?php
/* @var $this WebMenuController */
/* @var $model WebMenu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'menu_id'); ?>
		<?php echo $form->textField($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_title'); ?>
		<?php echo $form->textField($model,'menu_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_title_c'); ?>
		<?php echo $form->textField($model,'menu_title_c',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_parent'); ?>
		<?php echo $form->textField($model,'menu_parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_path'); ?>
		<?php echo $form->textField($model,'menu_path',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_header'); ?>
		<?php echo $form->textField($model,'menu_header',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_header_c'); ?>
		<?php echo $form->textField($model,'menu_header_c',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_order'); ?>
		<?php echo $form->textField($model,'menu_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_type'); ?>
		<?php echo $form->textField($model,'menu_type',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_online'); ?>
		<?php echo $form->textField($model,'menu_online',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_content'); ?>
		<?php echo $form->textArea($model,'menu_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_lang_country'); ?>
		<?php echo $form->textField($model,'menu_lang_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_lang_group'); ?>
		<?php echo $form->textField($model,'menu_lang_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_added'); ?>
		<?php echo $form->textField($model,'menu_added'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->