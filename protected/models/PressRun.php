<?php

/**
 * This is the model class for table "press_run".
 *
 * The followings are the available columns in table 'press_run':
 * @property integer $press_id
 * @property integer $contact_id
 * @property string $mandrill_message_id
 * @property string $mandrill_status
 *
 * The followings are the available model relations:
 * @property Contact $contact
 * @property Press $press
 */
class PressRun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'press_run';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('press_id, contact_id, mandrill_message_id, mandrill_status', 'required'),
			array('press_id, contact_id', 'numerical', 'integerOnly'=>true),
			array('mandrill_message_id, mandrill_status', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('press_id, contact_id, mandrill_message_id, mandrill_status', 'safe', 'on'=>'search'),
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
			'contact' => array(self::BELONGS_TO, 'Contact', 'contact_id'),
			'press' => array(self::BELONGS_TO, 'Press', 'press_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'press_id' => 'Press',
			'contact_id' => 'Contact',
			'mandrill_message_id' => 'Mandrill Message',
			'mandrill_status' => 'Mandrill Status',
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

		$criteria->compare('press_id',$this->press_id);
		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('mandrill_message_id',$this->mandrill_message_id,true);
		$criteria->compare('mandrill_status',$this->mandrill_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PressRun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
