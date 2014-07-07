<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        
        
    
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
	<!-- hi alter !! -->
<body>
<!-- Hello Ayman -->


<!--  alooooo -->

<!-- Hello Ayman deutsh-->

<!-- Hello Seif -->

<div class="container" id="page">

	<div id="header">
		<div id="logo">
                    
                    <?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
            <?php $this->widget(
    'booster.widgets.TbNavbar',
    array(
        'type' => '',
       'brand' => '<img src="'.Yii::app()->request->baseUrl.'/images/logo-africanpress.png" width="150" />',
        'brandUrl' => '#',
        'collapse' => true, // requires bootstrap-responsive.css
       // 'fixed' => false,
        'fluid' => true,
        'items' => array(
            array(
                'class' => 'booster.widgets.TbMenu',
                'type' => 'navbar',
                'items' => array(
                    array('label'=>'Home ', 'url'=>array('/site/index')),
                   
                    
                    array(
                        'label' => 'For who and how?',
                        'url' => Yii::app()->request->baseUrl.'/site/howtouse',
                        'items' => array(
                            array('label' => 'For who and how', 'url' => Yii::app()->request->baseUrl.'/site/forwhoandhow'),
                            array('label' => 'How to use', 'url' => Yii::app()->request->baseUrl.'/site/howtouse'),
                            array('label' => 'Tips to write', 'url' => Yii::app()->request->baseUrl.'/site/tipstowrite'),
                            array('label' => 'Press','url' => '#'),
                            
                            
                        )
                    ),
                    
                    array(
                        'label' => 'About Us',
                        'url' => '#',
                        'items' => array(
                            
                            array('label'=>'Contact', 'url'=>array('/site/contact')),
                            array('label' => 'Newsletter', 'url' => '#'),
                        )
                    ),
                    
                    array('label'=>'Costs of Use', 'url'=>'#'),
                      array('label'=>' Sign-Up', 'items' => array(
                            
                            array('label'=>'As Client', 'url'=>array('/site/contact')),
                            array('label' => 'As Journalist ', 'url'=>array('/site/contact')),
                        )
                          
                          , 'visible'=>Yii::app()->user->isGuest),
                    
                    
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            ),
            '<form class="navbar-form navbar-left" action=""><div class="form-group"><input type="text" class="form-control" placeholder="Search"></div></form>',
            array(
                'class' => 'booster.widgets.TbMenu',
                'type' => 'navbar',
                'htmlOptions' => array('class' => 'pull-right'),
                'items' => array(
                    '--',
                    
                    
                    
                      
			
                ),
            ),
        ),
    )
);
            
            
            ?>
            
            
            
        </div>
        <div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */?>
	</div><!-- mainmenu -->
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
                
                

	<?php echo $content; ?>

                
                
                
	<div class="clear"></div>
        <h4 class="titrepartner">Partners</h4>
        <div class="partners">
        
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/partners.jpg', ''); ?>
        </div>
        <div class="clear"></div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by The WebSide.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
