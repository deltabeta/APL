<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>
<hr>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>


<div class="row">
    <div class="span-12" >
<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'contact-form',
    'htmlOptions' => array('class' => 'well'),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <h3>Personal Information</h3>    
	<div class="row">
            <div class="form-group">
		<?php echo $form->textFieldGroup($model,'name',array('size'=>60,'maxlength'=>255 ,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		
		<?php echo $form->error($model,'name'); ?>
            </div>
	</div>
        
        <div class="row">
                
            <?php echo $form->textFieldGroup($model,'phone',array('size'=>60,'maxlength'=>255 ,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
	
        <div class="row">
		<?php echo $form->textFieldGroup($model,'email',array('size'=>60,'maxlength'=>255 ,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldGroup($model,'subject',array('size'=>60,'maxlength'=>255 ,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->textareaGroup($model,'body',array('cols'=>40,'rows'=>80,
                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                )); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Type the letters you see in the image in the field below it</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
    

    
    </div>
   
    
    
    <div class="span-12" >
        
        <h3>Africa Business Communities has offices in:</h3>
        <table>
            
            <tr><td>Haarlem - The Netherlands</td><td> 	Accra - Ghana</td></tr>
            <tr> <td>
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18692.26069150036!2d4.647818!3d52.391944!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ef6c60e1e9fb%3A0x8ae15680b8a17e39!2sHaarlem!5e1!3m2!1sfr!2s!4v1404816921727" width="200" height="200" frameborder="0" style="border:0"></iframe>
                    
                </td><td>
                    
                   <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/map-accra.jpg', ''); ?>
                    
                </td></tr>
            <tr><td>
                    
                    Bas Vlugt, Publisher/Editor in chief<br><br>

Tetterodestraat 11<br>
2023 GK<br>
Haarlem - The Netherlands
                    
                </td><td>
                    
                    
                    Linda Larbie, Editor<br>
Isaac Twumasi-Quantas, Editor<br>

Rima Building - 2nd Floor<br>
29 Mango Tree Avenue<br>
Asylum Down, Accra GHANA
                    
                </td></tr>
        </table>
        <hr>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td width="20%"><b>Questions:</b></td>
<td width="80%">apl@africabusinesscommunities.nl</td>
</tr>
<tr>
<td><b>Bank:</b></td>
<td>ING at Haarlem </td>
</tr>
<tr>
<td><b>Account Nr:</b></td>
<td>P4668371</td>
</tr>
<tr>
<td><b>IBAN code:</b></td>
<td>INGBNL2A</td>
</tr>
<tr>
<td><b>BIC:</b></td>
<td>NL09INGB0004668371</td>
</tr>
<tr>
<td><b>CoC NR:</b></td>
<td>54078989</td>
</tr>
<tr>
<td><b>VAT NL NR:</b></td>
<td>NL851150044b01</td>
</tr>
</tbody></table>
    </div>
</div>

<?php endif; ?>