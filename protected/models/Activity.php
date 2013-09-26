<?php

/**
 * This is the model class for table "{{activity}}".
 *
 * The followings are the available columns in table '{{activity}}':
 * @property string $id
 * @property integer $op_id
 * @property string $title
 * @property string $content
 * @property integer $create_time
 * @property integer $begin_time
 * @property integer $end_time
 * @property integer $quota_num
 * @property string $pic_url
 * @property integer $product_id
 * @property integer $like_count
 * @property integer $collect_count
 * @property integer $comment_count
 */
class Activity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Activity the static model class
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
		return '{{activity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('op_id', 'required'),
			array('op_id, create_time, begin_time, end_time, quota_num, product_id, like_count, collect_count, comment_count', 'numerical', 'integerOnly'=>true),
			array('title, pic_url', 'length', 'max'=>255),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, op_id, title, content, create_time, begin_time, end_time, quota_num, pic_url, product_id, like_count, collect_count, comment_count', 'safe', 'on'=>'search'),
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
			'op_id' => '管理员',
			'title' => '活动标题',
			'content' => '活动详情',
			'create_time' => '创建时间',
			'begin_time' => '活动开始时间',
			'end_time' => '活动结束时间',
			'quota_num' => '活动名额',
			'pic_url' => '活动标题照片',
			'product_id' => '关联产品',
			'like_count' => '喜欢数',
			'collect_count' => '收藏数',
			'comment_count' => '评论数',
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
		$criteria->compare('op_id',$this->op_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('begin_time',$this->begin_time);
		$criteria->compare('end_time',$this->end_time);
		$criteria->compare('quota_num',$this->quota_num);
		$criteria->compare('pic_url',$this->pic_url,true);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('like_count',$this->like_count);
		$criteria->compare('collect_count',$this->collect_count);
		$criteria->compare('comment_count',$this->comment_count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}