<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'comp_id'); ?>
		<?php echo $form->textField($model,'comp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_group'); ?>
		<?php echo $form->textField($model,'comp_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_name'); ?>
		<?php echo $form->textField($model,'comp_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_address'); ?>
		<?php echo $form->textField($model,'comp_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_address_nr'); ?>
		<?php echo $form->textField($model,'comp_address_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_address_nr_addon'); ?>
		<?php echo $form->textField($model,'comp_address_nr_addon',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_postal_code'); ?>
		<?php echo $form->textField($model,'comp_postal_code',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_city'); ?>
		<?php echo $form->textField($model,'comp_city',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country_iso'); ?>
		<?php echo $form->textField($model,'country_iso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_pub_region'); ?>
		<?php echo $form->textField($model,'comp_pub_region'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_pub_country_iso'); ?>
		<?php echo $form->textField($model,'comp_pub_country_iso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_pub_city'); ?>
		<?php echo $form->textField($model,'comp_pub_city',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_phone'); ?>
		<?php echo $form->textField($model,'comp_phone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_fax'); ?>
		<?php echo $form->textField($model,'comp_fax',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_email'); ?>
		<?php echo $form->textField($model,'comp_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_website'); ?>
		<?php echo $form->textField($model,'comp_website',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comp_main_contact'); ?>
		<?php echo $form->textField($model,'comp_main_contact'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->