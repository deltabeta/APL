<?php
/* @var $this ListContactController */
/* @var $model ListContact */
/* @var $form CActiveForm */
?>


<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.slimscroll.js"></script>

<h1>Search For Journalists </h1>
<div class="form">
    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'search-form',
        'htmlOptions' => array('class' => 'col-sm-5', 'class' => 'well'),
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


    <div class="row">
        <?php
        echo $form->dropDownListGroup(
                $categories, 'cat_id', array(
            'wrapperHtmlOptions' => array(
                'class' => 'col-sm-4',
            ),
            'widgetOptions' => array(
                'data' => CHtml::listData(BusinessCategory::model()->findAll(), 'cat_id', 'cat_title'
                ),
                'htmlOptions' => array('multiple' => false),
        )));
        ?>
    </div>



    <div class="row">
        <?php
        echo $form->dropDownListGroup(
                $isolanguages, 'lang_iso', array(
            'wrapperHtmlOptions' => array(
                'class' => 'col-sm-4',
            ),
            'widgetOptions' => array(
                'data' => CHtml::listData(IsoLanguage::model()->findAll(), 'lang_iso', 'language'
                ),
                'htmlOptions' => array('multiple' => false),
        )));
        ?>

        <div class="buttons pull-right">
            
            <?php
            $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Search')
            );
            ?>
        </div>
    </div> 
    <?php $this->endWidget(); ?>

</div><!-- form -->

<h1>Create ListContact</h1>

<div class="form">

    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'id-list-contact',
        'htmlOptions' => array('class' => 'col-sm-5', 'class' => 'well'),
        'type' => 'horizontal',
//        'enableClientValidation' => false,
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
        <?php //echo $form->labelEx($model,'list_user'); ?>
        <?php echo $form->HiddenField($model, 'list_user', array('value' => Yii::app()->user->id)); ?>
        <?php echo $form->error($model, 'list_user'); ?>
    </div>

    <div class="col-xs-5">
        <input type="radio" name="action" value="create" id="create" checked="true" onchange="read()" style="float: left; margin-right: 10px;"/>
        <?php // echo $form->labelEx($model,'Create a list');  ?>
        <?php
        echo $form->textFieldGroup($model, 'list_name', array('size' => 20, 'maxlength' => 255, 'label' => 'Create a list',
            'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
        ));
        ?>

        <?php // echo $form->error($model,'list_name');   ?>
    </div>  

    <div class="rocol-xs-5">

        <input type="radio" name="action" value="update" id="update" onchange="read()" style="float: left; margin-right: 10px;"/>

        <div class="col-xs-5">
            <select class="form-control" 
            <?php
            echo CHtml::dropDownList('listexist', '0', CHtml::listData(ListContact::model()->findAll(), 'list_id', 'list_name'
                    ), array('empty' => '(Select a list)', 'disabled' => 'true', 'options' => array('class' => 'col-sm-2',"onchange"=>"sendData(id_list=)")));
            ?> 
        </select>
    </div>   </div> 

<?php if (!$model->list_id) { ?>
    <div class="row">
        <?php echo $form->HiddenField($model, 'list_added', array('value' => time())); ?>
        <?php echo $form->error($model, 'list_added'); ?>
    </div>
<?php } ?>
<?php if ($model->list_id) { ?>
    <div class="row">
        <?php echo $form->HiddenField($model, 'list_modified', array('value' => time())); ?>
        <?php echo $form->error($model, 'list_modified'); ?>
    </div>
<?php } ?>

<div class="row">


    <div class=" col-xs-4">
        <select size="15" multiple name="contact_id[]" onchange="add_addall()" class="form-control " id="tagCreate">
            <?php
            foreach ($contact as $value)
                echo ' <option  value ="' . $value->contact_id . '" >' . $value->contact_email . '</option>';
            ?>
        </select>
    </div>  

    <div class="col-xs-4">
        <div class="btn btn-lg btn-block ">

            <a class="btn btn-success" disabled href="#" id="add" name="add">
                <i class="fa fa-plus-circle fa-lg"></i><b> ADD  </b></a>
            <?php
//                $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Add')
//                );
//                
            ?>
        </div>

        <div class="btn btn-lg btn-block">
            
            <a class="btn btn-success" disabled href="#" id="addall" name="addall">
                <i class="fa fa-plus-circle fa-lg"></i> <b> ADD ALL</b></a>
            <?php
//            $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Add All')
//            );
            ?>   
        </div>     

        <div class="btn btn-lg btn-block">
            
            <a class="btn btn-danger" disabled href="#" name="Remove">
                <i class="fa fa-times-circle fa-lg"></i> <b> Remove </b></a>
            
            <?php
//            $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Remove ')
//            );
            ?> 
        </div> 

        <div class="btn btn-lg btn-block">
            
            
            <a class="btn btn-danger" disabled href="#" name="Removeall" >
                <i class="fa fa-times-circle fa-lg"></i> <b> Remove All</b></a>
            <?php
//            $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Remove All')
//            );
            ?>  
        </div>        

    </div>     



    <div class=" col-xs-4 ">
        <select size="15" multiple name="" class="form-control" onchange="Remove_Removeall()" id="tagUpdate">
            <?php
            //foreach ($contact as $value)
              //  echo ' <option  value ="' . $value->contact_id . '" >' . $value->contact_email . '</option>';
            ?>
        </select>
    </div>

</div>





<!--    
    /////////////////////////////
     <div class="row">
            <div id="testDiv">
            <table>
                <tr><td><input type="checkbox" id="selecctall" style="float:left; margin-right:10px;"/><b>Select all</b></td></tr>
                <tr>
                    <td>
<?php
//
//                    foreach($contact as  $value){
//                        echo '<div><input name="contact_id[]" class="checkbox1"  value="'.$value->contact_id.'" type="checkbox" style="float:left; margin-right:10px;" /><label>'.$value->contact_email.'</lable></div>';
//                    
//                   
//                    }
//                
?>
                    </td>
                </tr>
            </table>
        </div>
    ///////////////////////////-->
<div class="row">
<div class="buttons col-md-3 col-md-offset-3">
    <?php
    $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'id'=>"createButton",'size' => 'large', 'context' => 'success', 'label' => 'Create')
    );
    ?>
</div>




<div class=" buttons col-md-3 col-md-offset-3">
    <?php
    $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit','id'=>"updateButton", 'size' => 'large', 'context' => 'success', 'label' => 'Update')
    );
    ?>
</div>
    </div>
<div class="row"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->