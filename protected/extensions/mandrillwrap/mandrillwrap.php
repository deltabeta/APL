<?php

class mandrillwrap extends CApplicationComponent {
	
	public $mandrillKey;
	public $fromEmail;
	public $fromName;
	public $toEmail;
	public $toName;
	public $text;
	public $subject;
	
	public function init()
	{
		Yii::import('application.vendors.Mandrill');
		define('MANDRILL_API_KEY','-47REdJ11GUIcpHCv60c0w');
        }
		public function sendEmail() {		
		
$request_json = '{
"type":"messages",
"call":"send",
"message":{"html": "<h1>example html</h1>",
 "text": "example text", 
 "subject": "example subject", 
 "from_email": "mohamedaymen.mastouri@esprit.tn", 
 "from_name": "example from_name",
 "to":[{"email": "mohamedaymen.mastouri@esprit.tn", "name": "Wes Widner"}],
 "headers":{"...": "..."},
"track_opens":false,
"track_clicks":false
}}';
$ret = Mandrill::call((array) json_decode($request_json));
print_r($ret);
//$ret1 =Mandrill::call(array('type'=>'users', 'call'=>'ping'));

    }
}
