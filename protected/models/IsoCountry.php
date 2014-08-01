<?php

/**
 * This is the model class for table "iso_country".
 *
 * The followings are the available columns in table 'iso_country':
 * @property integer $country_iso
 * @property string $country_name
 * @property integer $geo_region_id
 * @property string $continent_code
 *
 * The followings are the available model relations:
 * @property Contact[] $contacts
 * @property Continents $continentCode
 * @property GeoRegion $geoRegion
 */
class IsoCountry extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'iso_country';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country_iso, country_name, continent_code', 'required'),
			array('country_iso, geo_region_id', 'numerical', 'integerOnly'=>true),
			array('country_name', 'length', 'max'=>255),
			array('continent_code', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('country_iso, country_name, geo_region_id, continent_code', 'safe', 'on'=>'search'),
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
			'contacts' => array(self::HAS_MANY, 'Contact', 'contact_iso_country'),
                    	'porfileCampCountry' => array(self::HAS_MANY, 'Contact', 'contact_iso_country'),
			'continentCode' => array(self::BELONGS_TO, 'Continents', 'continent_code'),
			'geoRegion' => array(self::BELONGS_TO, 'GeoRegion', 'geo_region_id'),
                        'companies' => array(self::MANY_MANY, 'Company', 'contact_geo_coverage(company_id, contact_id, geo_country_id)'),
                        'contacts' => array(self::MANY_MANY, 'Contact', 'contact_geo_coverage(company_id, contact_id, geo_country_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'country_iso' => 'Country Iso',
			'country_name' => 'Country Name',
			'geo_region_id' => 'Geo Region',
			'continent_code' => 'Continent Code',
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

		$criteria->compare('country_iso',$this->country_iso);
		$criteria->compare('country_name',$this->country_name,true);
		$criteria->compare('geo_region_id',$this->geo_region_id);
		$criteria->compare('continent_code',$this->continent_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IsoCountry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
    
    
    public function GetCountryName($pk)
    {
            $CountryName = IsoCountry::model()->findByPk($pk); 
            return $CountryName->country_name;
    }
    
    public function behaviors() {
        return array(
            'activerecord-relation' => array(
                'class' => 'ext.yiiext.behaviors.activerecord-relation.EActiveRecordRelationBehavior',
            ),
        );
    }
    
}
