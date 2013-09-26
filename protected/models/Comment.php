<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property string $id
 * @property integer $comment_type
 * @property integer $comment_refer_id
 * @property string $comment
 * @property integer $comment_time
 * @property string $comment_ip
 * @property integer $comment_status
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
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
		return 'comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comment_refer_id, comment_time', 'required'),
			array('comment_type, comment_refer_id, comment_time, comment_status', 'numerical', 'integerOnly'=>true),
			array('comment_ip', 'length', 'max'=>15),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, comment_type, comment_refer_id, comment, comment_time, comment_ip, comment_status', 'safe', 'on'=>'search'),
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
			'comment_type' => 'Comment Type',
			'comment_refer_id' => 'Comment Refer',
			'comment' => 'Comment',
			'comment_time' => 'Comment Time',
			'comment_ip' => 'Comment Ip',
			'comment_status' => 'Comment Status',
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
		$criteria->compare('comment_type',$this->comment_type);
		$criteria->compare('comment_refer_id',$this->comment_refer_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('comment_time',$this->comment_time);
		$criteria->compare('comment_ip',$this->comment_ip,true);
		$criteria->compare('comment_status',$this->comment_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}