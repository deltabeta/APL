<?php
/* @var $this MailingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mailings',
);

$this->menu=array(
	array('label'=>'Create Mailing', 'url'=>array('create')),
	array('label'=>'Manage Mailing', 'url'=>array('admin')),
);
?>

<h1>Mailings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
