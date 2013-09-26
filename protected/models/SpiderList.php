<?php

/**
 * This is the model class for table "{{spider_list}}".
 *
 * The followings are the available columns in table '{{spider_list}}':
 * @property integer $id
 * @property string $site_id
 * @property string $list_url
 * @property string $list_name
 * @property string $cata_name
 * @property integer $last_update_time
 */
class SpiderList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SpiderList the static model class
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
		return '{{spider_list}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('last_update_time', 'numerical', 'integerOnly'=>true),
			array('site_id, list_url, list_name, cata_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, list_url, list_name, cata_name, last_update_time', 'safe', 'on'=>'search'),
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
			'list_url' => '列表url',
			'list_name' => '列表名称',
			'cata_name' => 'Cata Name',
			'last_update_time' => '最后更新时间',
			'add_time' => '添加时间',
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
		$criteria->compare('list_url',$this->list_url,true);
		$criteria->compare('list_name',$this->list_name,true);
		$criteria->compare('cata_name',$this->cata_name,true);
		$criteria->compare('last_update_time',$this->last_update_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}