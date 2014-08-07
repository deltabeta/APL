<?php

/**
 * This is the model class for table "user_package".
 *
 * The followings are the available columns in table 'user_package':
 * @property integer $user_id
 * @property integer $credit_package_id
 * @property integer $voucher_code
 * @property integer $utype_credits
 * @property string $utype_expires
 * @property string $utype_notes
 *
 * The followings are the available model relations:
 * @property CreditPackage $creditPackage
 */
class UserPackage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_package';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, credit_package_id, utype_credits, utype_expires, utype_notes', 'required'),
			array('user_id, credit_package_id, voucher_code, utype_credits', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, credit_package_id, voucher_code, utype_credits, utype_expires, utype_notes', 'safe', 'on'=>'search'),
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
			'creditPackage' => array(self::BELONGS_TO, 'CreditPackage', 'credit_package_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'credit_package_id' => 'Credit Package',
			'voucher_code' => 'Voucher Code',
			'utype_credits' => 'Utype Credits',
			'utype_expires' => 'Utype Expires',
			'utype_notes' => 'Utype Notes',
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
		$criteria->compare('credit_package_id',$this->credit_package_id);
		$criteria->compare('voucher_code',$this->voucher_code);
		$criteria->compare('utype_credits',$this->utype_credits);
		$criteria->compare('utype_expires',$this->utype_expires,true);
		$criteria->compare('utype_notes',$this->utype_notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserPackage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
