<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change password"),
);
$contact= Contact::model()->findByPk(Yii::app()->user->id);
 if ($contact!=null)
     $varuser='contact';
 else
     $varuser='client';

$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
////   // array('label'=>UserModule::t('List User'), 'url'=>array('/user')),  
//    array('label'=>UserModule::t('My Dashbord'), 'url' => array('/'.$varuser.'/dashbord/')), 
    array('label'=>UserModule::t('Edit Login Information'), 'url'=>array('edit')),
    
  array('label'=>UserModule::t('Edit Personal Information '), 'url'=>array('/'.$varuser.'/update/'.Yii::app()->user->id)),
    
   array('label'=>UserModule::t('Change password'), 'url'=>array('changepassword')),
     
   // array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);
?>

<h1><?php echo UserModule::t("Change password"); ?></h1>

<div class="form">
    
     <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'changepassword-form',
        'htmlOptions' => array('class' => 'col-sm-5', 'class' => 'well'),
        'type' => 'horizontal',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'enableAjaxValidation' => True,
    ));
    ?> 


	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
	<?php // echo $form->labelEx($model,'oldPassword'); ?>
	<?php echo $form->passwordFieldGroup($model,'oldPassword' ,array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
	<?php echo $form->error($model,'oldPassword'); ?>
	</div>
	
	<div class="row">
	<?php //echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordFieldGroup($model,'password' ,array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
	<?php echo $form->error($model,'password'); ?>
	<p class="hint">
	<?php // echo UserModule::t("Minimal password length  symbols."); ?>
	</p>
	</div>
	
	<div class="row">
	<?php //echo $form->labelEx($model,'verifyPassword'); ?>
	<?php echo $form->passwordFieldGroup($model,'verifyPassword', array('size' => 60, 'maxlength' => 255,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                        ));
                        ?>
	<?php echo $form->error($model,'verifyPassword'); ?>
	</div>
	
	
<!--	<div class="row submit">
	<?php // echo CHtml::submitButton(UserModule::t("Save")); ?>
	</div>-->
<div class="row">
	<div class="buttons pull-right" >
		<?php $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit',
                    'size' => 'large',
                    'context' => 'success', 
                    'label' =>  (UserModule::t('Change')),
//                );
                        
                      )) ;?>
            
          
	</div></div>
        
<?php $this->endWidget(); ?>
</div><!-- form -->