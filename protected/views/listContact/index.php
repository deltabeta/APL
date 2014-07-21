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
    <th id="list-contact-grid_c2">Liste ajoutée</th>
    <th id="list-contact-grid_c3">Liste modifièe</th>
    <th></th>
    </tr>
    
     <?php


foreach($list as $key => $value){
    
    echo '<tr><td>'.$value.'</td>';
    
    //$nb = ListContact::model()->nbcontacts();
    
    $contact = ListContact::model()->findByPk($key);
    $nb = count($contact->contacts);
    
    
    echo '<td>'.$nb.'</td>
      
        <td></td>
        <td></td>
<td>'.CHtml::link('Detail List',array('listContact/view/'.$key)).'</td>
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
