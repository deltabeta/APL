<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script type = "text/javascript">

    function f()
    {
        var obj = document.getElementById("type");
        alert('le champ a pour valeur : "' + obj.value + "'");
        // obj.value="autre valeur"
        // alert('maintenant il contient : "'+obj.value+'"')
<?php // Yii::app()->session['type'] =  "<script>document.writeln(obj);</script>" ;
?>
//          <?php
// Yii::app()->user->setState("type",obj); 
//          echo Yii::app()->user->getState("type");
//echo Yii::app()->session['type'] =  "<script>document.writeln(obj);</script>" ;
?> 
    }
</script>



<?php

$type = <<<TMP
echo CHtml::script('
function f()
{
   var obj = document.getElementById("type");
}');

TMP;


Yii::app()->session['type'] = $type;
//
//Yii::app()->user->setState("type",1);
//
//echo Yii::app()->user->setState("type",$type);

?> 


<?php
//$type = "<script>document.writeln(obj);</script>";
// Yii::app()->session['type']= $type;
// echo $type;
?>  
<!--  $indx = echo '<script type="text/JavaScript"> echo index; </script>';  

Yii::app()->session['obj'],-->

<!--
<form role="form">
    <div class="form-group">-->


-->      <div class="form-group">

    <h4> Account Type</h4> 
    <div class="col-xs-2"><!--


        -->        
        <?php $url = Yii::app()->createUrl('contact/session');    ?>
        <select class="form-control" id="type" name="type" onchange="sendData('type='+this.value,'<?php echo $url; ?>')">
            <option value="0" id="0"  selected="selected">Client</option>
            <option value="1" id="1">Journalist</option>

        </select><!--

                <div class=".col-xs-6 .col-md-4">
                   <div class=" h4. Bootstrap heading  Type Of Accounte">
                <select   class="label-info" name="mySelect">
                    <option value="0" selected="selected">Client</option>
                    <option value="1">Journaliste</option>
                </select>
             </div>
                    </div>
        -->          

    </div>
</div>
<br />
<?php
/**
 * @var HOAuthAction $this
 * @var HUserInfoForm $form
 */
echo $form->form;
// echo 'type';
//  Yii::app()->session['obj'] = $obj;
//  
//        
?>
<!--</div>-->
<!--   <div style="margin-top: -250px;">
--> 
<BR><BR><BR>


<!--<button type="submit" class="btn btn-success">Success</button>-->
<!--</form>-->




<?php
/**
 * @var HOAuthAction $this
 * @var HUserInfoForm $form
 */
//  echo $this->param 
// echo 'type';
//        
?>

