<?php

/**
 * This is the model class for table "{{join_activity}}".
 *
 * The followings are the available columns in table '{{join_activity}}':
 * @property string $id
 * @property integer $userid
 * @property integer $activity_id
 * @property string $name
 * @property string $adress
 * @property string $tel
 * @property integer $create_time
 */
class JoinActivity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JoinActivity the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{join_activity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, activity_id', 'required'),
			array('userid, activity_id, create_time', 'numerical', 'integerOnly'=>true),
			array('name, adress', 'length', 'max'=>255),
			array('tel', 'length', 'max'=>24),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userid, activity_id, name, status,is_share,adress, tel, create_time', 'safe', 'on'=>'search'),
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
			'activiy'=>array(self::BELONGS_TO, 'Activity', 'activity_id'),
			'join_user'=>array(self::BELONGS_TO  , 'User', 'userid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userid' => 'Userid',
			'activity_id' => 'Activity',
			'name' => 'Name',
			'adress' => 'Adress',
			'tel' => 'Tel',
			'create_time' => 'Create Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('userid',$this->userid);
		$criteria->compare('activity_id',$this->activity_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('adress',$this->adress,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}