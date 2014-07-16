<?php
/* @var $this MailingController */
/* @var $model Mailing */
/* @var $form CActiveForm */
?>
 <!-- CK Editor -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <style type="text/css">
           .form-group{ width: 50%; margin: 0 !important;}
        </style>
<div class="form">

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php  ?>

	<div class="row">
		<div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." name="subject"/>
                                        </div>
	</div>
        
         <div class="row">
        <div class="form-group span-12 pull-left">
                                        <label>Date range:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation" />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
        </div> 
        
	<div class="row">
            <div class='form-group'>
            <div class='box-body pad'>
                                    <form>
                                         <label>Body</label>
                                        <textarea id="editor1" name="editor1" rows="10" cols="50">
                                            This is my textarea to be replaced with CKEditor.
                                        </textarea>
                                    </form>
                                </div>
            
        </div>
            </div>

        
        
        <div class="row">
           <div class="form-group" style="float:left; width: 45%">
               <fieldset>
                   <legend>Client</legend>
		<?php
                    foreach ($user as $key => $value){
                        
                        ?>
                            <!-- checkbox -->
                                        
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="user[]" value="<?php echo $key ?>"/>
                                                    <?php echo $value; ?>
                                                </label>
                                            </div>
                                       
                        <?php
                    }

                    ?>
                                        </fieldset>

                             </div>
            
            
            <div class="form-group" style="float:right; width: 45%">
               <fieldset>
                   <legend>Journalist</legend>
		<?php
                    foreach ($contact as $key => $value){
                        
                        ?>
                            <!-- checkbox -->
                                        
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="contact[]" value="<?php echo $key ?>"/>
                                                    <?php echo $value; ?>
                                                </label>
                                            </div>
                                       
                        <?php
                    }

                    ?>
                                        </fieldset>

                             </div>
            
 
	</div>
             
        
 <?php
        
        
//        echo $form->checkBoxList(
//    $model,
//    'som',
//    CHtml::listData(Number::model()->findAll(), 'id', 'number'));
        
        
        ?>

	<div class="row buttons">
		<input type="submit" name="save" value="create" />
	</div>



</div><!-- form -->

<script type="text/javascript">
            $(function() {
                

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                  CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
                
            });
        </script>