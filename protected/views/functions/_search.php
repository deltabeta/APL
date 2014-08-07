<?php
/* @var $this FunctionsController */
/* @var $model Functions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'function_id'); ?>
		<?php echo $form->textField($model,'function_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_title'); ?>
		<?php echo $form->textField($model,'function_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->