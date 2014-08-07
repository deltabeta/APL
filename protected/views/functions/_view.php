<?php
/* @var $this FunctionsController */
/* @var $data Functions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->function_id), array('view', 'id'=>$data->function_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_title')); ?>:</b>
	<?php echo CHtml::encode($data->function_title); ?>
	<br />


</div>