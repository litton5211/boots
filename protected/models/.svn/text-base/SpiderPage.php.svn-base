<?php

/**
 * This is the model class for table "{{spider_page}}".
 *
 * The followings are the available columns in table '{{spider_page}}':
 * @property integer $id
 * @property string $site_id
 * @property string $list_id
 * @property string $page_name
 * @property string $page_url
 * @property integer $last_update_time
 * @property integer $status
 */
class SpiderPage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SpiderPage the static model class
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
		return '{{spider_page}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('last_update_time, status', 'numerical', 'integerOnly'=>true),
			array('site_id, list_id, page_name, page_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, list_id, page_name, page_url, last_update_time, status', 'safe', 'on'=>'search'),
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
			'site_id' => 'Site',
			'list_id' => 'List',
			'page_name' => 'Page Name',
			'page_url' => 'Page Url',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('site_id',$this->site_id,true);
		$criteria->compare('list_id',$this->list_id,true);
		$criteria->compare('page_name',$this->page_name,true);
		$criteria->compare('page_url',$this->page_url,true);
		$criteria->compare('last_update_time',$this->last_update_time);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}