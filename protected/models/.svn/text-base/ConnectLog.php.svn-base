<?php

/**
 * This is the model class for table "{{connect_log}}".
 *
 * The followings are the available columns in table '{{connect_log}}':
 * @property integer $id
 * @property string $log_item
 * @property integer $log_type
 * @property string $connect_with
 * @property integer $connect_type
 * @property integer $connect_mode
 * @property string $create_time
 * @property string $content
 */
class ConnectLog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConnectLog the static model class
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
		return '{{connect_log}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('connect_with, create_time', 'required'),
			array('log_type, connect_type, connect_mode', 'numerical', 'integerOnly'=>true),
			array('log_item, connect_with', 'length', 'max'=>20),
			array('create_time', 'length', 'max'=>11),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, log_item, log_type, connect_with, connect_type, connect_mode, create_time, content', 'safe', 'on'=>'search'),
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
			'log_item' => '客户端ID',
			'log_type' => '记录类型',
			'connect_with' => '通讯对象ID',
			'connect_type' => '通信方式',
			'connect_mode' => '通信类型',
			'create_time' => '通讯时间',
			'content' => '通信内容',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('log_item',$this->log_item,true);
		$criteria->compare('log_type',$this->log_type);
		$criteria->compare('connect_with',$this->connect_with,true);
		$criteria->compare('connect_type',$this->connect_type);
		$criteria->compare('connect_mode',$this->connect_mode);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('content',$this->content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}