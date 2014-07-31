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
 * @property integer $profile
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property IsoCountry $contactIsoCountry
 * @property BusinessCategory[] $businessCategories
 * @property List[] $lists
 */
class Contact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_email, contact_name_first, contact_name_last, contact_login_pass', 'required'),
			array('contact_address_nr, contact_iso_country, profile, status', 'numerical', 'integerOnly'=>true),
			array('contact_email, contact_name_ini, contact_name_first, contact_name_last, contact_adress, contact_address_addon, contact_city, contact_phone, contact_website, contact_tw, contact_fb, contact_go, contact_yt, contact_li, contact_imported_src, contact_login_pass', 'length', 'max'=>255),
			array('contact_gender, contact_is_imported, contact_status', 'length', 'max'=>1),
			array('contact_bio', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contact_id, contact_email, contact_name_ini, contact_name_first, contact_name_last, contact_gender, contact_adress, contact_address_nr, contact_address_addon, contact_iso_country, contact_city, contact_phone, contact_website, contact_tw, contact_fb, contact_go, contact_yt, contact_li, contact_bio, contact_is_imported, contact_imported_src, contact_status, contact_login_pass, profile, status', 'safe', 'on'=>'search'),
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
			'contactIsoCountry' => array(self::BELONGS_TO, 'IsoCountry', 'contact_iso_country'),
			'businessCategories' => array(self::MANY_MANY, 'BusinessCategory', 'contact_category(contact_id, cat_id)'),
                        'isoLanguages' => array(self::MANY_MANY, 'IsoLanguage', 'contact_language(contact_id, lang_iso)'),
			'lists' => array(self::MANY_MANY, 'List', 'list_contact(contact_id, list_id)'),
                        'companies' => array(self::MANY_MANY, 'Company', 'contact_geo_coverage(company_id, contact_id)'),
                        'geo_countries' => array(self::MANY_MANY, 'IsoCountry', 'contact_geo_coverage(contact_id, geo_country_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contact_id' => 'Contact',
			'contact_email' => 'Contact Email',
			'contact_name_ini' => 'Contact Name Ini',
			'contact_name_first' => 'Contact Name First',
			'contact_name_last' => 'Contact Name Last',
			'contact_gender' => 'Contact Gender',
			'contact_adress' => 'Contact Adress',
			'contact_address_nr' => 'Contact Address Nr',
			'contact_address_addon' => 'Contact Address Addon',
			'contact_iso_country' => 'Contact Iso Country',
			'contact_city' => 'Contact City',
			'contact_phone' => 'Contact Phone',
			'contact_website' => 'Contact Website',
			'contact_tw' => 'Contact Tw',
			'contact_fb' => 'Contact Fb',
			'contact_go' => 'Contact Go',
			'contact_yt' => 'Contact Yt',
			'contact_li' => 'Contact Li',
			'contact_bio' => 'Contact Bio',
			'contact_is_imported' => 'Contact Is Imported',
			'contact_imported_src' => 'Contact Imported Src',
			'contact_status' => 'Contact Status',
			'contact_login_pass' => 'Contact Login Pass',
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

		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('contact_name_ini',$this->contact_name_ini,true);
		$criteria->compare('contact_name_first',$this->contact_name_first,true);
		$criteria->compare('contact_name_last',$this->contact_name_last,true);
		$criteria->compare('contact_gender',$this->contact_gender,true);
		$criteria->compare('contact_adress',$this->contact_adress,true);
		$criteria->compare('contact_address_nr',$this->contact_address_nr);
		$criteria->compare('contact_address_addon',$this->contact_address_addon,true);
		$criteria->compare('contact_iso_country',$this->contact_iso_country);
		$criteria->compare('contact_city',$this->contact_city,true);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_website',$this->contact_website,true);
		$criteria->compare('contact_tw',$this->contact_tw,true);
		$criteria->compare('contact_fb',$this->contact_fb,true);
		$criteria->compare('contact_go',$this->contact_go,true);
		$criteria->compare('contact_yt',$this->contact_yt,true);
		$criteria->compare('contact_li',$this->contact_li,true);
		$criteria->compare('contact_bio',$this->contact_bio,true);
		$criteria->compare('contact_is_imported',$this->contact_is_imported,true);
		$criteria->compare('contact_imported_src',$this->contact_imported_src,true);
		$criteria->compare('contact_status',$this->contact_status,true);
		$criteria->compare('contact_login_pass',$this->contact_login_pass,true);
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
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function behaviors() {
        return array(
            'activerecord-relation' => array(
                'class' => 'ext.yiiext.behaviors.activerecord-relation.EActiveRecordRelationBehavior',
            ),
        );
    }
}
