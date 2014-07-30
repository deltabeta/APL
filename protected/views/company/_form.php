<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'company-form',
        'htmlOptions' => array('class' => 'col-sm-5', 'class' => 'well','enctype'=>'multipart/form-data'),
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
		<?php echo $form->textFieldGroup($model,'comp_group'); ?>
		<?php echo $form->error($model,'comp_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldGroup($model,'comp_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_name'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_address'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_address_nr'); ?>
		<?php echo $form->error($model,'comp_address_nr'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_address_nr_addon',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_address_nr_addon'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_postal_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_postal_code'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_city'); ?>
	</div>

	<div class="row">
                         
                           
 <div class="col-sm-3 control-label" >
                            <?php echo $form->labelEx($model, 'countryIso'); ?></div>

                            <?php
                            $this->widget('booster.widgets.TbSelect2', array(
                                'asDropDownList' => true,
                                'model' => $model,
                                'attribute' => 'country_iso',
                                'options' => array(
                                    'placeholder' => $model->getAttributeLabel('country_iso'),
                                    'width' => '48.5%',
                                    'class' => 'col-sm-3',
                                    'allowClear' => true,
                                ),
                                'data' => CHtml::listData(IsoCountry::model()->findAll(), 'country_iso', 'country_name'
                                ),
                            ));
                            ?>
        
        </div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_pub_region'); ?>
		<?php echo $form->error($model,'comp_pub_region'); ?>
	</div>

	<div class="row">
                         
                           
 <div class="col-sm-3 control-label" >
                            <?php echo $form->labelEx($model, 'comp_pub_country_iso'); ?></div>

                            <?php
                            $this->widget('booster.widgets.TbSelect2', array(
                                'asDropDownList' => true,
                                'model' => $model,
                                'attribute' => 'comp_pub_country_iso',
                                'options' => array(
                                    'placeholder' => $model->getAttributeLabel('comp_pub_country_iso'),
                                    'width' => '48.5%',
                                    'class' => 'col-sm-3',
                                    'allowClear' => true,
                                ),
                                'data' => CHtml::listData(IsoCountry::model()->findAll(), 'country_iso', 'country_name'
                                ),
                            ));
                            ?>
        
        </div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_pub_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_pub_city'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_phone'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_fax',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_fax'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_email'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_website',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comp_website'); ?>
	</div>

	<div class="row">

		<?php echo $form->textFieldGroup($model,'comp_main_contact'); ?>
		<?php echo $form->error($model,'comp_main_contact'); ?>
	</div>

	 <div class="buttons pull-right">
<?php $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'create')
                ); ?>
    </div>
    <div class="row"></div>

<?php $this->endWidget(); ?>

</div><!-- form -->