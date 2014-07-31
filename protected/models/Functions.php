<?php

/**
 * This is the model class for table "function".
 *
 * The followings are the available columns in table 'function':
 * @property integer $function_id
 * @property string $function_title
 *
 * The followings are the available model relations:
 * @property ContactFunction[] $contactFunctions
 * @property IsoLanguage[] $isoLanguages
 */
class Functions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'function';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('function_id, function_title', 'required'),
			array('function_id', 'numerical', 'integerOnly'=>true),
			array('function_title', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('function_id, function_title', 'safe', 'on'=>'search'),
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
			'contactFunctions' => array(self::HAS_MANY, 'ContactFunction', 'function_id'),
			'isoLanguages' => array(self::MANY_MANY, 'IsoLanguage', 'function_translation(function_id, lang_iso)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'function_id' => 'Function',
			'function_title' => 'Function Title',
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

		$criteria->compare('function_id',$this->function_id);
		$criteria->compare('function_title',$this->function_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Functions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
