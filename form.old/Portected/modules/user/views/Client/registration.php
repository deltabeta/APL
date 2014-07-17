<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Registration");
$this->breadcrumbs = array(
    UserModule::t("Registration"),
);
?>

<h1><?php echo UserModule::t("Registration"); ?></h1>

    <?php if (Yii::app()->user->hasFlash('registration')): ?>
    <div class="success">
    <?php echo Yii::app()->user->getFlash('registration'); ?>
    </div>
<?php else: ?>
<span class=span-10">
        <?php
        $this->widget(
                'booster.widgets.TbPanel', array(
            'title' => 'Add Yourself As A Clint',
            'context' => 'primary',
            'headerIcon' => 'user',
            'content' => 'You, being a Client, '
           )
        )
                ?>  </span>
    <div class="form col-sm-10">
        <?php
        $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'registration-form',
            'enableAjaxValidation' => true,
             'type' => 'horizontal',
          //  'disableAjaxValidationAttributes' => array('RegistrationForm_verifyCode'),
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
           'htmlOptions' => array('class' => 'col-sm-6', 'class' => 'well'),
        ));
        ?>

        <p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

            <?php // echo $form->errorSummary(array($model, $contact)); ?>
<div id="monaccordeon">
        <div class="accordion-group">
            <div class="btn btn-primary accordion-heading" data-toggle="collapse" data-parent="#monaccordeon" data-target="#item0">Personal Information</div>
            <div id="item0" class="collapse accordion-group in">
                <div class="accordion-inner">



        <div class="row">
    <?php // echo $form->labelEx($model, 'username'); ?>
    <?php echo $form->textFieldGroup($model, 'username', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                        ));
                        ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="row">
                <?php //echo $form->labelEx($model, 'password'); ?>
                <?php echo $form->passwordFieldgROUP($model, 'password', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                        ));
                        ?>
    <?php echo $form->error($model, 'password'); ?>
            <p class="hint">
    <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
            </p>
        </div>

        <div class="row">
    <?php //echo $form->labelEx($model, 'verifyPassword'); ?>
    <?php echo $form->passwordFieldGroup($model, 'verifyPassword', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                        ));
                        ?>
            <?php echo $form->error($model, 'verifyPassword'); ?>
        </div>

        <div class="row">
    <?php //echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textFieldGroup($model, 'email', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                        ));
                        ?>
        <?php echo $form->error($model, 'email'); ?>
                  </div>
                </div>
            </div>     
        </div>
    
    <br>

        <?php
//        $profileFields = Profile::getFields();
//        if ($profileFields) {
//            foreach ($profileFields as $field) {
//                ?>
                <!--<div class="row">-->
                    <?php // echo $form->labelEx($profile, $field->varname); ?>
                    <?php //
//                    if ($widgetEdit = $field->widgetEdit($profile)) {
//                        echo $widgetEdit;
//                    } elseif ($field->range) {
//                        echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
//                    } elseif ($field->field_type == "TEXT") {
//                        echo$form->textArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
//                    } else {
//                        echo $form->textField($profile, $field->varname, array('size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)));
//                    }
                    ?>
                <?php // echo $form->error($profile, $field->varname); ?>
                <!--</div>-->	
                <?php
//            }
//        }
        ?>
                <fieldset>
<?php $this->renderPartial('/../../../views/client/_form', array('model' => $client, 'form' => $form));?>
<!--//('/../../../views/contact/_form'-->
                <fieldset>
                
                
            <?php if (UserModule::doCaptcha('registration')): ?>
            <div class="row">
                <?php echo $form->labelEx($model, 'verifyCode'); ?>

        <?php $this->widget('CCaptcha'); ?>
        <?php echo $form->textField($model, 'verifyCode'); ?>
        <?php echo $form->error($model, 'verifyCode'); ?>

                <p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
                    <br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>
            </div>
            <?php endif; ?>

        <div class="row submit">
        <?php echo CHtml::submitButton(UserModule::t("Register")); ?>
        </div>

    <?php $this->endWidget(); ?>
    </div><!-- form -->
<?php endif; ?>