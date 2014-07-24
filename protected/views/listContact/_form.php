<?php
/* @var $this ListContactController */
/* @var $model ListContact */
/* @var $form CActiveForm */
?>
<script>
    function read(){
        var selectElmt = document.getElementById('listexist');
        if(selectElmt.options[selectElmt.selectedIndex].value!=''){
          document.getElementById("ListContact_list_name").readOnly = true;  
        }
        else{
            document.getElementById("ListContact_list_name").readOnly = false;
        }

    }
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'list-contact-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 


?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'list_user'); ?>
		<?php echo $form->HiddenField($model,'list_user',array('value'=>Yii::app()->user->id)); ?>
		<?php echo $form->error($model,'list_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_name'); ?>
		<?php echo $form->textField($model,'list_name',array('size'=>20,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'list_name'); ?>
	</div>
        <div class="row">
            <label>Choose a list</label>
            
		<?php echo CHtml::dropDownList('listexist', '0', 
              CHtml::listData(ListContact::model()->findAll(), 'list_id', 'list_name'
                            ),array('empty' => '(Select a list)','onchange'=>'read()')); ?>
	</div>
        
         <?php if( !$model->list_id){ ?>
        <div class="row">
		<?php echo $form->HiddenField($model,'list_added',array('value'=>time())); ?>
		<?php echo $form->error($model,'list_added'); ?>
	</div>
        <?php } ?>
        <?php if( $model->list_id){ ?>
        <div class="row">
		<?php echo $form->HiddenField($model,'list_modified',array('value'=>time())); ?>
		<?php echo $form->error($model,'list_modified'); ?>
	</div>
        <?php } ?>
        <div class="row">
		<?php 
                
                
                    foreach($contact as  $value){
                        echo '<div><input name="contact_id[]" value="'.$value->contact_id.'" type="checkbox" style="float:left; margin-right:10px;" /><label>'.$value->contact_name_first.'</lable></div>';
                    }
                
                ?>

	</div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->