<?php

class ScriptController extends Controller {

    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('outbound', 'usersendemailnotification','usersendemail'),
                'users' => array('*'),
            ),
        );
    }

    public function actionOutbound() {
//        $email = Yii::app()->mandrillwrap;
//        $presses = Press::model()->findAll();
//        
//        foreach ($presses as $press) {
//            $date = date("Y-m-d H:i:s");
//            if (($press->press_status == 'Q') && ($press->press_date_started <= $date)) {
//                $contacts = $press->list->contacts;
////                 $user_press = $press->pressUser;
//                $credit = 0;
//                $content = '';
//                $press_contacts_mailed = 0;
//                $press_contacts_failed = 0;
//                if ($credit > count($contacts)) {
//                    foreach ($contacts as $contact) {
//                        $press_run = new PressRun;
//                        $press_run->press_id = $press->press_id;
//                        $press_run->contact_id = $contact->contact_id;
//                        $content = $press->press_content;
//                        $content = str_replace("\r\n", '', $content);
//                        $email->html = $content;
//                        $email->subject = $press->press_subject;
//                        $email->fromName = $press->press_sender_name;
//                        $email->fromEmail = $press->press_sender_email;
//                        $email->replyEmail = $press->press_replyto_email;
//                        $email->toName = $contact->contact_name_last . ' ' . $contact->contact_name_first;
//                        $email->toEmail = $contact->contact_email;
//                        $email->img_content = file_get_contents(Yii::app()->basePath . '/uploads/' . $press->press_file_1);
//                        $email->img_content = base64_encode($email->img_content);
//                        $extension = pathinfo($press->press_file_1, PATHINFO_EXTENSION);
//                        switch ($extension) {
//                            case 'jpg':
//                            case 'jpeg':
//                                $email->ext = "image/jpeg";
//                                $email->img_name = basename($press->press_file_1, ".jpg");
//                                break;
//                            case 'gif':
//                                $email->ext = "image/gif";
//                                $email->img_name = basename($press->press_file_1, ".gif");
//
//                                break;
//                            case 'png':
//                                $email->ext = "image/png";
//                                $email->img_name = basename($press->press_file_1, ".png");
//
//                                break;
//                        }
//                        $ret = $email->sendEmail();
//                       
//                        if ($ret[0]->status == "sent"){
//                            $press_contacts_mailed = $press_contacts_mailed + 1;
//                           //$user_press->user_credits=$user_press->user_credits - 1;
//                        $credit = $credit - 1;}
//                        else{
//                        $press_contacts_failed = $press_contacts_failed + 1;        
//                        }
//                        $press_run->mandrill_message_id = $ret[0]->_id;
//                        $press_run->mandrill_status = $ret[0]->status;
//                    }
//                    $press->press_contacts_mailed = $press_contacts_mailed;
//                    $press->press_contacts_failed = $press_contacts_failed;
//
//                    if ($press_contacts_mailed > 0){
//                    $press->press_status = 'C';}
//                    else{
//                    $press->press_status = 'F';
//                        //  $result1 = $this->actionUserSendEmail($press->press_id);
//                    
//                    }
//                    
//                    // $user_press->save();
//                    $press->save();
//                }else {
//
//                    //  $result1 = $this->actionUserSendEmailNotification();
//                    $press->press_status = 'D';
//                    $press->save();
//                }
//            }
//        }
        if(!isset($_POST['mandrill_events'])) {
    echo 'A mandrill error occurred: Invalid mandrill_events';
    exit;
}
$mail = array_pop(json_decode($_POST['mandrill_events']));
 
        try {
    $webhooks = Yii::app()->webhooks;
    $result = $webhooks->getlist();
    //print_r($result);
    /*
    Array
    (
        [0] => Array
            (
                [id] => 42
                [url] => http://example/webhook-url
                [description] => My Example Webhook
                [auth_key] => gplJ8yWptFTqCoq5S1SHPA
                [events] => Array
                    (
                        [0] => send
                        [1] => open
                        [2] => click
                    )
    
                [created_at] => 2013-01-01 15:30:27
                [last_sent_at] => 2013-01-01 15:30:49
                [batches_sent] => 42
                [events_sent] => 42
                [last_error] => example last_error
            )
    
    )
    */
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Invalid_Key - Invalid API key
    throw $e;
}
        $this->render('outbound');
    }

    public function actionUserSendEmailNotification($pk) {
        $user_press = Press::model()->findByPk($pk);
        $email = Yii::app()->mandrillwrap;
        $content = "<p>	inviting to upgrade credit limit </p>";
        $email->html = $content;
        $email->subject = "mailing can't be send";
        $email->fromName = $user_press->porfile_name_last;
        $email->fromEmail = "apl@africapresslist.com";
        $email->replyEmail = "apl@africapresslist.com";
        $email->toName = $user_press->porfile_name_last;
        $email->toEmail = $user_press->user_email;
        return $email->sendEmail();
    }
    
     public function actionUserSendEmail($pk) {
         $user_press = Press::model()->findByPk($pk);
        $email = Yii::app()->mandrillwrap;
        $content = "<p>no credits are deducted </p>";
        $email->html = $content;
        $email->subject = "mailing can be sen";
        $email->fromName = $user_press->porfile_name_last;
        $email->fromEmail = "apl@africapresslist.com";
        $email->replyEmail = "apl@africapresslist.com";
        $email->toName = $user_press->porfile_name_last;
        $email->toEmail = $user_press->user_email;
        return $email->sendEmail();
    }

}
