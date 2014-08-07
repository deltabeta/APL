<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property integer $user_package_id
 * @property string $user_pass
 * @property integer $user_credits
 * @property string $user_registered
 * @property string $user_verified
 * @property string $user_activity
 * @property string $user_deactivated
 * @property string $user_password_request
 * @property string $user_email
 * @property string $porfile_initials
 * @property string $porfile_name_first
 * @property string $porfile_name_last
 * @property string $porfile_address
 * @property integer $porfile_address_nr
 * @property string $porfile_address_addon
 * @property string $porfile_city
 * @property integer $porfile_country
 * @property string $porfile_phone
 * @property string $porfile_mobile
 * @property string $porfile_camp_name
 * @property string $porfile_camp_function
 * @property integer $porfile_camp_country
 * @property string $porfile_camp_account
 * @property string $porfile_camp_email
 * @property string $porfile_camp_website
 * @property string $porfile_coc
 * @property string $profile_remarks
 * @property string $usetting_sender_name
 * @property string $usetting_sender_email
 * @property string $usetting_replyto_name
 * @property string $usetting_replyto_email
 * @property string $usetting_bounce_email
 *
 * The followings are the available model relations:
 * @property Contact[] $contacts
 * @property CreditHistory[] $creditHistories
 * @property List[] $lists
 * @property Paypal transactions[] $paypal transactions
 * @property Press[] $presses
 * @property IsoCountry $porfileCampCountry
 * @property User $userPackage
 * @property User[] $users
 */
class Client extends CActiveRecord 
{  
    
