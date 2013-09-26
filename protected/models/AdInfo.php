<?php

/**
 * This is the model class for table "{{ad_info}}".
 *
 * The followings are the available columns in table '{{ad_info}}':
 * @property string $id
 * @property integer $object_id
 * @property integer $object_type
 * @property string $title
 * @property integer $publish_time
 * @property string $pic_url
 * @property integer $last_update_time
 * @property integer $status
 */
class AdInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdInfo the static model class
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
		return '{{ad_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('object_id, object_type, title', 'required'),
			array('object_id, object_type, publish_time, last_update_time, status', 'numerical', 'integerOnly'=>true),
			array('pic_url', 'length', 'max'=>225),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, object_id, object_type, title, publish_time, pic_url, last_update_time, status', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'object_id' => 'Object',
			'object_type' => 'Object Type',
			'title' => 'Title',
			'publish_time' => 'Publish Time',
			'pic_url' => 'Pic Url',
			'last_update_time' => 'Last Update Time',
			'status' => 'Status',
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
		$criteria->compare('object_id',$this->object_id);
		$criteria->compare('object_type',$this->object_type);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('publish_time',$this->publish_time);
		$criteria->compare('pic_url',$this->pic_url,true);
		$criteria->compare('last_update_time',$this->last_update_time);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}