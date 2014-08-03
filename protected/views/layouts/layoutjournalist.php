<?php/* @var $this Controller */ ?>
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
        <!-- ich bedanke mich fuer dzd buch -->
        <!-- Hello Seif 1 -->



        <!--  alooooo -->

        <!-- Hello Ayman deutsh-->

        <!-- Hello Seif -->


        <div class="container" id="page">

            <div id="header">
                <div id="logo">

                    <?php //echo CHtml::encode(Yii::app()->name);
 echo 'journalist';
                    
                    ?></div>
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
                                array('label' => 'My dashbord ', 'url' => array('/client/dashbord/')),
                                array(
                                    'label' => 'My contact list',
                                    'url' => array('/listContact/'),
                                    
                                ),
                                array(
                                    'label' => 'Create New List',
                                    'url' => array('/listContact/create'),
                                    
                                ),
                                array('label' => 'New press Release', 'url' => array('/press/create')),
                                 array(
                                    'label' => 'My press Releases',
                                    'url' =>'/press/scheduled',
                                    'items' => array(
                                        array('label' => 'press Drafts', 'url' => array('/press/drafts')),
                                        array('label' => 'press Scheduled', 'url' => array('/press/scheduled')),
                                        array('label' => 'Press Sent on ', 'url' => array('/press/released')),
                                      
                                    )),
                                
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
                                        array('label' => 'As Client', 'url' => array('/user/registrationclient')),
                                        array('label' => 'As Journalist ', 'url' => array('/user/registration')),
                                    )
                                    , 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'My Space', 'url' => array('/user/login'), 'visible' => Yii::app()->user->isGuest),
                                
                          array('label' => 'My Profile', 'url' => array('/user/profile'), 'visible' => !Yii::app()->user->isGuest), 
                                
                       array(
                         'label' =>Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')',  'url' => array('/user/logout'),
                        'visible' => !Yii::app()->user->isGuest),
                       
                        
//                                
                               // array('label' => 'Settings ', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                               
                               //    array('label' => 'My Profile', 'url' => array('/user/create')), 
                               // array('label' => 'My Profile', 'url' => array('/contact/update/'.Yii::app()->user->id)), 
                                  // 'url' => array('contact/dashbord' //'visible' => !Yii::app()->user->isGuest), 
                                   //or 'url' => array('/contact/view/id'),
                               // array('label' => 'Logout', 'url' => array('/user/logout'),)// 'visible' => !Yii::app()->user->isGuest)    
                            ),
                            ),
                       //    ),
                     //   ),
                    ),
                        )
                );
                ?>



            </div>
            
            <br>
            <div id="mainmenu">
                <?php
                // Yii User 
//                $this->widget('zii.widgets.CMenu', array(
//                    'items' => array(
//                        array('url' => Yii::app()->getModule('user')->loginUrl, 'label' => Yii::app()->getModule('user')->t("Login"), 'visible' => Yii::app()->user->isGuest),
//                        array('url' => Yii::app()->getModule('user')->registrationUrl, 'label' => Yii::app()->getModule('user')->t("Register"), 'visible' => Yii::app()->user->isGuest),
//                        array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Profile"), 'visible' => !Yii::app()->user->isGuest),
//                        array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', 'visible' => !Yii::app()->user->isGuest),
//                    ),
//                ));
                ?>
            </div>
                <?php 
                 
                if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?><!-- breadcrumbs -->
                <?php endif ?>



                <?php echo $content; ?>



<?php //echo 'aaaa'.Yii::app()->getModule('user')->isAdmin(); ?>
            <div class="clear"></div>
            <h4 class="titrepartner">Partners</h4>
           <div class="partners">
                <div class="row" >
                    
                    <div class="span-6">
                        <img src=<?php echo Yii::app()->request->baseUrl . '/images/logo.jpg'; ?>  />
                        
                    </div>
                    
                    <div class="span-6">
                        <img src=<?php echo Yii::app()->request->baseUrl . '/images/logo.jpg'; ?>  />
                        
                    </div>
                    
                    <div class="span-6">
                        <img src=<?php echo Yii::app()->request->baseUrl . '/images/logo.jpg'; ?>  />
                        
                    </div>
                    
                    <div class="span-6">
                        <img src=<?php echo Yii::app()->request->baseUrl . '/images/logo.jpg'; ?>  />
                        
                    </div>
                    
                </div> 
            
            </div>
            
            <div class="clear"></div>
            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by The WebSide.<br/>
                All Rights Reserved.<br/>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>




<?php



?>
