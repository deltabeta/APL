<?php

class mandrillwrap extends CApplicationComponent {

    public $mandrillKey;
    public $fromEmail;
    public $fromName;
    public $toEmail;
    public $toName;
    public $text;
    public $html;
    public $subject;
    public $replyEmail;
    public $img_content;
    public $ext;
    public $img_name;
    public function init() {
        Yii::import('application.vendors.Mandrill');
        define('MANDRILL_API_KEY', 'vx4a-QQzpKypkAqF2U9cfA');
    }

    public function sendEmail() {

        $request_json = '{
						"type":"messages",
						"call":"send",
						"message": {
                                                        "html": "' . $this->html . '",
							"subject":"' . $this->subject . '",
							"to":[
								{
								"email": "' . $this->toEmail . '",
								"name": "' . $this->toName . '"
								}
							],
							"headers":
								{
							 "Reply-To": "' . $this->replyEmail . '"
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
							"metadata":["..."],
                                                        "images":[
                                                            {     
                                                            "type": "'. $this->ext.'",
                                                            "name": "'. $this->img_name.'",
                                                            "content": "'. $this->img_content.'"
                                                          },
                                                           {     
                                                            "type": "'. $this->ext.'",
                                                            "name": "'. $this->img_name.'",
                                                            "content": "'. $this->img_content.'"
                                                          },
                                                           {     
                                                            "type": "'. $this->ext.'",
                                                            "name": "'. $this->img_name.'",
                                                            "content": "'. $this->img_content.'"
                                                          }
                                                                                                ]
                
							}
						}';

        $ret= Mandrill::call((array) json_decode($request_json));
          return $ret ;
   
    }

}
