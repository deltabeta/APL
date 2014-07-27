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



<h1>Search For Journalists </h1>
<div class="form">
<?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'search-form',
        'htmlOptions' => array('class' => 'col-sm-5', 'class' => 'well'),
        'type' => 'horizontal',
        'enableClientValidation' => false,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>


<div class="row">
                            <?php
                         echo $form->dropDownListGroup(
			$categories,
			'cat_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
	   			'widgetOptions' => array(
	   				'data' => CHtml::listData(BusinessCategory::model()->findAll(), 'cat_id', 'cat_title'
                                ),
					'htmlOptions' => array('multiple' => false),
				)));
                                           
                            ?>
                 </div>
    
    
    
    <div class="row">
                            <?php
                         echo $form->dropDownListGroup(
			$isolanguages,
			'lang_iso',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
	   			'widgetOptions' => array(
	   				'data' => CHtml::listData(IsoLanguage::model()->findAll(), 'lang_iso', 'language'
                                ),
					'htmlOptions' => array('multiple' => false),
				)));
                                           
                            ?>
                 </div>
 <div class="buttons pull-right">
<?php $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Search')
                ); ?>
    </div>
    <div class="row"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<h1>Create ListContact</h1>

<div class="form">

<?php  $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'id-list-contact',
        'htmlOptions' => array('class' => 'col-sm-5', 'class' => 'well'),
        'type' => 'horizontal',
        'enableClientValidation' => false,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
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
            <table>
                <tr>
                    <td>
		<?php 
                    $i=1;
                    foreach($contact as  $value){
                        echo '<div><input name="contact_id[]" value="'.$value->contact_id.'" type="checkbox" style="float:left; margin-right:10px;" /><label>'.$value->contact_name_first.'</lable></div>';
                    
                    if($i==5){
                        echo '</td><td>';
                        $i=0;
                        
                    }
                    $i++;
                    }
                ?>
                    </td>
                </tr>
            </table>
	</div>
        
	<div class="row buttons pull-right">
		<?php $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Create')
                ); ?>
	</div>
<div class="row"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->