<?php

/**
 * This is the model class for table "web_menu".
 *
 * The followings are the available columns in table 'web_menu':
 * @property integer $menu_id
 * @property string $menu_title
 * @property string $menu_title_c
 * @property integer $menu_parent
 * @property string $menu_path
 * @property string $menu_header
 * @property string $menu_header_c
 * @property integer $menu_order
 * @property string $menu_type
 * @property string $menu_online
 * @property string $menu_content
 * @property integer $menu_lang_country
 * @property integer $menu_lang_group
 * @property string $menu_added
 */
class WebMenu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'web_menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_title, menu_title_c, menu_header, menu_header_c, menu_content, menu_lang_country, menu_lang_group, menu_added', 'required'),
			array('menu_parent, menu_order, menu_lang_country, menu_lang_group', 'numerical', 'integerOnly'=>true),
			array('menu_title, menu_title_c, menu_path, menu_header, menu_header_c, menu_online', 'length', 'max'=>255),
			array('menu_type', 'length', 'max'=>17),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('menu_id, menu_title, menu_title_c, menu_parent, menu_path, menu_header, menu_header_c, menu_order, menu_type, menu_online, menu_content, menu_lang_country, menu_lang_group, menu_added', 'safe', 'on'=>'search'),
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
			'menu_id' => 'Menu',
			'menu_title' => 'Menu Title',
			'menu_title_c' => 'Menu Title C',
			'menu_parent' => 'Menu Parent',
			'menu_path' => 'Menu Path',
			'menu_header' => 'Menu Header',
			'menu_header_c' => 'Menu Header C',
			'menu_order' => 'Menu Order',
			'menu_type' => 'Menu Type',
			'menu_online' => 'Menu Online',
			'menu_content' => 'Menu Content',
			'menu_lang_country' => 'Menu Lang Country',
			'menu_lang_group' => 'Menu Lang Group',
			'menu_added' => 'Menu Added',
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

		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('menu_title',$this->menu_title,true);
		$criteria->compare('menu_title_c',$this->menu_title_c,true);
		$criteria->compare('menu_parent',$this->menu_parent);
		$criteria->compare('menu_path',$this->menu_path,true);
		$criteria->compare('menu_header',$this->menu_header,true);
		$criteria->compare('menu_header_c',$this->menu_header_c,true);
		$criteria->compare('menu_order',$this->menu_order);
		$criteria->compare('menu_type',$this->menu_type,true);
		$criteria->compare('menu_online',$this->menu_online,true);
		$criteria->compare('menu_content',$this->menu_content,true);
		$criteria->compare('menu_lang_country',$this->menu_lang_country);
		$criteria->compare('menu_lang_group',$this->menu_lang_group);
		$criteria->compare('menu_added',$this->menu_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WebMenu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
