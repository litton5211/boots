<?php

/**
 * This is the model class for table "{{area}}".
 *
 * The followings are the available columns in table '{{area}}':
 * @property integer $code
 * @property integer $belong_code
 * @property string $name
 */
class Area extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Area the static model class
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
		return '{{area}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, belong_code, name', 'required'),
			array('code, belong_code', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('code, belong_code, name', 'safe', 'on'=>'search'),
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
			'code' => 'Code',
			'belong_code' => 'Belong Code',
			'name' => 'Name',
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

		$criteria->compare('code',$this->code);
		$criteria->compare('belong_code',$this->belong_code);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static  function getProvince()
	{
		$areas = Area::model()->findAllByAttributes(array('belong_code'=>100000));
		$areaList = array(''=>'请选择');
		foreach ($areas as $area){
			$areaList[$area->code]= $area->name;
		}

		return $areaList;
	}
	public static  function getAddName($code)
	{
		$areas = Area::model()->findByPk($code);
		if ($areas){
			return $areas->name;
		}else{
			return "";
		}

	}
}