<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs = array(
    'Contacts' => array('index'),
    $model->contact_id,
);

//$this->menu = array(
//    // array('label' => 'List Contact', 'url' => array('index')),
//    //array('label' => 'Create Contact', 'url' => array('create')),
//    array('label' => 'Update Contact', 'url' => array('update', 'id' => $model->contact_id)),
//    array('label' => 'Delete Contact', 'url' => '#',
//        'linkOptions' => array('submit' => array('delete', 'id' => $model->contact_id),
//            'confirm' => 'Are you sure you want to delete this item?')),
//    array('label' => 'Manage Contact', 'url' => array('admin')),
//);
?>


<h1><?php echo $model->contact_email; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'contact_id',
		'contact_email',
		'contact_name_ini',
		'contact_name_first',
		'contact_name_last',
		'contact_gender',
		'contact_adress',
		'contact_address_nr',
		'contact_address_addon',
		'contact_iso_country',
		'contact_city',
		'contact_phone',
		'contact_website',
		'contact_tw',
		'contact_fb',
		'contact_go',
		'contact_yt',
		'contact_li',
		'contact_bio',
		'contact_is_imported',
		'contact_imported_src',
		'contact_status',
		//'contact_login_pass',
	),
)); ?>

<h1>My Profile <?php echo $model->contact_email; ?></h1>

<?php
$this->widget('booster.widgets.TbEditableDetailView', array(
    'data' => $model,
    //'apply' => false,  // turn off applying editable to all attributes
    'url' => array('update', 'id' => $model->contact_id),
      'placement' => 'right',
    'attributes' => array(
        
        
        'contact_id',
        'contact_email',
        'contact_name_ini',
        'contact_name_first',
        'contact_name_last',
        //'contact_gender',
        array(//select loaded from array
            'name' => 'contact_gender',
            'editable' => array(
                'type' => 'select',
                'source' => array('M' => 'Male', 'F' => 'Female'),
            //'placement' => 'left',
            //'showbuttons' => 'bottom',
            )),
        'contact_adress',
        'contact_address_nr',
        'contact_address_addon',
        //'contact_iso_country',
        array(
            
            
            'name' => 'contact_iso_country',
            'value' => IsoCountry::model()->GetCountryName($model->contact_iso_country),
            'editable' => array(
                'type' => 'select',
                // 'placement' => 'right',
                'showbuttons' => 'bottom',
                'source' => CHtml::listData(IsoCountry::model()->findAll(), 'country_iso', 'country_name'),),
        ),
        'contact_city',
        'contact_phone',
        'contact_website',
        'contact_tw',
        'contact_fb',
        'contact_go',
        'contact_yt',
        'contact_li',
        
        'contact_bio',
         
        
        'contact_is_imported',
        'contact_imported_src',
    //'contact_status', 
    //'contact_login_pass',
    ),
        //$this->renderPartial('view', array('data'=>$model)),
));
?>

