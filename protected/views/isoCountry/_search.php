<?php
/* @var $this IsoCountryController */
/* @var $model IsoCountry */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'country_iso'); ?>
		<?php echo $form->textField($model,'country_iso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country_name'); ?>
		<?php echo $form->textField($model,'country_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'geo_region_id'); ?>
		<?php echo $form->textField($model,'geo_region_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'continent_code'); ?>
		<?php echo $form->textField($model,'continent_code',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->