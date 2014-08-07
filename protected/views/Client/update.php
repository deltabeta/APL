<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
</div> 

<div class="last push-23"><br><br>
    <div id="col-xs-12 col-md-6">

        <?php
        $this->widget('booster.widgets.TbTabs', array(
            'type' => 'tabs',
            'placement' => 'right',
            'tabs' => array(
                array('label' => ('Edit Login Information'), 'url' => array('/user/profile/edit')),
                array('label' => ('Edit Personal Information '), 'url' => array('/client/update/' . Yii::app()->user->id)),
                array('label' => ('Change password'), 'url' => array('/user/profile/changepassword')),),
            'htmlOptions' => array('class' => 'operations'),
        ));
        ?>
    </div><!-- sidebar -->
</div>



<?php
//$this->menu = 
//  ((UserModule::isAdmin()) ? array('label' => UserModule::t('Manage Users'), 'url' => array('/user/admin')) : array()),
// array('label' => UserModule::t('List User'), 'url' => array('/user')),
//    
//    array('label'=>UserModule::t('My Dashbord'), 'url' => array('/'.$varuser.'/dashbord/')), 
//    array('label'=>UserModule::t('Edit Login Information'), 'url'=>array('edit')),
//    array('label'=>UserModule::t('Edit Personal Information '), 'url'=>array('/'.$varuser.'/update/'.Yii::app()->user->id)),
//    
//    array('label' => UserModule::t('Change password'), 'url' => array('changepassword')),
// array('label' => UserModule::t('Logout'), 'url' => array('/user/logout')),
//);
?>


<div class="form  span-20">
    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'contact-form',
        'htmlOptions' => array('class' => 'col-sm-4', 'class' => 'well'),
        'type' => 'horizontal',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => false,
        ),
         'enableAjaxValidation' => True,
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
    ));
    ?>

    <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

    <?php echo $form->errorSummary($model); ?>

    <!--
        <div class="row">
    <?php //echo $form->labelEx($model,'user_package_id'); ?>
    <?php //echo $form->textFieldGroup($model, 'user_package_id');  ?>
    <?php //echo $form->error($model, 'user_package_id');  ?>
        </div>
        <div class="row">
    <?php //echo $form->labelEx($model,'user_email'); ?>
    <?php
//        echo $form->textFieldGroup($model, 'user_email', array('size' => 60, 'maxlength' => 255,
//            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
//        ));
//        
    ?>
    <?php //echo $form->error($model, 'user_email'); ?>
        </div>
     <span class="label label-info"    
                                    >Minimum is 6 characters <br>Must contain at least one special character</span>
        <div class="row">
    <?php //echo $form->labelEx($model,'user_pass');  ?>
    <?php
//        echo $form->passwordFieldGroup($model, 'user_pass', array('size' => 60, 'maxlength' => 255,
//            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
//        ));
//        
    ?>
    <?php // echo $form->error($model, 'user_pass'); ?>
        </div>
        <div class="row">   
    <?php //echo $form->labelEx($model, 'repeat_password');  ?> 
    <?php
//        echo $form->passwordFieldGroup($model, 'user_pass_repeat', array('size' => 60, 'maxlength' => 255,
//            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
//        ));
//        
    ?>
    <?php // echo $form->error($model, 'user_pass_repeat'); ?>  </div>
    
        <div class="row">
    <?php //echo $form->labelEx($model, 'porfile_initials');  ?>
    <?php
