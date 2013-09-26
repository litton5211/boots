<?php

/**
 * This is the model class for table "webconfig".
 *
 * The followings are the available columns in table 'webconfig':
 * @property integer $id
 * @property string $webhost
 * @property string $webname
 * @property string $webkeywords
 * @property string $webdescription
 * @property string $webbeian
 * @property string $webuser
 * @property string $webcopyright
 * @property integer $ismsgAudit
 */
class Webconfig extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Webconfig the static model class
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
		return '{{webconfig}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		    array('webuser,password','required'),
			array('ismsgAudit', 'numerical', 'integerOnly'=>true),
			array('webhost, webname, webkeywords, webbeian, webuser', 'length', 'max'=>255),
			array('webdescription, webcopyright', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, webhost, webname, webkeywords, webdescription, webbeian, webuser, webcopyright, ismsgAudit', 'safe', 'on'=>'search'),
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
			'webhost' => '网站域名',
			'webname' => '网站名称',
			'webkeywords' => '关键词',
			'webdescription' => '网站说明',
			'webbeian' => '备案号',
			'webuser' => '管理员名称',
		    'password'=> '管理员密码',
			'webcopyright' => '版权信息',
			'ismsgAudit' => '留言需审核',
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
		$criteria->compare('webhost',$this->webhost,true);
		$criteria->compare('webname',$this->webname,true);
		$criteria->compare('webkeywords',$this->webkeywords,true);
		$criteria->compare('webdescription',$this->webdescription,true);
		$criteria->compare('webbeian',$this->webbeian,true);
		$criteria->compare('webuser',$this->webuser,true);
		$criteria->compare('webcopyright',$this->webcopyright,true);
		$criteria->compare('ismsgAudit',$this->ismsgAudit);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}