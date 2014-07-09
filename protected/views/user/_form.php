<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">
    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'contact-form',
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
        <?php //echo $form->labelEx($model,'user_package_id'); ?>
        <?php echo $form->textFieldGroup($model, 'user_package_id'); ?>
        <?php echo $form->error($model, 'user_package_id'); ?>
    </div>
    <div class="row">
        <?php //echo $form->labelEx($model,'user_email'); ?>
        <?php
        echo $form->textFieldGroup($model, 'user_email', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'user_email'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model,'user_pass'); ?>
        <?php
        echo $form->textFieldGroup($model, 'user_pass', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'user_pass'); ?>
    </div>
    <div class="row">   
        <?php //echo $form->labelEx($model, 'repeat_password'); ?> 
        <?php
        echo $form->textFieldGroup($model, 'user_pass_repeat', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'user_pass_repeat'); ?>  </div>
    <div class="row">
        <?php //echo $form->labelEx($model, 'user_credits'); ?>
        <?php echo $form->textFieldGroup($model, 'user_credits'); ?>
        <?php echo $form->error($model, 'user_credits'); ?>
    </div>

    	<div class="row">
    <?php //echo $form->labelEx($model, 'user_registered'); ?>
    <?php echo $form->textFieldGroup($model, 'user_registered'); ?>
    <?php echo $form->error($model, 'user_registered'); ?>
            </div>
    
            <div class="row">
    <?php //echo $form->labelEx($model, 'user_verified'); ?>
    <?php echo $form->textFieldGroup($model, 'user_verified'); ?>
    <?php echo $form->error($model, 'user_verified'); ?>
            </div>
    
            <div class="row">
    <?php //echo $form->labelEx($model, 'user_activity'); ?>
    <?php echo $form->textFieldGroup($model, 'user_activity'); ?>
    <?php echo $form->error($model, 'user_activity'); ?>
            </div>
    
            <div class="row">
    <?php //echo $form->labelEx($model, 'user_deactivated'); ?>
    <?php echo $form->textFieldGroup($model, 'user_deactivated'); ?>
    <?php echo $form->error($model, 'user_deactivated'); ?>
            </div>
    
            <div class="row">
    <?php //echo $form->labelEx($model, 'user_password_request'); ?>
    <?php echo $form->textFieldGroup($model, 'user_password_request'); ?>
    <?php echo $form->error($model, 'user_password_request'); ?>
            </div>



    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_initials'); ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_initials', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
<?php echo $form->error($model, 'porfile_initials'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_name_first'); ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_name_first', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
<?php echo $form->error($model, 'porfile_name_first'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_name_last'); ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_name_last', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'porfile_name_last'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_address'); ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_address', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'porfile_address'); ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model, 'porfile_address_nr');  ?>
        <?php echo $form->textFieldGroup($model, 'porfile_address_nr'); ?>
        <?php echo $form->error($model, 'porfile_address_nr'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_address_addon'); ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_address_addon', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'porfile_address_addon'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_city'); ?>
<?php
echo $form->textFieldGroup($model, 'porfile_city', array('size' => 60, 'maxlength' => 255,
    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
));
?>
        <?php echo $form->error($model, 'porfile_city'); ?>
    </div>

    <div class="row">

        <div class="col-sm-3 control-label">
<?php echo $form->labelEx($model, 'porfile_country');  ?></div>
<?php echo $form->dropDownList($model, 'porfile_country', CHtml::listData(isocountry::model()->findAll(), 'country_iso', 'country_name')); ?>
 <?php echo $form->error($model,'porfile_country'); ?>       
    </div>
    <?php // echo $form->textFieldGroup($model,'departmentId');   ?>
        <?php // echo $form->textFieldGroup($model,'contact_iso_country');   ?>
        <?php //echo $form->error($model, 'contact_iso_country'); ?>





        <?php //echo $form->dropDownList($model,'porfile_country', $model->countrys->getCountryOptions()); ?> 
        <?php //echo $form->error($model,'porfile_country'); ?>
    	

    <div class="row">
<?php //echo $form->labelEx($model, 'porfile_phone');  ?>
<?php
echo $form->textFieldGroup($model, 'porfile_phone', array('size' => 60, 'maxlength' => 255,
    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
));
?>
        <?php echo $form->error($model, 'porfile_phone'); ?>
    </div>

    <div class="row">
<?php // echo $form->labelEx($model, 'porfile_mobile');  ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_mobile', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'porfile_mobile'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_camp_name');  ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_camp_name', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'porfile_camp_name'); ?>
    </div>

    <div class="row">   
<?php
echo $form->textFieldGroup($model, 'porfile_camp_function', array('size' => 60, 'maxlength' => 255,
    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
));
?>
        <?php echo $form->error($model, 'porfile_camp_function'); ?>
    </div>
    <div class="row">
        <div class="col-sm-3 control-label">
        <?php echo $form->labelEx($model, 'porfile_camp_country');  ?>     </div> 
    <?php echo $form->dropDownList($model, 'porfile_camp_country', CHtml::listData(isocountry::model()->findAll(), 'country_iso', 'country_name')); ?>
        <?php echo $form->error($model,'porfile_camp_country'); ?>

    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_camp_account'); ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_camp_account', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
<?php echo $form->error($model, 'porfile_camp_account'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'porfile_camp_email'); ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_camp_email', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'porfile_camp_email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'porfile_camp_website'); ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_camp_website', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'porfile_camp_website'); ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model, 'porfile_coc');  ?>
        <?php
        echo $form->textFieldGroup($model, 'porfile_coc', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'porfile_coc'); ?>
    </div>

    <div class="row">
        <div class="col-sm-3 control-label">
        <?php echo $form->labelEx($model, 'profile_remarks');  ?></div>
        <?php echo $form->textArea($model, 'profile_remarks', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'profile_remarks'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'usetting_sender_name'); ?>
<?php
echo $form->textFieldGroup($model, 'usetting_sender_name', array('size' => 60, 'maxlength' => 255,
    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
));
?>
        <?php echo $form->error($model, 'usetting_sender_name'); ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model, 'usetting_sender_email');  ?>
<?php
echo $form->textFieldGroup($model, 'usetting_sender_email', array('size' => 60, 'maxlength' => 255,
    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
));
?>
        <?php echo $form->error($model, 'usetting_sender_email'); ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model, 'usetting_replyto_name');  ?>
        <?php
        echo $form->textFieldGroup($model, 'usetting_replyto_name', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
        <?php echo $form->error($model, 'usetting_replyto_name'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'usetting_replyto_email');  ?>
        <?php
        echo $form->textFieldGroup($model, 'usetting_replyto_email', array('size' => 60, 'maxlength' => 255,
            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
        ));
        ?>
<?php echo $form->error($model, 'usetting_replyto_email'); ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model, 'usetting_bounce_email');  ?>
<?php
echo $form->textFieldGroup($model, 'usetting_bounce_email', array('size' => 60, 'maxlength' => 255,
    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
));
?>
<?php echo $form->error($model, 'usetting_bounce_email'); ?>
    </div>
    
    
    <div class="row buttons" >
        <?php $this->widget(    'booster.widgets.TbButton',
                        array('buttonType' => 'submit', 'label' => 'Save')
                        
                ); ?>
            
		  

<?php $this->endWidget(); ?>
</div><!-- form -->