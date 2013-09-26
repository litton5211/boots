<?php

/**
 * This is the model class for table "sorts".
 *
 * The followings are the available columns in table 'sorts':
 * @property integer $sortid
 * @property string $SortName
 * @property string $SortEnName
 * @property integer $SortFID
 * @property integer $SortType
 * @property string $SortKeywords
 * @property string $SortDescription
 * @property string $SortPic
 * @property integer $SortOrder
 * @property string $SortListTemplates
 * @property string $SortShowTemplates
 * @property integer $SortIsNav
 * @property integer $SortIsList
 * @property string $SortAddtime
 * @property string $SortContent
 * @property string $SortDiyField
 *
 * The followings are the available model relations:
 */
class Sorts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Sorts the static model class
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
		return '{{sorts}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SortName,SortType','required'),
			array('SortFID, SortType, SortOrder, SortIsNav', 'numerical', 'integerOnly'=>true),
			array('SortName, SortUrl', 'length', 'max'=>255),
			array('SortContent', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sortid, SortName, SortFID, SortType, SortOrder, SortIsNav, SortContent', 'safe', 'on'=>'search'),
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
			'sortid' => 'Sortid',
			'SortName' => '栏目名称',
			'SortFID' => '父级栏目',
			'SortType' => '栏目类型',
			'SortOrder' => '排序数字(越小越前)',
			'SortUrl' => '外部Url',
			'SortIsNav' => '是否显示在主导航',
			'SortContent' => '栏目简介',
		);
	}
	
	public function getTypeOptions() {		
		return array(''=>'请选择','1'=>'单页简介','新闻文章','图片产品','外部栏目');
	}
	
}