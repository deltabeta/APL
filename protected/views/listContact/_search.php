<?php
/* @var $this ListContactController */
/* @var $model ListContact */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'list_id'); ?>
		<?php echo $form->textField($model,'list_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_user'); ?>
		<?php echo $form->textField($model,'list_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_name'); ?>
		<?php echo $form->textField($model,'list_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ist_notes'); ?>
		<?php echo $form->textArea($model,'ist_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->