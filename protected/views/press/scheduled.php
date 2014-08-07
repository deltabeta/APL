<?php
/* @var $this ListContactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
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

<h3>Scheduled Press-Releases</h3>


<div id="list-contact-grid" class="grid-view">
    <table class="items">

        <tr>
            <th id="list-contact-grid_c0">Type</th>
            <th id="list-contact-grid_c1">Subject</th>
            <th id="list-contact-grid_c1">Sender</th>
            <th id="list-contact-grid_c2">Attachments</th>
            <th id="list-contact-grid_c3">Contact List</th>
            <th id="list-contact-grid_c3">Date created</th>
            <th id="list-contact-grid_c3">Date scheduled</th>
            <th id="list-contact-grid_c3">Delete Press</th>
            <th id="list-contact-grid_c3">Modify Press</th>

            <th></th>
        </tr>

        <?php
        foreach ($presses as $value) {
            if ($value->press_status == 'Q') {
                echo '<tr><td>' . 'IN QUEUE' . '</td>';
            } else {
                echo '<tr><td>' . 'NEW' . '</td>';
            }
            echo '<td>' . $value->press_subject . '</td>';
            echo '<td>' . $value->press_sender_name . '</td>';

			
        $file1='';
    if(!empty($value->press_file_1)){
        $file1= CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/images.png" height="60" width="60">',array('../protected/uploads/'.$value->press_file_1),array('target'=>'_blank'));
    }
    $file2='';
    if(!empty($value->press_file_2)){
        $file2= CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/images.png" height="60" width="60">',array('../protected/uploads/'.$value->press_file_2),array('target'=>'_blank'));
    }
    $file3='';
    if(!empty($value->press_file_3)){
        $file3= CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/images.png" height="60" width="60">',array('../protected/uploads/'.$value->press_file_3),array('target'=>'_blank'));
    }
    
    echo '<td>'.$file1.$file2.$file3.'</td>'; 

			
			
          //  echo '<td>' . $value->press_file_1 . $value->press_file_2 . $value->press_file_3 . '</td>';
            echo '<td>' . $value->GetPressName() . '</td>';
            echo '<td>' . $value->press_date . '</td>';
            echo '<td>' . $value->press_date_started . '</td>';
            echo '<td>' . CHtml::link('Delete Press', array('press/deletepress1/' . $value->press_id), array('onClick' => 'confirm("Sure to delete this row ?")')) . '</td>';

            echo '<td>' . CHtml::link('Modify Press', array('press/update/' . $value->press_id)) . '</td></tr>';
        }
        ?>
    </table>
</div>
