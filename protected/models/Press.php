<?php

/**
 * This is the model class for table "press".
 *
 * The followings are the available columns in table 'press':
 * @property integer $press_id
 * @property integer $press_user
 * @property integer $list_id
 * @property string $press_subject
 * @property string $press_content
 * @property string $press_status
 * @property integer $press_contacts_mailed
 * @property integer $press_contacts_failed
 * @property integer $press_date
 * @property string $press_date_started
 * @property string $press_date_completed
 * @property string $press_sender_name
 * @property string $press_sender_email
 * @property string $press_replyto_name
 * @property string $press_replyto_email
 * @property string $press_file_1
 * @property string $press_file_2
 * @property string $press_file_3
 * @property integer $press_pub_abc
 * @property integer $press_pub_linkedin
 * @property integer $press_pub_facebook
 * @property integer $press_pub_twitter
 * @property string $hours
 *
 * The followings are the available model relations:
 * @property List $list
 * @property User $pressUser
 * @property PressRun $pressRun
 */
class Press extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'press';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('press_subject,list_id, press_sender_name, press_sender_email, press_replyto_name, press_replyto_email', 'required'),
            array('press_user, list_id, press_contacts_mailed, press_contacts_failed, press_pub_abc, press_pub_linkedin, press_pub_facebook, press_pub_twitter', 'numerical', 'integerOnly' => true),
            array('press_subject, press_sender_name, press_sender_email, press_replyto_name, press_replyto_email', 'length', 'max' => 255),
            array('press_status', 'length', 'max' => 1),
            array('press_date_completed', 'safe'),
            array('press_sender_email,press_replyto_email', 'email'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('press_id, press_user, list_id, press_subject, press_content, press_status, press_contacts_mailed, press_contacts_failed, press_date, press_date_started, press_date_completed, press_sender_name, press_sender_email, press_replyto_name, press_replyto_email,  press_pub_abc, press_pub_linkedin, press_pub_facebook, press_pub_twitter', 'safe', 'on' => 'search'),
            array('press_file_1', 'file', 'types' => 'jpg, gif, png, pdf' ,'allowEmpty' => true),
            array('press_file_2', 'file', 'types' => 'jpg, gif, png, pdf', 'allowEmpty' => true),
            array('press_file_3', 'file', 'types' => 'jpg, gif, png, pdf', 'allowEmpty' => true),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'list' => array(self::BELONGS_TO, 'List', 'list_id'),
            'pressUser' => array(self::BELONGS_TO, 'User', 'press_user'),
            'pressRun' => array(self::HAS_ONE, 'PressRun', 'press_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'press_id' => 'Press',
            'press_user' => 'Press User',
            'list_id' => 'List',
            'press_subject' => 'Press Subject',
            'press_content' => 'Press Content',
            'press_status' => 'Press Status',
            'press_contacts_mailed' => 'Press Contacts Mailed',
            'press_contacts_failed' => 'Press Contacts Failed',
            'press_date' => 'Press Date',
            'press_date_started' => 'Press Date Started',
            'press_date_completed' => 'Press Date Completed',
            'press_sender_name' => 'Press Sender Name',
            'press_sender_email' => 'Press Sender Email',
            'press_replyto_name' => 'Press Replyto Name',
            'press_replyto_email' => 'Press Replyto Email',
            'press_file_1' => 'Press File 1',
            'press_file_2' => 'Press File 2',
            'press_file_3' => 'Press File 3',
            'press_pub_abc' => 'Press Pub Abc',
            'press_pub_linkedin' => 'Press Pub Linkedin',
            'press_pub_facebook' => 'Press Pub Facebook',
            'press_pub_twitter' => 'Press Pub Twitter',
            'hours' => 'hours',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('press_id', $this->press_id);
        $criteria->compare('press_user', $this->press_user);
        $criteria->compare('list_id', $this->list_id);
        $criteria->compare('press_subject', $this->press_subject, true);
        $criteria->compare('press_content', $this->press_content, true);
        $criteria->compare('press_status', $this->press_status, true);
        $criteria->compare('press_contacts_mailed', $this->press_contacts_mailed);
        $criteria->compare('press_contacts_failed', $this->press_contacts_failed);
        $criteria->compare('press_date', $this->press_date);
        $criteria->compare('press_date_started', $this->press_date_started, true);
        $criteria->compare('press_date_completed', $this->press_date_completed, true);
        $criteria->compare('press_sender_name', $this->press_sender_name, true);
        $criteria->compare('press_sender_email', $this->press_sender_email, true);
        $criteria->compare('press_replyto_name', $this->press_replyto_name, true);
        $criteria->compare('press_replyto_email', $this->press_replyto_email, true);
        $criteria->compare('press_pub_abc', $this->press_pub_abc);
        $criteria->compare('press_pub_linkedin', $this->press_pub_linkedin);
        $criteria->compare('press_pub_facebook', $this->press_pub_facebook);
        $criteria->compare('press_pub_twitter', $this->press_pub_twitter);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Press the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function GetPressName() {

        $listid = $this->list_id;

        $listname = ListContact::model()->findByPk($listid);
        return $listname->list_name;
    }

}
