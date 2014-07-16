<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(
	//'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Africa Press List',

	// preloading 'log' component
	'preload'=>array('log'),
    
        'preload' => array('booster'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.*',
                'application.modules.user.models.*',
                'application.modules.user.components.*',
                ),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
                 'user'=>array(
                     'tableUsers' => 'users',
                    'tableProfiles' => 'profiles',
                    'tableProfileFields' => 'profiles_fields',
            # encrypting method (php hash function)
            'hash' => 'md5',
 
            # send activation email
            'sendActivationMail' => true,
 
            # allow access for non-activated users
            'loginNotActiv' => false,
 
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => TRUE,
 
            # automatically login from registration
            'autoLogin' => true,
 
            # registration path
            'registrationUrl' => array('/user/registration'),
 
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
 
            # login form path
            'loginUrl' => array('/user/login'),
 
            # page after login
            'returnUrl' => array('/user/profile'),
 
            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),
            
            
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'0000',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	 
	),
        'sourceLanguage'=>'en',	
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
                       
			'allowAutoLogin'=>true,
                        'loginUrl' => array('/user/login'),
		),
		// uncomment the following to enable URLs in path-format
	
                'mail' => array(
                        'class' => 'ext.yii-mail.YiiMail',
                        'transportType'=>'smtp',
                         'transportOptions'=>array(
                           'host'=>'smtp.gmail.com',
                           'username'=>'tounsi.gourmand@gmail.com',
                           'password'=>'O2tounsi',
                           'port'=>'465',
                           'encryption'=>'ssl',
                             ),),
            
            
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=africapresslistdb',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
            
//                'db'=>array(
//			'connectionString' => 'mysql:host=localhost;dbname=webside_apl',
//			'emulatePrepare' => true,
//			'username' => 'webside_apl',
//			'password' => 'F}-LT[Z3Vns2',
//			'charset' => 'utf8',
//		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),
                'booster' => array(
                'class' => 'ext.yiibooster.components.Booster',
                ),
               
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'radhouane.walid.m2@gmail.com',
	),
);