<?php

/**
 * This is the model class for table "{{product_price_range}}".
 *
 * The followings are the available columns in table '{{product_price_range}}':
 * @property string $id
 * @property integer $range_f
 * @property integer $range_t
 * @property integer $create_time
 * @property integer $num
 */
class ProductPriceRange extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductPriceRange the static model class
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
		return '{{product_price_range}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('range_f, range_t', 'required'),
			array('range_f, range_t, create_time, num', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, range_f, range_t, create_time, num', 'safe', 'on'=>'search'),
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
			'range_f' => 'Range F',
			'range_t' => 'Range T',
			'create_time' => 'Create Time',
			'num' => 'Num',
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
		$criteria->compare('range_f',$this->range_f);
		$criteria->compare('range_t',$this->range_t);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('num',$this->num);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}