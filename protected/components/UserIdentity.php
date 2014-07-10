<?php

/** * UserIdentity represents the data needed to identity a user. * It contains the authentication method that checks if the provided * data can identity the user. */
class UserIdentity extends CUserIdentity {

    private $_id;

    public function authenticate() {
        $user = User::model()->find('LOWER(user_email)=?', array(strtolower($this->username)));

        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if (!$user->validatePassword($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {

            $this->_id = $user->user_id;
            $this->username = $user->user_email;
            $this->setState('lastLogin', date("m/d/y g:i A", strtotime($user->user_activity)));
            $user->saveAttributes(array('user_activity' => date("Y-m-d H:i:s", time()),));
            $this->errorCode = self::ERROR_NONE;
        }

        return $this->errorCode == self::ERROR_NONE;
    }

    public function authenticate1()
    {
        $user=  Contact::model()->find('LOWER(contact_email)=?', array(strtolower($this->username)));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->contact_id;
            $this->username=$user->contact_email;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }

    public function getId() {
        return $this->_id;
    }

}
