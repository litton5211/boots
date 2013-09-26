<?php

/**
 * This is the model class for table "{{messge}}".
 *
 * The followings are the available columns in table '{{messge}}':
 * @property string $id
 * @property integer $f_userid
 * @property integer $t_userid
 * @property string $content
 * @property integer $create_time
 */
class Messge extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Messge the static model class
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
		return '{{messge}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('f_userid, t_userid, content', 'required'),
			array('f_userid, t_userid, create_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, f_userid, t_userid, content, create_time', 'safe', 'on'=>'search'),
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
			'f_userid' => 'F Userid',
			't_userid' => 'T Userid',
			'content' => 'Content',
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
		$criteria->compare('f_userid',$this->f_userid);
		$criteria->compare('t_userid',$this->t_userid);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}