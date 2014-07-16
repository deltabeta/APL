<?php
/* @var $this MailingController */
/* @var $model Mailing */
/* @var $form CActiveForm */
?>

<div class="form">

 <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'mailing-form',
        'htmlOptions' => array('class' => 'well'),
        'type' => 'horizontal',
        'enableClientValidation' => true,
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
		<?php
            echo $form->textFieldGroup($model, 'subject', array('size' => 60, 'maxlength' => 255,
                'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
            ));
            ?>
            <?php echo $form->error($model, 'contact_email'); ?>
	</div>

	<div class="row">
		<?php
echo $form->ckEditorGroup(
        $model, 'body', array(
    'widgetOptions' => array(
        'editorOptions' => array(
            // 'fullpage' => 'js:true',
            'class' => 'span10',
            'rows' => 5,
            'options' => array('plugins' => array('clips', 'fontfamily'), 'lang' => 'ang')
        )
    )
        )
);
?>
	</div>

	<div class="row">
        
		<?php 
                $this->widget(
    'booster.widgets.TbDatePicker',
    array(
        
        'name' => 'startdate',
        'htmlOptions' => array('class'=>'col-md-4'),
    )
);
                ?>
            
            
	</div>

	<div class="row">
           
		<?php $this->widget(
    'booster.widgets.TbDatePicker',
    array(
        
        'name' => 'enddate',
        'htmlOptions' => array('class'=>'col-md-4'),
    )
); ?>
	</div>
        
        
        <div class="row">
           
		<?php $this->widget(
    'booster.widgets.TbDatePicker',
    array(
        
        'name' => 'enddate',
        'htmlOptions' => array('class'=>'col-md-4'),
    )
); ?>
	</div>
        
        
        <?php
        
        
        $userFormConfig = array(
          'elements'=>array(
            'firstname'=>array(
                'type'=>'text',
                'maxlength'=>40,
            ),
            'lastname'=>array(
                'type'=>'text',
                'maxlength'=>40,
            ),
            'usersince'=>array(
                'type'=>'dropdownlist',
                //it is important to add an empty item because of new records
                'items'=>array(''=>'-',2009=>2009,2010=>2010,2011=>2011,),
            ),
        ));
 
    $this->widget('ext.multimodelform.MultiModelForm',array(
            'id' => 'user_id', //the unique widget id
            'formConfig' => $userFormConfig, //the form configuration array
            'model' => $user, //instance of the form model
 
            //array of user instances loaded from db
            'data' => $user->findAll('groupid=:groupId', array(':groupId'=>$model->id)),
        ));
        
        
        ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->