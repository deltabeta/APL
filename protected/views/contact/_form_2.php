<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.tokeninput.js"></script>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/token-input.css" type="text/css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/token-input-facebook.css" type="text/css" />
<script>
    
	$(document).ready(function(){
		//when the Add Filed button is clicked
                var i=0;
                
                /***Company Initial**/
                $("#inputcompany"+i).tokenInput([			
			<?php			
			$company = Company::model()->findAll();
                         
                        foreach($company as $value){  
                            echo '{id:'.$value->comp_id.', name:"'.$value->comp_name.'"},';
                        }
			?>
            ], { theme: "facebook", preventDuplicates: true,tokenLimit:1 	
			});
                
                /***Country Initial**/
                $("#inputcountry").tokenInput([			
			<?php			
			$country = IsoCountry::model()->findAll();
                         
                        foreach($country as $value){  
                            echo '{id:'.$value->country_iso.', name:"'.$value->country_name.'"},';
                        }
			?>
            ], { theme: "facebook", preventDuplicates: true,	
			}); 
                        
                        
                 /***Function Initial**/
                $("#inputfunction").tokenInput([			
			<?php			
			$function = Functions::model()->findAll();
                         
                        foreach($function as $value){  
                            echo '{id:'.$value->function_id.', name:"'.$value->function_title.'"},';
                        }
			?>
            ], { theme: "facebook", preventDuplicates: true, 	
			});        
                        
                        
                
		$("#add").click(function (e) {
			//Append a new row of code to the "#items" div
			$("#items").append('<div><table><tr><td><b>Company</b><input type="text" name="company[]" id="inputcompany'+i+'"></td><td><b>Country</b><input type="text" name="country[]" id="inputcountry'+i+'"></td><td><b>Fielf of interest</b><input type="text" name="function[]" id="inputfunction'+i+'"></td><td><button class="delete" type="button">Delete</button></td></tr></table></div>');
                        for(j=0;j<i-1;++){
                            idcompany[j]  = document.getElementById('inputcompany'+j).value;
                        }
                        <?php
                        foreach($company as $value){
                            $idcompany[][0] = $value->comp_id;
                            $idcompany[][1] = $value->comp_name;
                        }
                        
                        ?>
                                    
                        allcompany = <?php echo json_encode($idcompany); ?>;
                        for(k=0;k<idcompany.length;k++){
                            for(c=0;c<allcompany.length;c++){    
                                if(idcompany[k]==allcompany[c][0]){
                                    allcompany.splice(c, 1);
                                }
                            }
                        }
                        chaine='';
                        for(c=0;c<allcompany.length;c++){
                                chaine+='{id:'+allcompany[c][0]+', name:"'+allcompany[c][1]+'"},';
                            }
                        $("#inputcompany"+i).tokenInput([
                            chaine
			<?php
                        foreach($company as $value){  
                            echo '{id:'.$value->comp_id.', name:"'.$value->comp_name.'"},';                             
                        }
			?>
            ], { theme: "facebook", preventDuplicates: true,tokenLimit:1	
			});
                        
                        $("#inputcountry"+i).tokenInput([			
			<?php			
                        foreach($country as $value){  
                            echo '{id:'.$value->country_iso.', name:"'.$value->country_name.'"},';
                        }
			?>
            ], { theme: "facebook", preventDuplicates: true,	
			});
                        
                        $("#inputfunction"+i).tokenInput([			
			<?php			                       
                        foreach($function as $value){  
                            echo '{id:'.$value->function_id.', name:"'.$value->function_title.'"},';
                        }
			?>
            ], { theme: "facebook", preventDuplicates: true, 	
			});
                 i++;       
                });
                
                

	$("body").on("click", ".delete", function (e) {
		$(this).closest("div").remove();
	});
	});
</script>
<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>



<!--<span class=span-10">
<?php
//        $this->widget(
//                'booster.widgets.TbPanel', array(
//            'title' => 'Add Yourself As A Journalist',
//            'context' => 'primary',
//            'headerIcon' => 'user',
//            'content' => 'You, being a journalist, freelancer, '
//            . 'blogger or employed by a publisher, '
//            . 'can register yourself with the Africa Press List.'
//            . ' We will check your data and add you to the list.'
//            . ' If you are included in our list, '
//            . 'you will receive automatically targeted press releases from companies and organizations with a special interest in Africa.'
//            . ' Furthermore, we will add you to the database through which interested companies can search for your services.'
//            . ' It is nice if we can do some promotion for you in return.'
//                )
//        )
?>  </span>-->