    public static $regMode = false;
    public $user_pass_repeat;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	/**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('porfile_name_first, porfile_name_last', 'required'),
            array('user_package_id, user_credits, porfile_address_nr, porfile_country, porfile_camp_country,porfile_camp_account,porfile_mobile,porfile_phone', 'numerical', 'integerOnly' => true),
            array('user_pass, porfile_address_addon, porfile_city, porfile_phone, porfile_mobile, porfile_camp_name, porfile_camp_function, porfile_camp_account, porfile_camp_email, porfile_camp_website, porfile_coc, usetting_sender_name, usetting_sender_email, usetting_replyto_name, usetting_replyto_email, usetting_bounce_email', 'length', 'max' => 255),
            array('profile_remarks', 'safe'),
         //   array('user_email', 'unique'),
            array('porfile_camp_email,usetting_bounce_email,usetting_replyto_email,usetting_sender_email', 'email'),
            array('porfile_camp_website', 'url'),
          //  array('user_pass', 'length', 'min' => 6),
          //  array('user_pass', 'match', 'pattern' => '/\W/', 'message' => 'Password must contain at least one special character.'),
            //array('user_pass', 'compare'),
           // array('user_pass_repeat', 'compare', 'compareAttribute'=>'user_pass', 'message' => ("Retype Password is incorrect.")),
                    
                    
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array(' user_email, porfile_initials, porfile_name_first, porfile_name_last, porfile_address, porfile_address_nr, porfile_address_addon, porfile_city, porfile_country, porfile_phone, porfile_mobile, porfile_camp_name, porfile_camp_function, porfile_camp_country, porfile_camp_account, porfile_camp_email, porfile_camp_website, porfile_coc, profile_remarks, usetting_sender_name, usetting_sender_email, usetting_replyto_name, usetting_replyto_email, usetting_bounce_email', 'safe', 'on' => 'search'),
        );
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'contacts' => array(self::MANY_MANY, 'Contact', 'contact_client_blacklist(user_id, contact_id)'),
                                    'creditHistories' => array(self::HAS_MANY, 'CreditHistory', 'ch_user'),
			'lists' => array(self::HAS_MANY, 'ListContact', 'list_user'),
			'paypal transactions' => array(self::HAS_MANY, 'Paypal transactions', 'pp_user_id'),
			'presses' => array(self::HAS_MANY, 'Press', 'press_user'),
			'porfileCampCountry' => array(self::BELONGS_TO, 'IsoCountry', 'porfile_camp_country'),
			'userPackage' => array(self::BELONGS_TO, 'User', 'user_package_id'),
			'users' => array(self::HAS_MANY, 'User', 'user_package_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
        return array(
            'user_id' => 'ID',
            'user_package_id' => 'User Package',
            'user_pass' => 'Password',
           'user_credits' => 'Credits',
            'user_email' => 'Email',
            'porfile_initials' => 'Initials',
            'porfile_name_first' => 'First Name',
            'porfile_name_last' => 'Last Name',
            'porfile_address' => 'Address',
            'porfile_address_nr' => 'Address Nr',
            'porfile_address_addon' => ' Address Addon',
            'porfile_city' => 'City',
            'porfile_country' => ' Country',
            'porfile_phone' => 'Phone',
            'porfile_mobile' => 'Mobile',
            'porfile_camp_name' => ' Campany Name',
            'porfile_camp_function' => 'Campany Function',
            'porfile_camp_country' => 'Campany Country',
            'porfile_camp_account' => 'Campany Account',
            'porfile_camp_email' => 'Campany Email',
            'porfile_camp_website' => 'Campany Website',
            'porfile_coc' => 'Chamber of commerce ',
            'profile_remarks' => 'Remarks',
            'usetting_sender_name' => ' Sender Name',
            'usetting_sender_email' => 'Sender Email',
            'usetting_replyto_name' => ' Replyto Name',
            'usetting_replyto_email' => ' Replyto Email',
            'usetting_bounce_email' => ' Bounce Email',
      
        );
    }

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		
		//$criteria->compare('user_package_id',$this->user_package_id);
		
		//$criteria->compare('user_credits',$this->user_credits);
		
               ///$criteria->compare('user_registered',$this->user_registered,true);
		//$criteria->compare('user_verified',$this->user_verified,true);
		//$criteria->compare('user_activity',$this->user_activity,true);
		//$criteria->compare('user_deactivated',$this->user_deactivated,true);
		//$criteria->compare('user_password_request',$this->user_password_request,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('porfile_initials',$this->porfile_initials,true);
		$criteria->compare('porfile_name_first',$this->porfile_name_first,true);
		$criteria->compare('porfile_name_last',$this->porfile_name_last,true);
		$criteria->compare('porfile_address',$this->porfile_address,true);
		$criteria->compare('porfile_address_nr',$this->porfile_address_nr);
		$criteria->compare('porfile_address_addon',$this->porfile_address_addon,true);
		$criteria->compare('porfile_city',$this->porfile_city,true);
		$criteria->compare('porfile_country',$this->porfile_country);
		$criteria->compare('porfile_phone',$this->porfile_phone,true);
		$criteria->compare('porfile_mobile',$this->porfile_mobile,true);
		$criteria->compare('porfile_camp_name',$this->porfile_camp_name,true);
		$criteria->compare('porfile_camp_function',$this->porfile_camp_function,true);
		$criteria->compare('porfile_camp_country',$this->porfile_camp_country);
		$criteria->compare('porfile_camp_account',$this->porfile_camp_account,true);
		$criteria->compare('porfile_camp_email',$this->porfile_camp_email,true);
		$criteria->compare('porfile_camp_website',$this->porfile_camp_website,true);
		$criteria->compare('porfile_coc',$this->porfile_coc,true);
		$criteria->compare('profile_remarks',$this->profile_remarks,true);
		$criteria->compare('usetting_sender_name',$this->usetting_sender_name,true);
		$criteria->compare('usetting_sender_email',$this->usetting_sender_email,true);
		$criteria->compare('usetting_replyto_name',$this->usetting_replyto_name,true);
		$criteria->compare('usetting_replyto_email',$this->usetting_replyto_email,true);
		$criteria->compare('usetting_bounce_email',$this->usetting_bounce_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
                static public function range($str,$fieldValue=NULL) {
		$rules = explode(';',$str);
		$array = array();
		for ($i=0;$i<count($rules);$i++) {
			$item = explode("==",$rules[$i]);
			if (isset($item[0])) $array[$item[0]] = ((isset($item[1]))?$item[1]:$item[0]);
		}
		if (isset($fieldValue)) 
			if (isset($array[$fieldValue])) return $array[$fieldValue]; else return '';
		else
			return $array;
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
         /**     * apply a hash on the password before we store it in the database   */
    protected function afterValidate() {
        parent::afterValidate();
        if (!$this->hasErrors())
            $this->user_pass = $this->hashPassword($this->user_pass);
    }

    /**     * Generates the password hash.  
     *  * @param string password  
     *    * @return string hash   */
    public function hashPassword($password) {
        return md5($password);
    }
    
    /**   * Checks if the given password is correct.
     *    * @param string the password to be validated 
     *   * @return boolean whether the password is valid   */
    public function validatePassword($password)  {
        return $this->hashPassword($password)===$this->user_pass;  
        
    }
    
}
