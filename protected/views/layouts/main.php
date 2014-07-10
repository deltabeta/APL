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

        <script>
            
            i18n.init(function(t) {
  // translate nav
  $(".nav").i18n();

  // programatical access
  var appName = t("app.name");
});
            
            </script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <!-- hi alter !! -->
    <body>
        <!-- Hello Ayman -->
        <!-- ich bedanke mich fuer dzd buch -->
        <!-- Hello Seif 1 -->



        <!--  alooooo -->

        <!-- Hello Ayman deutsh-->

        <!-- Hello Seif -->


        <div class="container" id="page">

            <div id="header">
                <div id="logo">

                    <?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget(
                        'booster.widgets.TbNavbar', array(
                    'type' => '',
                    'brand' => '<img src="' . Yii::app()->request->baseUrl . '/images/logo-africanpress.png" width="150" />',
                    'brandUrl' => array('/site/index'),
                    'collapse' => true, // requires bootstrap-responsive.css
                    // 'fixed' => false,
                    'fluid' => true,
                    'items' => array(
                        array(
                            'class' => 'booster.widgets.TbMenu',
                            'type' => 'navbar',
                            'items' => array(
                                array('label' => 'Home ', 'url' => array('/site/index')),
                                array(
                                    'label' => 'For who and how?',
                                    'url' => Yii::app()->request->baseUrl . '/site/howtouse',
                                    'items' => array(
                                        array('label' => 'For who and how', 'url' => Yii::app()->request->baseUrl . '/site/forwhoandhow','data-i18n'=>'nav.home'),
                                        array('label' => 'How to use', 'url' => Yii::app()->request->baseUrl . '/site/howtouse'),
                                        array('label' => 'Tips to write', 'url' => Yii::app()->request->baseUrl . '/site/tipstowrite'),
                                        array('label' => 'Press', 'url' => '#'),
                                    )
                                ),
                                array('label' => 'Costs of Use', 'url' => Yii::app()->request->baseUrl . '/site/costofuse'),
                                array(
                        'label' => 'About Us',
                        'url' => '#',
                        'items' => array(
                            array('label' => 'About the African Press List', 'url' => array('/site/about')),
                            array('label' => 'Contact us', 'url' =>  array('/site/contact')),
                        )
                                    )
                            ),
                        ),
                        //'<form class="navbar-form navbar-left" action=""><div class="form-group"><input type="text" class="form-control" placeholder="Search"></div></form>',
                        array(
                            'class' => 'booster.widgets.TbMenu',
                            'type' => 'navbar',
                            'htmlOptions' => array('class' => 'pull-right'),
                            'items' => array(
                                '--',
                            array('label' => ' Sign-Up', 'items' => array(
                                        array('label' => 'As Client', 'url' => array('/user/create')),
                                        array('label' => 'As Journalist ', 'url' => array('/contact/create')),
                                    )
                                    , 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'My Space', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)    
                            ),
                        ),
                    ),
                        )
                );
                ?>



            </div>
            <div id="mainmenu">
                <?php /* $this->widget('zii.widgets.CMenu',array(
                  'items'=>array(
                  array('label'=>'Home', 'url'=>array('/site/index')),
                  array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                  array('label'=>'Contact', 'url'=>array('/site/contact')),
                  array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                  array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                  ),
                  )); */ ?>
            </div><!-- mainmenu -->

                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?><!-- breadcrumbs -->
                <?php endif ?>



                <?php echo $content; ?>




            <div class="clear"></div>
            <h4 class="titrepartner">Partners</h4>
            <div class="partners">

            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/partners.jpg', ''); ?>
            </div>
            <div class="clear"></div>
            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by The WebSide.<br/>
                All Rights Reserved.<br/>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