//        echo $form->textFieldGroup($model, 'porfile_initials', array('size' => 60, 'maxlength' => 255,
//            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
//        ));
    ?>
    <?php // echo $form->error($model, 'porfile_initials'); ?>
        </div>-->

    <div id="monaccordeon">
        <div class="accordion-group">
            <div class="btn btn-primary accordion-heading" data-toggle="collapse" data-parent="#monaccordeon" data-target="#item1">Personal Information</div>
            <div id="item1" class="collapse accordion-group in ">
                <div class="accordion-inner">
                        <fieldset>
                    <div class="row">
                        <?php //echo $form->labelEx($model, 'porfile_name_first');  ?>
                        <?php
                        echo $form->textFieldGroup($model, 'porfile_name_first', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
                        <?php // echo $form->error($model, 'porfile_name_first'); ?>
                    </div>

                    <div class="row">
                        <?php //echo $form->labelEx($model, 'porfile_name_last');  ?>
                        <?php
                        echo $form->textFieldGroup($model, 'porfile_name_last', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
                        <?php //echo $form->error($model, 'porfile_name_last'); ?>
                    </div>
                                </fieldset>
                </div>
            </div>     
        </div>
    </div>
    <br>


    <div id="monaccordeon">
        <div class="accordion-group">
            <div class="btn btn-primary accordion-heading" data-toggle="collapse" data-parent="#monaccordeon" data-target="#item2">Address </div>
            <div id="item2" class="collapse accordion-group ">
                <div class="accordion-inner">
    <fieldset>
                    <div class="row">
                        <?php //echo $form->labelEx($model, 'porfile_address');  ?>
                        <?php
                        echo $form->textFieldGroup($model, 'porfile_address', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
                        <?php echo $form->error($model, 'porfile_address'); ?>
                    </div>

                    <div class="row">
                        <?php //echo $form->labelEx($model, 'porfile_address_nr');   ?>
                        <?php
                        echo $form->textFieldGroup($model, 'porfile_address_nr', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
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
                        <div class="col-sm-3 control-label" >
                            <?php echo $form->labelEx($model, 'porfile_country'); ?></div>


                        <?php
                        $this->widget('booster.widgets.TbSelect2', array(
                            'asDropDownList' => true,
                            'model' => $model,
                            'attribute' => 'porfile_country',
                            'options' => array(
                                'placeholder' => $model->getAttributeLabel('porfile_country'),
                                'width' => '39.6%',
                                'class' => 'col-sm-5',
                                'allowClear' => true,
                            ),
                            'data' => CHtml::listData(IsoCountry::model()->findAll(), 'country_iso', 'country_name'
                            ),
                        ));
                        ?><br><br>
                        <?php // echo $form->dropDownList($model, 'contact_iso_country', CHtml::listData(isocountry::model()->findAll(), 'country_iso', 'country_name')); ?>
                        <?php // echo $form->textField($model,'departmentId'); ?>
                        <?php // echo $form->textField($model,'contact_iso_country'); ?>
                        <?php echo $form->error($model, 'porfile_camp_country'); ?>

                    </div>
            </fieldset>
                </div>
            </div>
        </div>     
    </div>
    <br>


    <div id="monaccordeon">
        <div class="accordion-group">
            <div class="btn btn-primary accordion-heading" data-toggle="collapse" data-parent="#monaccordeon" data-target="#item3">Othres </div>
            <div id="item3" class="collapse accordion-group">
                <div class="accordion-inner">

    <fieldset>





                    <div class="row">
                        <?php //echo $form->labelEx($model, 'porfile_phone');   ?>
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
                        <div class="col-sm-3 control-label" >
                            <?php echo $form->labelEx($model, 'porfile_camp_country'); ?></div>


                        <?php
                        $this->widget('booster.widgets.TbSelect2', array(
                            'asDropDownList' => true,
                            'model' => $model,
                            'attribute' => 'porfile_camp_country',
                            'options' => array(
                                'placeholder' => $model->getAttributeLabel('porfile_camp_country'),
                                'width' => '39.6%',
                                'class' => 'col-sm-5',
                                'allowClear' => true,
                            ),
                            'data' => CHtml::listData(IsoCountry::model()->findAll(), 'country_iso', 'country_name'
                            ),
                        ));
                        ?><br><br>
                        <?php // echo $form->dropDownList($model, 'contact_iso_country', CHtml::listData(isocountry::model()->findAll(), 'country_iso', 'country_name')); ?>
                        <?php // echo $form->textField($model,'departmentId'); ?>
                        <?php // echo $form->textField($model,'contact_iso_country'); ?>
                        <?php echo $form->error($model, 'porfile_camp_country'); ?>
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
                        <?php //echo $form->labelEx($model, 'porfile_camp_email');  ?>
                        <?php
                        echo $form->textFieldGroup($model, 'porfile_camp_email', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
                        <?php echo $form->error($model, 'porfile_camp_email'); ?>
                    </div>

                    <div class="row">
                        <?php //echo $form->labelEx($model, 'porfile_camp_website');  ?>
                        <?php
                        echo $form->textFieldGroup($model, 'porfile_camp_website', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
                        <?php echo $form->error($model, 'porfile_camp_website'); ?>
                    </div>

                    <div class="row">
                        <?php //echo $form->labelEx($model, 'porfile_coc');   ?>
                        <?php
                        echo $form->textFieldGroup($model, 'porfile_coc', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
                        <?php echo $form->error($model, 'porfile_coc'); ?>
                    </div>



                    <div class="row"> 
                        <?php echo $form->labelEx($model, 'profile_remarks'); ?>
                        <?php
                        $form->widget(
                                'booster.widgets.TbCKEditor', array(
                            'name' => 'profile_remarks',
                            'editorOptions' => array(
                                // From basic `build-config.js` minus 'undo', 'clipboard' and 'about'
                                'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
                            )
                                )
                        );
                        ?> 



                        <?php
                        //echo $form-> textAreaGroup($model, 'profile_remarks', array(
//                                                    'wrapperHtmlOptions' => array(
//                                                            'class' => 'col-sm-5',
//                                                    ),
//                                                    'widgetOptions' => array(
//                                                            'htmlOptions' => array('rows' => 5),
//                                                    )
//                                            )); 
                        ?>
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
    </fieldset>

                      
               </div>
            </div>

        </div>
    </div>
<br>
   <div class="row">
	<div class="buttons pull-right" >
                        <?php
                        $this->widget('booster.widgets.TbButton',
                                array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Update')
                        );
                        ?>

                    </div> </div> </div>

    <?php $this->endWidget(); ?>
    <!-- form -->