<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'contact-form',
    'htmlOptions' => array('class' => 'col-sm-5', 'class' => 'well'),
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
?>   <?php
//
//$this->widget('zii.widgets.jui.CJuiAccordion',array(
//    'panels'=>array(
//        
//        'panel 2'=>'content for panel 2',
//        // panel 3 contains the content rendered by a partial view
//        'panel 3'=>$form->textFieldGroup($model, 'contact_email', array('size' => 60, 'maxlength' => 255,
//                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
//            )),
//        
//    ),
//    // additional javascript options for the accordion plugin
//    'options'=>array(
//        'animated'=>'bounceslide',
//        'style'=>array('minHeight'=>'100'),
//    ),
//    
//));
?>


<div class="form">

    <?php echo $form->errorSummary($model); ?>
<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->


    <div id="monaccordeon">
        <div class="accordion-group">
            <div class="btn btn-primary accordion-heading" data-toggle="collapse" data-parent="#monaccordeon" data-target="#item1">Personal Information</div>
            <div id="item1" class="collapse accordion-group in">
                <div class="accordion-inner">
                    <fieldset>

                        <!--                    <div class="row">
                        <?php // echo $form->labelEx($model,'contact_email');  ?>
                        <?php // echo $form->labelEx($model,'contact_email'); ?>
                        <?php
//                        echo $form->textFieldGroup($model, 'contact_email', array('size' => 60, 'maxlength' => 255,
//                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
//                        ));
//                        
                        ?>
<?php // echo $form->error($model, 'contact_email');  ?> <span class="label label-info"    
                                                      >Minimum is 6 characters <br>Must contain at least one special character</span>
                                            </div>     -->

                        <div class="row"> 
                            <?php //echo $form->labelEx($model,'contact_login_pass');  ?>
                            <?php
//                        echo $form->passwordFieldGroup($model, 'contact_login_pass', array('size' => 60, 'maxlength' => 255,
//                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
//                        ));
//                        
                            ?>
<?php // echo $form->error($model, 'contact_login_pass');  ?>

                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_login_pass');  ?>
                            <?php
//                        echo $form->passwordFieldGroup($model, 'verifyPassword', array('size' => 60, 'maxlength' => 255,
//                            'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
//                        ));
//                        
                            ?>
<?php // echo $form->error($model, 'verifyPassword');  ?>
                        </div>




                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_name_ini');   ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_name_ini', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_name_ini'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_name_first');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_name_first', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',)
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_name_first'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_name_last');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_name_last', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_name_last'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_gender');  ?>
                            <?php
                            echo $form->dropDownListGroup(
                                    $model, 'contact_gender', array(
                                'wrapperHtmlOptions' => array(
                                    'class' => 'col-sm-3',
                                ),
                                'widgetOptions' => array(
                                    'data' => array('M' => 'Male', 'F' => 'Female', 'U' => 'Unknown'),
                                    'htmlOptions' => array(),
                                )
                                    )
                            );
                            ?>
<?php // echo $form->textField($model,'contact_gender',array('size'=>1,'maxlength'=>1));   ?>
<?php echo $form->error($model, 'contact_gender'); ?>
                        </div>

                        <div class="row">


                            <?php
   
                            
                            
                         echo $form->dropDownListGroup(
			$categories,
			'cat_title',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
	   			'widgetOptions' => array(
	   				'data' => CHtml::listData(BusinessCategory::model()->findAll(), 'cat_id', 'cat_title'
                                ),
					'htmlOptions' => array('multiple' => true),
				)));
                            
                
                            ?>


                        </div>   



<div class="row">


                            <?php
   
                            
                            
                         echo $form->dropDownListGroup(
			$iso_language,
			'lang_iso',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
	   			'widgetOptions' => array(
	   				'data' => CHtml::listData(IsoLanguage::model()->findAll(), 'lang_iso', 'language'
                                ),
					'htmlOptions' => array('multiple' => true),
				)));
                            
                
                            ?>


                        </div> 



