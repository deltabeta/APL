<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return 
	array(
		"base_url" => "http://localhost/APL/index.php/", 

		"providers" => array ( 
//			// openid providers
//			"OpenID" => array ( 
//				"enabled" => #OPENID_ADAPTER_STATUS#
//			),
//
//			"AOL"  => array ( 
//				"enabled" => #AOL_ADAPTER_STATUS# 
//			),
//
//			"Yahoo" => array ( 
//				"enabled" => #YAHOO_ADAPTER_STATUS#,
//				"keys"    => array ( "id" => "#YAHOO_APPLICATION_APP_ID#", "secret" => "#YAHOO_APPLICATION_SECRET#" )
//			),
//
//			"Google" => array ( 
//				"enabled" => #GOOGLE_ADAPTER_STATUS#,
//				"keys"    => array ( "id" => "#GOOGLE_APPLICATION_APP_ID#", "secret" => "#GOOGLE_APPLICATION_SECRET#" )
//			),

			"Facebook" => array ( 
				"enabled" => #FACEBOOK_ADAPTER_STATUS#,
				"keys"    => array ( "id" => "  246399985561103", "secret" => "e52e6b85e8d1fde50afb6808c650c693" )
			),

			"Twitter" => array ( 
				"enabled" => #TWITTER_ADAPTER_STATUS#,
				"keys"    => array ( "key" => "4JkmTIpHPAjq1p1t", "secret" => "tu0F0lybbPRBIL0qnbzWFfyqYqQkB6sBgJUlwBOUPEg5w7TBim" ) 
			),

//			// windows live
//			"Live" => array ( 
//				"enabled" => #LIVE_ADAPTER_STATUS#,
//				"keys"    => array ( "id" => "#LIVE_APPLICATION_APP_ID#", "secret" => "#LIVE_APPLICATION_SECRET#" ) 
//			),
//
//			"MySpace" => array ( 
//				"enabled" => #MYSPACE_ADAPTER_STATUS#,
//				"keys"    => array ( "key" => "#MYSPACE_APPLICATION_KEY#", "secret" => "#MYSPACE_APPLICATION_SECRET#" ) 
//			),

			"LinkedIn" => array ( 
				"enabled" => #LINKEDIN_ADAPTER_STATUS#,
				"keys"    => array ( "key" => "771y4v85zbk8kt", "secret" => "4JkmTIpHPAjq1p1t" ) 
			),

//			"Foursquare" => array (
//				"enabled" => #FOURSQUARE_ADAPTER_STATUS#,
//				"keys"    => array ( "id" => "#FOURSQUARE_APPLICATION_APP_ID#", "secret" => "#FOURSQUARE_APPLICATION_SECRET#" ) 
//			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => TRUE,

		"debug_file" => ""
	);
