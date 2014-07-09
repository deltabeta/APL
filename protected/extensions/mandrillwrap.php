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
		Yii::import('application.vendors.mandrill.Mandrill');
		define('MANDRILL_API_KEY','47REdJ11GUIcpHCv60c0w');
	}
	
	public function sendEmail() {
		
		$request_json = '{
						"type":"messages",
						"call":"send",
						"message": {
							"subject":"' . $this->subject . '",
							"to":[
								{
								"email": "' . $this->toEmail . '",
								"name": "' . $this->toName . '"
								}
							],
							"headers":
								{
									"...":"..."
							},
							"url_strip_qs":true,
							"from_email": "' . $this->fromEmail . '",
							"from_name": "' . $this->fromName . '",
							"text": "' . $this->text . '",
							"track_opens":false,
							"track_clicks":false,
							"auto_text":true,
							"tags":["fal"],
							"google_analytics_domains":["..."],
							"google_analytics_campaign":["..."],
							"metadata":["..."]
							}
						}';

		$ret = Mandrill::call((array) json_decode($request_json));
    }
}
