<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $comp_id
 * @property integer $comp_group
 * @property string $comp_name
 * @property string $comp_address
 * @property integer $comp_address_nr
 * @property string $comp_address_nr_addon
 * @property string $comp_postal_code
 * @property string $comp_city
 * @property integer $country_iso
 * @property integer $comp_pub_region
 * @property integer $comp_pub_country_iso
 * @property string $comp_pub_city
 * @property string $comp_phone
 * @property string $comp_fax
 * @property string $comp_email
 * @property string $comp_website
 * @property integer $comp_main_contact
 *
 * The followings are the available model relations:
 * @property IsoCountry $countryIso
 * @property IsoCountry $compPubCountryIso
 * @property GeoRegion $compPubRegion
 * @property ContactFunction[] $contactFunctions
 * @property ContactGeoCoverage[] $contactGeoCoverages
 * @property RoleChannel[] $roleChannels
 */
class Company extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comp_name, country_iso, comp_pub_country_iso, comp_email', 'required'),
			array('comp_group, comp_address_nr, country_iso, comp_pub_region, comp_pub_country_iso, comp_main_contact', 'numerical', 'integerOnly'=>true),
			array('comp_name, comp_address, comp_address_nr_addon, comp_postal_code, comp_city, comp_pub_city, comp_phone, comp_fax, comp_email, comp_website', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('comp_id, comp_group, comp_name, comp_address, comp_address_nr, comp_address_nr_addon, comp_postal_code, comp_city, country_iso, comp_pub_region, comp_pub_country_iso, comp_pub_city, comp_phone, comp_fax, comp_email, comp_website, comp_main_contact', 'safe', 'on'=>'search'),
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
			'countryIso' => array(self::BELONGS_TO, 'IsoCountry', 'country_iso'),
			'compPubCountryIso' => array(self::BELONGS_TO, 'IsoCountry', 'comp_pub_country_iso'),
			'compPubRegion' => array(self::BELONGS_TO, 'GeoRegion', 'comp_pub_region'),
			'contactFunctions' => array(self::HAS_MANY, 'ContactFunction', 'company_id'),
			'contactGeoCoverages' => array(self::HAS_MANY, 'ContactGeoCoverage', 'company_id'),
			'roleChannels' => array(self::HAS_MANY, 'RoleChannel', 'company_id'),
                        'contacts' => array(self::MANY_MANY, 'Contact', 'contact_geo_coverage(company_id, contact_id, geo_country_id)'),
                       
                        
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'comp_id' => 'Comp',
			'comp_group' => 'Comp Group',
			'comp_name' => 'Comp Name',
			'comp_address' => 'Comp Address',
			'comp_address_nr' => 'Comp Address Nr',
			'comp_address_nr_addon' => 'Comp Address Nr Addon',
			'comp_postal_code' => 'Comp Postal Code',
			'comp_city' => 'Comp City',
			'country_iso' => 'Country Iso',
			'comp_pub_region' => 'Comp Pub Region',
			'comp_pub_country_iso' => 'Comp Pub Country Iso',
			'comp_pub_city' => 'Comp Pub City',
			'comp_phone' => 'Comp Phone',
			'comp_fax' => 'Comp Fax',
			'comp_email' => 'Comp Email',
			'comp_website' => 'Comp Website',
			'comp_main_contact' => 'Comp Main Contact',
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

		$criteria->compare('comp_id',$this->comp_id);
		$criteria->compare('comp_group',$this->comp_group);
		$criteria->compare('comp_name',$this->comp_name,true);
		$criteria->compare('comp_address',$this->comp_address,true);
		$criteria->compare('comp_address_nr',$this->comp_address_nr);
		$criteria->compare('comp_address_nr_addon',$this->comp_address_nr_addon,true);
		$criteria->compare('comp_postal_code',$this->comp_postal_code,true);
		$criteria->compare('comp_city',$this->comp_city,true);
		$criteria->compare('country_iso',$this->country_iso);
		$criteria->compare('comp_pub_region',$this->comp_pub_region);
		$criteria->compare('comp_pub_country_iso',$this->comp_pub_country_iso);
		$criteria->compare('comp_pub_city',$this->comp_pub_city,true);
		$criteria->compare('comp_phone',$this->comp_phone,true);
		$criteria->compare('comp_fax',$this->comp_fax,true);
		$criteria->compare('comp_email',$this->comp_email,true);
		$criteria->compare('comp_website',$this->comp_website,true);
		$criteria->compare('comp_main_contact',$this->comp_main_contact);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Company the static model class
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
