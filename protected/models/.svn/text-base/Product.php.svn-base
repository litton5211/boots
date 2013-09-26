<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property string $id
 * @property integer $brand
 * @property string $name
 * @property string $foreign_name
 * @property string $price
 * @property string $specification
 * @property string $time_to_market
 * @property string $pic_url
 * @property string $apply_crowd
 * @property string $apply_part
 * @property string $content
 * @property integer $like_count
 * @property integer $collect_count
 * @property integer $comment_count
 * @property integer $share_count
 * @property integer $last_edit_uid
 * @property integer $last_edit_time
 * @property integer $from_src
 * @property string $from_url
 * @property string $from_pid
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return '{{product}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('like_count, collect_count, comment_count, share_count, last_edit_uid, last_edit_time, from_src', 'numerical', 'integerOnly'=>true),
			array('brand,name, foreign_name, pic_url, apply_crowd, apply_part, from_url', 'length', 'max'=>255),
			array('price', 'length', 'max'=>10),
			array('specification, time_to_market, from_pid', 'length', 'max'=>50),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, brand, name, foreign_name, price, specification, time_to_market, pic_url, apply_crowd, apply_part, content, like_count, collect_count, comment_count, share_count, last_edit_uid, last_edit_time, from_src, from_url, from_pid', 'safe', 'on'=>'search'),
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
			'brand' => 'Brand',
			'name' => 'Name',
			'foreign_name' => 'Foreign Name',
			'price' => 'Price',
			'specification' => 'Specification',
			'time_to_market' => 'Time To Market',
			'pic_url' => 'Pic Url',
			'apply_crowd' => 'Apply Crowd',
			'apply_part' => 'Apply Part',
			'content' => 'Content',
			'like_count' => 'Like Count',
			'collect_count' => 'Collect Count',
			'comment_count' => 'Comment Count',
			'share_count' => 'Share Count',
			'last_edit_uid' => 'Last Edit Uid',
			'last_edit_time' => 'Last Edit Time',
			'from_src' => 'From Src',
			'from_url' => 'From Url',
			'from_pid' => 'From Pid',
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
		$criteria->compare('brand',$this->brand);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('foreign_name',$this->foreign_name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('specification',$this->specification,true);
		$criteria->compare('time_to_market',$this->time_to_market,true);
		$criteria->compare('pic_url',$this->pic_url,true);
		$criteria->compare('apply_crowd',$this->apply_crowd,true);
		$criteria->compare('apply_part',$this->apply_part,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('like_count',$this->like_count);
		$criteria->compare('collect_count',$this->collect_count);
		$criteria->compare('comment_count',$this->comment_count);
		$criteria->compare('share_count',$this->share_count);
		$criteria->compare('last_edit_uid',$this->last_edit_uid);
		$criteria->compare('last_edit_time',$this->last_edit_time);
		$criteria->compare('from_src',$this->from_src);
		$criteria->compare('from_url',$this->from_url,true);
		$criteria->compare('from_pid',$this->from_pid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}