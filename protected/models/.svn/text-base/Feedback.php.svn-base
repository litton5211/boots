<?php

/**
 * This is the model class for table "{{feedback}}".
 *
 * The followings are the available columns in table '{{feedback}}':
 * @property string $id
 * @property integer $userid
 * @property integer $type
 * @property integer $object_type
 * @property integer $object_id
 * @property integer $create_time
 */
class Feedback extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feedback the static model class
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
		return '{{feedback}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, type, object_type, object_id', 'required'),
			array('userid, type, object_type, object_id, create_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userid, type, object_type, object_id, create_time', 'safe', 'on'=>'search'),
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
			'userid' => 'Userid',
			'type' => 'Type',
			'object_type' => 'Object Type',
			'object_id' => 'Object',
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
		$criteria->compare('type',$this->type);
		$criteria->compare('object_type',$this->object_type);
		$criteria->compare('object_id',$this->object_id);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static function isFeedback($uid,$type,$object_type,$object_id)
	{
		return Feedback::model()->find('userid=:userid and type=:type and object_type=:object and object_id=:object',
							array(':userid'=>$uid,':type'=>$type,':object_type'=>$object_type,'object_id'=>$object_id));
	}
}