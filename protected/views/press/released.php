<?php
/* @var $this ListContactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presses List',
);
//
//$this->menu=array(
//	array('label'=>'Create ListContact', 'url'=>array('create')),
//	array('label'=>'Manage ListContact', 'url'=>array('admin')),
//);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#press-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>press releases sent</h3>


<div id="list-contact-grid" class="grid-view">
<table class="items">
    
    <tr>
    <th id="list-contact-grid_c0">Type</th>
    <th id="list-contact-grid_c1">Subject</th>
    <th id="list-contact-grid_c1">Sender</th>
    <th id="list-contact-grid_c2">Attachments</th>
    <th id="list-contact-grid_c3">Contact List</th>
    <th id="list-contact-grid_c3">Date created</th>
    <th id="list-contact-grid_c3">Sent on</th>
    <th></th>
    </tr>
    
     <?php   
 foreach($presses as  $value){    
 if($value->press_status=='C') { echo '<tr><td>'.'Completed'.'</td>';}else{ echo '<tr><td>'.'Faild'.'</td>';}
   echo '<td>'.$value->press_subject.'</td>';   
    echo '<td>'.$value->press_sender_name.'</td>';   
    echo '<td>'.$value->press_file_1.$value->press_file_2.$value->press_file_3.'</td>'; 
    echo '<td>'.$value->GetPressName().'</td>';   
    echo '<td>'.$value->press_date.'</td>' ;
     echo '<td>'.$value->press_date_completed.'</td>';  

   
}    
   
 ?>
</table>
    </div>
  