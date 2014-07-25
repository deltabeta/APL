<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $contact_id
 * @property string $contact_email
 * @property string $contact_name_ini
 * @property string $contact_name_first
 * @property string $contact_name_last
 * @property string $contact_gender
 * @property string $contact_adress
 * @property integer $contact_address_nr
 * @property string $contact_address_addon
 * @property integer $contact_iso_country
 * @property string $contact_city
 * @property string $contact_phone
 * @property string $contact_website
 * @property string $contact_tw
 * @property string $contact_fb
 * @property string $contact_go
 * @property string $contact_yt
 * @property string $contact_li
 * @property string $contact_bio
 * @property string $contact_is_imported
 * @property string $contact_imported_src
 * @property string $contact_status
 * @property string $contact_login_pass
 *
 * The followings are the available model relations:
 * @property IsoCountry $contactIsoCountry
 */
class Contact extends CActiveRecord {
    
    
    public static $regMode = false;////////////
    public $verifyPassword;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'contact';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('contact_name_first, contact_name_last,', 'required'),
            array('contact_address_nr, contact_iso_country', 'numerical', 'integerOnly' => true),
            //array('contact_login_pass', 'length', 'max' => 32, 'min' => 6),
            // array('contact_login_pass', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/','message' => ("Incorrect symbols (A-z0-9)")),  
          //  array('contact_login_pass', 'match', 'pattern' => '/\W/', 'message' => 'Password must contain at least one special character.'),
           // array('verifyPassword', 'compare', 'compareAttribute' => 'contact_login_pass', 'message' => ("Retype Password is incorrect.")),
            //    array('email', 'unique', 'message' => ("This user's email address already exists.")),
           // array('contact_email', 'email'),
            array('contact_name_ini, contact_name_first, contact_name_last, '
                . 'contact_adress, contact_address_addon, contact_city, contact_phone, '
                . 'contact_website, contact_tw, contact_fb, contact_go, contact_yt, contact_li, '
                . 'contact_imported_src', 'length', 'max' => 255),
            array('contact_gender, contact_is_imported, contact_status', 'length', 'max' => 1),
            array('contact_website,contact_tw,contact_fb,contact_go,contact_yt,contact_li', 'url'),
            array('contact_bio', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('contact_id, contact_email, contact_name_ini, contact_name_first, contact_name_last, contact_gender, contact_adress, contact_address_nr, contact_address_addon, contact_iso_country, contact_city, contact_phone, contact_website, contact_tw, contact_fb, contact_go, contact_yt, contact_li, contact_bio, contact_is_imported, contact_imported_src, contact_status, contact_login_pass', 'safe', 'on' => 'search'),
        );
    }

