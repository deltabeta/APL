<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
	UserModule::t("Profile")=>array('profile'),
	UserModule::t("Edit"),
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
//   // array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
//    array('label'=>UserModule::t('My Dashbord'), 'url' => array('/'.$varuser.'/dashbord/'.Yii::app()->user->id)), 
    array('label'=>UserModule::t('Edit Login Information'), 'url'=>array('edit')),
   array('label'=>UserModule::t('Edit Personal Information '), 'url'=>array('/'.$varuser.'/update/'.Yii::app()->user->id)),
     array('label'=>UserModule::t('Change password'), 'url'=>array('changepassword')),
    //array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
    
    
);
?><h1><?php echo UserModule::t('Edit My profile'); ?></h1>

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>
<div class="form">
<?php // $form=$this->beginWidget('CActiveForm', array(
//	'id'=>'profile-form',
//	'enableAjaxValidation'=>true,
//	'htmlOptions' => array('enctype'=>'multipart/form-data'),
//)); ?>

    
     <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'profile-form',
        'htmlOptions' => array('class' => 'col-sm-4', 'class' => 'well'),
        'type' => 'horizontal',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'enableAjaxValidation' => True,
    ));
    ?> 
    
    
    
	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

	<?php  echo $form->errorSummary(array($model)); ?>


	<div class="row">
		<?php // echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textFieldGroup($model,'username',array('size'=>20,'maxlength'=>20,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',)
                        ));?>
		<?php   echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textFieldGroup($model,'email',array('size'=>60,'maxlength'=>128,
                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',)
                        ));?>
		<?php echo $form->error($model,'email'); ?>
	</div>
<div class="row">
	<div class="buttons pull-right" >
		<?php $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit',
                    'size' => 'large',
                    'context' => 'success', 
                    'label' =>  (UserModule::t('Save')),
//                );
                        
                      )) ;?>
            
          
	</div>  
	</div>
<!--        <div class="row buttons pull-right">-->
                <?php
//                $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Register')
//                );
//                ?>

                <?php // echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');     ?>

            <!--</div>-->  
        

<?php $this->endWidget(); ?>

</div><!-- form -->
