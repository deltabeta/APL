<?php
/* @var $this ContactController */
/* @var $model Contact */
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
            <?php // echo $form->labelEx($model,'contact_email'); ?>
            <?php // echo $form->labelEx($model,'contact_email'); ?>
            <?php
            echo $form->textFieldGroup($model, 'contact_email', array('size' => 60, 'maxlength' => 255,
                'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
            ));
            ?>
            <?php echo $form->error($model, 'contact_email'); ?>
        </div>



        <div class="row"> 
        <?php echo $form->labelEx($model, 'profile_remarks');  ?>
         <?php $form->widget(
    'booster.widgets.TbCKEditor',
    array(
        'name' => 'profile_remarks',
        'editorOptions' => array(
            // From basic `build-config.js` minus 'undo', 'clipboard' and 'about'
            'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
          
            )
    )
);
    ?> 
        
        
        
                            <?php //echo $form-> textAreaGroup($model, 'profile_remarks', array(
//                                                    'wrapperHtmlOptions' => array(
//                                                            'class' => 'col-sm-5',
//                                                    ),
//                                                    'widgetOptions' => array(
//                                                            'htmlOptions' => array('rows' => 5),
//                                                    )
//                                            )); ?>
        <?php echo $form->error($model, 'profile_remarks'); ?>
    </div>