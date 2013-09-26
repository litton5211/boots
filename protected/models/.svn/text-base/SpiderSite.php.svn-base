<?php

/**
 * This is the model class for table "{{spider_site}}".
 *
 * The followings are the available columns in table '{{spider_site}}':
 * @property integer $id
 * @property string $site_name
 * @property string $list_format
 * @property string $page_format
 * @property integer $homepage
 */
class SpiderSite extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SpiderSite the static model class
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
		return '{{spider_site}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('homepage,site_name, list_format, page_format', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_name, list_format, page_format, homepage', 'safe', 'on'=>'search'),
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
			'site_name' => '站点名称',
			'list_format' => '列表匹配',
			'page_format' => '页面匹配',
			'homepage' => '网站入口',
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
		$criteria->compare('site_name',$this->site_name,true);
		$criteria->compare('list_format',$this->list_format,true);
		$criteria->compare('page_format',$this->page_format,true);
		$criteria->compare('homepage',$this->homepage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}