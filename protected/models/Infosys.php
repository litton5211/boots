<?php

/**
 * This is the model class for table "{{infosys}}".
 *
 * The followings are the available columns in table '{{infosys}}':
 * @property integer $id
 * @property string $sys_name
 * @property string $sys_ip
 * @property string $sys_desc
 * @property integer $status
 * @property integer $create_time
 * @property integer $create_userid
 * @property integer $operator_userid
 */
class Infosys extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Infosys the static model class
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
		return '{{infosys}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sys_name', 'required'),
			array('status, create_time, create_userid, operator_userid', 'numerical', 'integerOnly'=>true),
			array('sys_name', 'length', 'max'=>128),
			array('sys_ip', 'length', 'max'=>15),
			array('sys_desc', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sys_name, sys_ip, sys_desc, status, create_time, create_userid, operator_userid', 'safe', 'on'=>'search'),
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
			'sys_name' => '模块名称',
			'sys_ip' => '服务器IP',
			'sys_desc' => '模块描述',
			'status' => '运行状态',
			'create_time' => '创建时间',
			'create_userid' => '创建人',
			'operator_userid' => '维护人',
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
		$criteria->compare('sys_name',$this->sys_name,true);
		$criteria->compare('sys_ip',$this->sys_ip,true);
		$criteria->compare('sys_desc',$this->sys_desc,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('create_userid',$this->create_userid);
		$criteria->compare('operator_userid',$this->operator_userid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}