<?php
/* @var $this ListContactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List Contacts',
);
//
//$this->menu=array(
//	array('label'=>'Create ListContact', 'url'=>array('create')),
//	array('label'=>'Manage ListContact', 'url'=>array('admin')),
//);



?>



<h1>List Contacts</h1>


<div id="list-contact-grid" class="grid-view">
<table class="items">
    
    <tr>
        <th id="list-contact-grid_c0">List name</th>
    <th id="list-contact-grid_c1">Nb contacts</th>
    <th id="list-contact-grid_c2">List Added</th>
    <th id="list-contact-grid_c3">List Modified</th>
    <th></th>
    <th></th>
    </tr>
    
     <?php

foreach($list as  $value){
    
    echo '<tr><td>'.$value->list_name.'</td>';
    
    //$nb = ListContact::model()->nbcontacts();
    
    $contact = ListContact::model()->findByPk($value->list_id);
    $nb = count($contact->contacts);
    
    
    echo '<td>'.$nb.'</td>';
      
    if($value->list_added>0){ echo' <td>'.date('d/m/Y h:i',$value->list_added).'</td>';}else{echo' <td></td>';}
    if($value->list_modified>0){ echo' <td>'.date('d/m/Y h:i',$value->list_modified).'</td>';}else{echo' <td></td>';}   
    echo'
<td>'.CHtml::link('Detail List',array('listContact/view/'.$value->list_id)).'</td>
    <td>'.CHtml::link('Delete List',array('listContact/deletelist/'.$value->list_id),array('onClick'=>'return confirm("Are you sure to delete this row ?")')).'</td>
</tr>';    
}
     

     
 ?>
</table>
    </div>
   <?php

//$this->widget('zii.widgets.grid.CGridView', array(
//	'id'=>'list-contact-grid',
//	'dataProvider'=>$dataProvider,
//	'columns'=>array(	
//		'list_name',
//            array(
//                'name'=>'contacs',
//                'value'=>  ListContact::model()->nbcontacts(1)),
//		array(
//			'class'=>'CButtonColumn',
//		),
//	),
//));



?>
