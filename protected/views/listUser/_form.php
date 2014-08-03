<?php
/* @var $this ListUserController */
/* @var $model ListUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'list-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

//print_r($contacts);

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'list_user'); ?>
		<?php echo $form->hiddenField($model,'list_user',array('value'=>$user)); ?>
		<?php echo $form->error($model,'list_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_name'); ?>
		<?php echo $form->textField($model,'list_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'list_name'); ?>
	</div>
        
        
        <div class="row">
		<?php // echo $form->labelEx($contacts,'Contacts'); ?>
		<?php //echo $form->checkBox($contacts,'contact'); ?>
		<?php //echo $form->error($contacts,'contact');
                
                foreach($contacts as $key => $value){
                    echo '<label>'.$value.'</label><input name="contacts[]" value="'.$key.'" type="checkbox"  />';
                }
                
                ?>
	</div>

        
        
        
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'list_notes'); ?>
		<?php echo $form->textArea($model,'list_notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'list_notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->