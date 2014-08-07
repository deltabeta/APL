<?php

class webhooks extends CApplicationComponent {
    public function init() {
        Yii::import('application.vendors.Mandrill');
        define('MANDRILL_API_KEY', 'vx4a-QQzpKypkAqF2U9cfA');
    }

    public function  getlist(){
        
      return  Mandrill::call(array('type'=>'webhooks', 'call'=>'list'));
    }

}
