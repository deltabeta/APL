<?php

/**
 * This is the model class for table "list".
 *
 * The followings are the available columns in table 'list':
 * @property integer $list_id
 * @property integer $list_user
 * @property string $list_name
 * @property string $ist_notes
 *
 * The followings are the available model relations:
 * @property CreditHistory[] $creditHistories
 * @property User $listUser
 * @property Contact[] $contacts
 * @property Press[] $presses
 */
class ListContact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('list_user, list_name, ist_notes', 'required'),
			array('list_user', 'numerical', 'integerOnly'=>true),
			array('list_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('list_id, list_user, list_name, ist_notes', 'safe', 'on'=>'search'),
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
			'creditHistories' => array(self::HAS_MANY, 'CreditHistory', 'ch_target_id'),
			'listUser' => array(self::BELONGS_TO, 'User', 'list_user'),
			'contacts' => array(self::MANY_MANY, 'Contact', 'list_contact(list_id, contact_id)'),
			'presses' => array(self::HAS_MANY, 'Press', 'list_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'list_id' => 'List',
			'list_user' => 'List User',
			'list_name' => 'List Title ',
			'ist_notes' => 'Ist Notes',
                      
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

		$criteria->compare('list_id',$this->list_id);
		$criteria->compare('list_user',$this->list_user);
		$criteria->compare('list_name',$this->list_name,true);
		$criteria->compare('ist_notes',$this->ist_notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function  nbcontacts(){
            
            $contacts = $this->listUser;
            print_r($contacts);
      return    $nb = (string)count($contacts)      ;
          
           // return $nb;
        }
        	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListContact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function behaviors()
{
    return array(
        'activerecord-relation'=>array(
            'class'=>'ext.yiiext.behaviors.activerecord-relation.EActiveRecordRelationBehavior',
    ));
}
}