<div class="row">


            <button id="add" type="button">Add Field</button>
	<div id="items">
		<div>
                    <table><tr><td><b>Company</b> <input type="text" name="company[]" id="inputcompany0"></td>
                            <td><b>Country</b> <input type="text" name="country[]" id="inputcountry0"></td>
                            <td><b>Field of interest</b> <input type="text" name="function[]" id="inputfunction0"></td>
                            </tr></table>
                     </div>
	</div>                
    
<script type="text/javascript">
        
        </script>
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
                            <?php //echo $form->labelEx($model,'contact_adress');   ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_adress', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_adress'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_address_nr');   ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_address_nr', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_address_nr'); ?>
                        </div>

                        <div class="row">
                            <?php ///echo $form->labelEx($model,'contact_address_addon');   ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_address_addon', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
<?php echo $form->error($model, 'contact_address_addon'); ?>
                        </div>




                        <div class="row">
                            <div class="col-sm-3 control-label" >
                            <?php echo $form->labelEx($model, 'contact_iso_country'); ?></div>


                            <?php
                            $this->widget('booster.widgets.TbSelect2', array(
                                'asDropDownList' => true,
                                'model' => $model,
                                'attribute' => 'contact_iso_country',
                                'options' => array(
                                    'placeholder' => $model->getAttributeLabel('contact_iso_country'),
                                    'width' => '48.5%',
                                    'class' => 'col-sm-3',
                                    'allowClear' => true,
                                ),
                                'data' => CHtml::listData(IsoCountry::model()->findAll(), 'country_iso', 'country_name'
                                ),
                            ));
                            ?></div>
                            <?php // echo $form->dropDownList($model, 'contact_iso_country', CHtml::listData(isocountry::model()->findAll(), 'country_iso', 'country_name')); ?>
<?php // echo $form->textField($model,'departmentId');  ?>
<?php // echo $form->textField($model,'contact_iso_country');  ?>
<?php echo $form->error($model, 'contact_iso_country'); ?><br>




                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_city');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_city', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
<?php echo $form->error($model, 'contact_city'); ?>

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
                            <?php //echo $form->labelEx($model,'contact_phone');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_phone', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_phone'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_website');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_website', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_website'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_tw');   ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_tw', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_tw'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_fb');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_fb', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_fb'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_go');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_go', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_go'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_yt');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_yt', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
                            <?php echo $form->error($model, 'contact_yt'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_li');  ?>
                            <?php
                            echo $form->textFieldGroup($model, 'contact_li', array('size' => 60, 'maxlength' => 255,
                                'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            ));
                            ?>
<?php echo $form->error($model, 'contact_li'); ?>
                        </div>



                        <?php
                        echo $form->ckEditorGroup(
                                $model, 'contact_bio', array(
                            'widgetOptions' => array(
                                'editorOptions' => array(
                                    // 'fullpage' => 'js:true',
                                    'class' => 'span10',
                                    'rows' => 5,
                                    'options' => array('plugins' => array('clips', 'fontfamily'), 'lang' => 'ang')
                                )
                            )
                                )
                        );
                        ?>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_is_imported');  ?>
                            <?php
                            // echo $form->textFieldGroup($model, 'contact_is_imported', array('size' => 1, 'maxlength' => 1,
                            //   'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            // ));
                            ?>
                            <?php // echo $form->error($model, 'contact_is_imported');  ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_imported_src');   ?>
                            <?php
                            //  echo //$form->textFieldGroup($model, 'contact_imported_src', array('size' => 60, 'maxlength' => 255,
                            //  'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            // ));
                            ?>
                            <?php ///echo $form->error($model, 'contact_imported_src');  ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model,'contact_status');   ?>
                            <?php
                            //
                            //  echo // $form->textFieldGroup($model, 'contact_status', array('size' => 1, 'maxlength' => 1,
                            //'wrapperHtmlOptions' => array('class' => 'col-sm-6',),
                            // ));
                            ?>
<?php // echo $form->error($model, 'contact_status');   ?>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="buttons pull-right">
                <?php
//                $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'size' => 'large', 'context' => 'success', 'label' => 'Register')
//                );
//                
                ?>

<?php // echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');      ?>

            </div>

        </div
    </div>

</div>

<br>




<?php $this->endWidget(); ?>

</div><!-- form -->
