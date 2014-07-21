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



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'list-contact-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(	
		'list_name',
            array(
                'name'=>'contacs',
                'value'=>  ListContact::model()->nbcontacts()),
//		array(
//			'class'=>'CButtonColumn',
//		),
	),
)); ?>