//    public $verifyPassword;
//    public $verifyCode;
//
//
//
//    public function rules() {
//        $rules = array(
//            array('username, password, verifyPassword, email', 'required'), //
//            
//            array('username', 'length', 'max' => 20, 'min' => 3, 'message' => UserModule::t("Incorrect username (length between 3 and 20 characters).")),
//        //    array('password', 'length', 'max' => 128, 'min' => 6, 'message' => UserModule::t("Incorrect password (minimal length 4 symbols).")),
//                
//           // array('password1', 'passwordStrength', 'strength'=>self::STRONG),
//           
//            array('email', 'email'),
//            array('username', 'unique', 'message' => UserModule::t("This user's name already exists.")),
//            array('email', 'unique', 'message' => UserModule::t("This user's email address already exists.")),
//            //array('verifyPassword', 'compare', 'compareAttribute'=>'password', 'message' => UserModule::t("Retype Password is incorrect.")),
//            array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u', 'message' => UserModule::t("Incorrect symbols (A-z0-9).")),
//        );
//        if (!(isset($_POST['ajax']) && $_POST['ajax'] === 'registration-form')) {
//            array_push($rules, array('verifyCode', 'captcha', 'allowEmpty' => !UserModule::doCaptcha('registration')));
//        }
//
//        array_push($rules, array('verifyPassword', 'compare', 'compareAttribute' => 'password', 'message' => UserModule::t("Retype Password is incorrect.")));
//        return $rules;
//    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'contactIsoCountry' => array(self::BELONGS_TO, 'IsoCountry', 'contact_iso_country'),
            'user'=>array(self::HAS_ONE, 'User', 'id'),//////////////////////////////////////////////////
            'categories' => array(self::MANY_MANY, 'BusinessCategory', 'contact_category(cat_id, contact_id)'),
        
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'contact_id' => 'Contact',
            'contact_email' => ' Email',
            'contact_name_ini' => 'Name initials',
            'contact_name_first' => 'First Name',
            'contact_name_last' => 'Last Name',
            'contact_gender' => 'Gender',
            'contact_adress' => 'Address',
            'contact_address_nr' => 'Address Number',
            'contact_address_addon' => 'Address Addon',
            'contact_iso_country' => 'Country',
            'contact_city' => 'City',
            'contact_phone' => 'Phone',
            'contact_website' => 'Website',
            'contact_tw' => 'Twitter Page',
            'contact_fb' => 'Facebook Page',
            'contact_go' => 'Google + Page',
            'contact_yt' => 'Youtube Channel',
            'contact_li' => 'Linkidin Page',
            'contact_bio' => 'Curriculum Vitae',
           // 'contact_is_imported' => 'Is Imported',
         //   'contact_imported_src' => 'Imported Source',
           // 'contact_status' => 'Status',
            'contact_login_pass' => 'Password',
            'verifyPassword' => 'Verify Password',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('contact_id', $this->contact_id);
        $criteria->compare('contact_email', $this->contact_email, true);
        $criteria->compare('contact_name_ini', $this->contact_name_ini, true);
        $criteria->compare('contact_name_first', $this->contact_name_first, true);
        $criteria->compare('contact_name_last', $this->contact_name_last, true);
        $criteria->compare('contact_gender', $this->contact_gender, true);
        $criteria->compare('contact_adress', $this->contact_adress, true);
        $criteria->compare('contact_address_nr', $this->contact_address_nr);
        $criteria->compare('contact_address_addon', $this->contact_address_addon, true);
        $criteria->compare('contact_iso_country', $this->contact_iso_country);
        $criteria->compare('contact_city', $this->contact_city, true);
        $criteria->compare('contact_phone', $this->contact_phone, true);
        $criteria->compare('contact_website', $this->contact_website, true);
        $criteria->compare('contact_tw', $this->contact_tw, true);
        $criteria->compare('contact_fb', $this->contact_fb, true);
        $criteria->compare('contact_go', $this->contact_go, true);
        $criteria->compare('contact_yt', $this->contact_yt, true);
        $criteria->compare('contact_li', $this->contact_li, true);
        $criteria->compare('contact_bio', $this->contact_bio, true);
        $criteria->compare('contact_is_imported', $this->contact_is_imported, true);
        $criteria->compare('contact_imported_src', $this->contact_imported_src, true);
        $criteria->compare('contact_status', $this->contact_status, true);
        $criteria->compare('contact_login_pass', $this->contact_login_pass, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    /////////////////////////////////////////////////////////////////////
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
///////////////////////////////////////////////////////////////////////////
   

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Contact the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function afterSave() {
        if (get_class(Yii::app())=='CWebApplication'&&  Contact::$regMode==false) {
            Yii::app()->user->updateSession();
        }
        return parent::afterSave();
    }
    
    
    protected function afterValidate() {
        parent::afterValidate();
        if (!$this->hasErrors())
            $this->contact_login_pass = $this->hashPassword($this->contact_login_pass);
    }

    /**     * Generates the password hash.  
     *  * @param string password  
     *    * @return string hash   */
    public function hashPassword($password) {
        return md5($password);
    }

    /**     * Checks if the given password is correct.
     *    * @param string the password to be validated 
     *   * @return boolean whether the password is valid   */
    public function validatePassword($password) {
        return $this->hashPassword($password) === $this->contact_login_pass;
    }
    
    public function behaviors() {
        return array(
            'activerecord-relation' => array(
                'class' => 'ext.yiiext.behaviors.activerecord-relation.EActiveRecordRelationBehavior',
            ),
        );
    }

}
