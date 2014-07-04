<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>
    
<div class="form">
 
<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'contact-form',
     'htmlOptions' => array('class' => 'well'),
   
    'type' => 'horizontal',
    'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
		
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<table>
    <tr>
      
    
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php // echo $form->labelEx($model,'contact_email'); ?>
		<?php echo $form->textFieldGroup($model,'contact_email',array('size'=>60,'maxlength'=>255 ,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_email'); ?>
	</div>

        <div class="row">
		<?php //echo $form->labelEx($model,'contact_login_pass'); ?>
		<?php echo $form->passwordFieldGroup($model,'contact_login_pass',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_login_pass'); ?>
	</div>
        
        
        
        
	<div class="row">
		<?php //echo $form->labelEx($model,'contact_name_ini'); ?>
		<?php echo $form->passwordFieldGroup($model,'contact_name_ini',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                    )); ?>
		<?php echo $form->error($model,'contact_name_ini'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_name_first'); ?>
		<?php echo $form->textFieldGroup($model,'contact_name_first',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',)
                )); ?>
		<?php echo $form->error($model,'contact_name_first'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_name_last'); ?>
		<?php echo $form->textFieldGroup($model,'contact_name_last',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_name_last'); ?>
	</div>

	<div class="row">
                <?php //echo $form->labelEx($model,'contact_gender'); ?>
                <?php echo $form->dropDownListGroup(
			$model,
			'contact_gender',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-2',
				),
				'widgetOptions' => array(
					'data' => array('M','F','U'),
					'htmlOptions' => array(),
				)
			)
		);?>
		<?php // echo $form->textField($model,'contact_gender',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'contact_gender'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_adress'); ?>
		<?php echo $form->textFieldGroup($model,'contact_adress',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_adress'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_address_nr'); ?>
		<?php echo $form->textFieldGroup($model,'contact_address_nr'); ?>
		<?php echo $form->error($model,'contact_address_nr'); ?>
	</div>

	<div class="row">
		<?php ///echo $form->labelEx($model,'contact_address_addon'); ?>
		<?php echo $form->textFieldGroup($model,'contact_address_addon',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_address_addon'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_iso_country'); ?>
            
		 <?php echo $form->dropDownList($model,'contact_iso_country',CHtml::listData(isocountry::model()->findAll(), 'country_iso', 'country_name')); ?>
		<?php // echo $form->textField($model,'departmentId'); ?>
		<?php // echo $form->textField($model,'contact_iso_country'); ?>
		<?php echo $form->error($model,'contact_iso_country'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_city'); ?>
		<?php echo $form->textFieldGroup($model,'contact_city',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_city'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_phone'); ?>
		<?php echo $form->textFieldGroup($model,'contact_phone',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_phone'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_website'); ?>
		<?php echo $form->textFieldGroup($model,'contact_website',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_website'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_tw'); ?>
		<?php echo $form->textFieldGroup($model,'contact_tw',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_tw'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_fb'); ?>
		<?php echo $form->textFieldGroup($model,'contact_fb',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_fb'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_go'); ?>
		<?php echo $form->textFieldGroup($model,'contact_go',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_go'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_yt'); ?>
		<?php echo $form->textFieldGroup($model,'contact_yt',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_yt'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_li'); ?>
		<?php echo $form->textFieldGroup($model,'contact_li',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_li'); ?>
	</div>

	
             
            <?php echo $form->ckEditorGroup(
			$model,
			'contact_bio',
			array(
				'widgetOptions' => array(
					'editorOptions' =>array(
                                               // 'fullpage' => 'js:true',
						'class' => 'span10', 
						'rows' => 5, 
						'options' => array('plugins' => array('clips', 'fontfamily'), 'lang' => 'ang')
					)
				)
			)
		); ?>
            
            
	

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_is_imported'); ?>
		<?php echo $form->textFieldGroup($model,'contact_is_imported',array('size'=>1,'maxlength'=>1,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_is_imported'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_imported_src'); ?>
		<?php echo $form->textFieldGroup($model,'contact_imported_src',array('size'=>60,'maxlength'=>255,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_imported_src'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contact_status'); ?>
		<?php echo $form->textFieldGroup($model,'contact_status',array('size'=>1,'maxlength'=>1,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'contact_status'); ?>
	</div>

	

	<div class="row buttons">
	</div>
        
        <div class="row buttons">
		<?php $this->widget(    'booster.widgets.TbButton',
                        array('buttonType' => 'submit', 'label' => 'Save')
                        
                ); ?>
            
		<?php // echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->
