<?php

/**
 * This is the model class for table "user_oauth".
 *
 * The followings are the available columns in table 'user_oauth':
 * @property integer $user_id
 * @property string $provider
 * @property string $identifier
 * @property string $profile_cache
 * @property string $session_data
 */
class UserOauth extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_oauth';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, provider, identifier', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('provider', 'length', 'max'=>45),
			array('identifier', 'length', 'max'=>64),
			array('profile_cache, session_data', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, provider, identifier, profile_cache, session_data', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'provider' => 'Provider',
			'identifier' => 'Identifier',
			'profile_cache' => 'Profile Cache',
			'session_data' => 'Session Data',
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
		$criteria->compare('provider',$this->provider,true);
		$criteria->compare('identifier',$this->identifier,true);
		$criteria->compare('profile_cache',$this->profile_cache,true);
		$criteria->compare('session_data',$this->session_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserOauth the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
