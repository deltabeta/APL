<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_name_ini'); ?>
		<?php echo $form->textField($model,'contact_name_ini',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_name_first'); ?>
		<?php echo $form->textField($model,'contact_name_first',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_name_last'); ?>
		<?php echo $form->textField($model,'contact_name_last',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_gender'); ?>
		<?php echo $form->textField($model,'contact_gender',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_adress'); ?>
		<?php echo $form->textField($model,'contact_adress',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_address_nr'); ?>
		<?php echo $form->textField($model,'contact_address_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_address_addon'); ?>
		<?php echo $form->textField($model,'contact_address_addon',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_iso_country'); ?>
		<?php echo $form->textField($model,'contact_iso_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_city'); ?>
		<?php echo $form->textField($model,'contact_city',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_phone'); ?>
		<?php echo $form->textField($model,'contact_phone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_website'); ?>
		<?php echo $form->textField($model,'contact_website',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_tw'); ?>
		<?php echo $form->textField($model,'contact_tw',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_fb'); ?>
		<?php echo $form->textField($model,'contact_fb',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_go'); ?>
		<?php echo $form->textField($model,'contact_go',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_yt'); ?>
		<?php echo $form->textField($model,'contact_yt',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_li'); ?>
		<?php echo $form->textField($model,'contact_li',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_bio'); ?>
		<?php echo $form->textArea($model,'contact_bio',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_is_imported'); ?>
		<?php echo $form->textField($model,'contact_is_imported',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_imported_src'); ?>
		<?php echo $form->textField($model,'contact_imported_src',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_status'); ?>
		<?php echo $form->textField($model,'contact_status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_login_pass'); ?>
		<?php echo $form->textField($model,'contact_login_pass',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->