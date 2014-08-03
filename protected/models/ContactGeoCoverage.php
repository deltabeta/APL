<?php

/**
 * This is the model class for table "contact_geo_coverage".
 *
 * The followings are the available columns in table 'contact_geo_coverage':
 * @property integer $company_id
 * @property integer $contact_id
 * @property integer $geo_country_id
 *
 * The followings are the available model relations:
 * @property IsoCountry $geoCountry
 * @property Contact $contact
 * @property Company $company
 */
class ContactGeoCoverage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact_geo_coverage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_id, contact_id, geo_country_id', 'required'),
			array('company_id, contact_id, geo_country_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('company_id, contact_id, geo_country_id', 'safe', 'on'=>'search'),
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
			'geoCountry' => array(self::BELONGS_TO, 'IsoCountry', 'geo_country_id'),
			'contact' => array(self::BELONGS_TO, 'Contact', 'contact_id'),
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'company_id' => 'Company',
			'contact_id' => 'Contact',
			'geo_country_id' => 'Geo Country',
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

		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('geo_country_id',$this->geo_country_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContactGeoCoverage the static model class
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
