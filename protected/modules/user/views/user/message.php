<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login"); ?>

<h1><?php echo $title; ?></h1>

<div class="form"> <?php
            $form = $this->beginWidget(
                    'booster.widgets.TbActiveForm', array(
                //   'id' => 'verticalForm',
                'type' => 'horizontal',
                'htmlOptions' => array('class' => 'well'), // for inset effect
                'id' => 'login1-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>
    <div class="span-5"> 
<?php echo $content; ?>
         
         </div>
<?php $this->endWidget(); ?>
</div><!-- yiiForm -->