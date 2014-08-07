



<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script><?php
/* @var $this ListContactController */
/* @var $model ListContact */

$this->breadcrumbs=array(
	'List Contacts'=>array('index'),
	$model->list_id,
);

$this->menu=array(
	array('label'=>'List ListContact', 'url'=>array('index')),
	array('label'=>'Create ListContact', 'url'=>array('create')),
	array('label'=>'Update ListContact', 'url'=>array('update', 'id'=>$model->list_id)),
	array('label'=>'Delete ListContact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->list_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListContact', 'url'=>array('admin')),
);
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<!--<h1>My List</h1>-->

<?php // $this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		'list_name',
//	),
//));
?>



<h3>Contact List</h3>
<?php
echo '
<form action="'.Yii::app()->request->baseUrl.'/listcontact/deleteall/'.$model->list_id.'" method="post">    
    <div class="table-responsive">  
<table  class="table table-hover" border="1" style="border:1px solid">';
echo '<tr class="active" >'
. '<th>'
        . '<input type="checkbox" id="selecctall" onchange="checkall()"/> '
        . 'Select All</th>'
        . '<th><i class="fa fa-building-o fa-lg"> </i>  Company / <i class="fa fa-user fa-lg"></i>  Contact</th>'
        . '<th>  <i class="fa fa-language fa-lg" ></i> Language</th>'
        . '<th><i class="fa fa-globe  fa-lg" ></i>  Publish Region</th>'
        . '<th><i class="fa fa-bullseye"></i>   Field of interest</th>' . '</tr>';
foreach($contact as  $value){

    
    $languages = $value->isoLanguages;
    $affiche_lang  ='';
    foreach($languages as $l){
        $affiche_lang .= $l->language.', ';    
    }
    
    $categories = $value->businessCategories;
    $affiche_cat  ='';
    foreach($categories as $l){
        $affiche_cat .= $l->cat_title.', ';    
    }
    
//   <div class="checkbox">
//  <label>
//    <input type="checkbox" value="">
//    Option one is this and that&mdash;be sure to include why it's great
//  </label>
//</div>
    
//     echo ' 
//  <tr>'
//             . '<td colspan=5>'
//            . '<div class="checkbox">'
//            . '<label>'
//             . '<input class="checkbox1" type="checkbox" name="contact_id[]" value="'.$value->contact_id.'">'
//             . ''
//             . ''.$value->contact_name_first.' '.$value->contact_name_last.''
//             . ''.$affiche_lang.''.$affiche_cat.''
//            . '</label></div></td>'
//         . '</tr>   
//';
//    
//}
    
    
    echo '<tr>'
             . '<td>'
             . '<input class="checkbox1" type="checkbox"    id="chk" onchange="check()" name="contact_id[]" value="'.$value->contact_id.'">'
             . '</td>'
             . '<td>'.$value->contact_name_first.' '.$value->contact_name_last.'</td>'
             . '<td>'.$affiche_lang.'</td><td></td><td>'.$affiche_cat.'</td>'
         . '</tr>';
    
}
echo '<tr>
    <td colspan="5">
    <input class="btn btn-danger pull-right" id="Delete" disabled type="submit" name="Delete" value="Delete" />
 
    </td>
    </tr>
    </div>
    </table>
</form>    
';
//
//<a class="btn btn-danger" href="#">
//  <i class="fa fa-trash-o fa-lg"></i> Delete</a>


//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$contact,
//	'itemView'=>'contact/_view',
//));

?>
