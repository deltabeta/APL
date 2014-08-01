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
 * @property integer $profile
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Contact[] $contacts
 * @property CreditHistory[] $creditHistories
 * @property List[] $lists
 * @property Paypal transactions[] $paypal transactions
 * @property Press[] $presses
 * @property IsoCountry $porfileCampCountry
 * @property IsoCountry $porfileCountry
 * @property User $userPackage
 * @property User[] $users
 */
class User extends CActiveRecord
{
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
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_pass, user_email, porfile_initials, porfile_name_first, porfile_name_last', 'required'),
			array('user_package_id, user_credits, porfile_address_nr, porfile_country, porfile_camp_country, profile, status', 'numerical', 'integerOnly'=>true),
			array('user_pass, user_email, porfile_initials, porfile_name_first, porfile_name_last, porfile_address, porfile_address_addon, porfile_city, porfile_phone, porfile_mobile, porfile_camp_name, porfile_camp_function, porfile_camp_account, porfile_camp_email, porfile_camp_website, porfile_coc, usetting_sender_name, usetting_sender_email, usetting_replyto_name, usetting_replyto_email, usetting_bounce_email', 'length', 'max'=>255),
			array('user_registered, user_verified, user_activity, user_deactivated, user_password_request, profile_remarks', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, user_package_id, user_pass, user_credits, user_registered, user_verified, user_activity, user_deactivated, user_password_request, user_email, porfile_initials, porfile_name_first, porfile_name_last, porfile_address, porfile_address_nr, porfile_address_addon, porfile_city, porfile_country, porfile_phone, porfile_mobile, porfile_camp_name, porfile_camp_function, porfile_camp_country, porfile_camp_account, porfile_camp_email, porfile_camp_website, porfile_coc, profile_remarks, usetting_sender_name, usetting_sender_email, usetting_replyto_name, usetting_replyto_email, usetting_bounce_email, profile, status', 'safe', 'on'=>'search'),
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
			'lists' => array(self::HAS_MANY, 'List', 'list_user'),
			'paypal transactions' => array(self::HAS_MANY, 'Paypal transactions', 'pp_user_id'),
			'presses' => array(self::HAS_MANY, 'Press', 'press_user'),
			'porfileCampCountry' => array(self::BELONGS_TO, 'IsoCountry', 'porfile_camp_country'),
			'porfileCountry' => array(self::BELONGS_TO, 'IsoCountry', 'porfile_country'),
			'userPackage' => array(self::BELONGS_TO, 'User', 'user_package_id'),
			'users' => array(self::HAS_MANY, 'User', 'user_package_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_package_id' => 'User Package',
			'user_pass' => 'User Pass',
			'user_credits' => 'User Credits',
			'user_registered' => 'User Registered',
			'user_verified' => 'User Verified',
			'user_activity' => 'User Activity',
			'user_deactivated' => 'User Deactivated',
			'user_password_request' => 'User Password Request',
			'user_email' => 'User Email',
			'porfile_initials' => 'Porfile Initials',
			'porfile_name_first' => 'Porfile Name First',
			'porfile_name_last' => 'Porfile Name Last',
			'porfile_address' => 'Porfile Address',
			'porfile_address_nr' => 'Porfile Address Nr',
			'porfile_address_addon' => 'Porfile Address Addon',
			'porfile_city' => 'Porfile City',
			'porfile_country' => 'Porfile Country',
			'porfile_phone' => 'Porfile Phone',
			'porfile_mobile' => 'Porfile Mobile',
			'porfile_camp_name' => 'Porfile Camp Name',
			'porfile_camp_function' => 'Porfile Camp Function',
			'porfile_camp_country' => 'Porfile Camp Country',
			'porfile_camp_account' => 'Porfile Camp Account',
			'porfile_camp_email' => 'Porfile Camp Email',
			'porfile_camp_website' => 'Porfile Camp Website',
			'porfile_coc' => 'Porfile Coc',
			'profile_remarks' => 'Profile Remarks',
			'usetting_sender_name' => 'Usetting Sender Name',
			'usetting_sender_email' => 'Usetting Sender Email',
			'usetting_replyto_name' => 'Usetting Replyto Name',
			'usetting_replyto_email' => 'Usetting Replyto Email',
			'usetting_bounce_email' => 'Usetting Bounce Email',
			'profile' => 'Profile',
			'status' => 'Status',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_package_id',$this->user_package_id);
		$criteria->compare('user_pass',$this->user_pass,true);
		$criteria->compare('user_credits',$this->user_credits);
		$criteria->compare('user_registered',$this->user_registered,true);
		$criteria->compare('user_verified',$this->user_verified,true);
		$criteria->compare('user_activity',$this->user_activity,true);
		$criteria->compare('user_deactivated',$this->user_deactivated,true);
		$criteria->compare('user_password_request',$this->user_password_request,true);
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
		$criteria->compare('profile',$this->profile);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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
}
