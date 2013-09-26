<?php

/**
 * This is the model class for table "{{client_info}}".
 *
 * The followings are the available columns in table '{{client_info}}':
 * @property string $client_id
 * @property string $client_code
 * @property integer $client_type
 * @property string $client_pwd
 * @property integer $status
 * @property integer $prof_type
 * @property integer $province
 * @property integer $city
 * @property integer $department
 * @property string $address
 * @property string $create_time
 * @property integer $client_type_sort
 * @property integer $prof_type_sort
 */
class ClientInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ClientInfo the static model class
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
		return '{{client_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_id, client_pwd, create_time,client_type,prof_type', 'required'),
			array('client_type, status, prof_type, province, city, department, client_type_sort, prof_type_sort,client_code', 'numerical', 'integerOnly'=>true),
			array('client_id', 'length', 'max'=>20),
			array('province', 'length', 'min'=>6,'max'=>6),
			array('client_code', 'length', 'min'=>2,'max'=>2),
			array('client_pwd', 'length', 'max'=>32),
			array('address', 'length', 'max'=>255),
			array('create_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('client_id, client_code, client_type, client_pwd, status, prof_type, province, city, department, address, create_time, client_type_sort, prof_type_sort', 'safe', 'on'=>'search'),
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
			'client_id' => '客户端ID',
			'client_code' => '接入单位编码',
			'client_type' => '类型编码',
			'client_pwd' => '设备密码',
			'status' => '客户端状态',
			'prof_type' => '所属行业',
			'province' => '省份',
			'city' => '城市',
			'department' => '区县',
			'address' => '地址',
			'create_time' => '创建时间',
			'client_type_sort' => '类型',
			'prof_type_sort' => '建设主体',
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

		$criteria->compare('client_id',$this->client_id,true);
		$criteria->compare('client_code',$this->client_code,true);
		$criteria->compare('client_type',$this->client_type);
		$criteria->compare('client_pwd',$this->client_pwd,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('prof_type',$this->prof_type);
		$criteria->compare('province',$this->province);
		$criteria->compare('city',$this->city);
		$criteria->compare('department',$this->department);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('client_type_sort',$this->client_type_sort);
		$criteria->compare('prof_type_sort',$this->prof_type_sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static function domake_clientid($pw_length)
	{
		 $low_ascii_bound=48;
		 $upper_ascii_bound=57;
		 $notuse=array(58,59,60,61,62,63,64,73,79,91,92,93,94,95,96,108,111);
		
		 while($i<$pw_length){
		  $randnum=mt_rand($low_ascii_bound,$upper_ascii_bound);
		  if(!in_array($randnum,$notuse)){
		   
		   if ($i==0 && $randnum==0) {
		    
		    $i=0;
		    $password1='';
		    domake_clientid(4);
		   }
		
		   $password1=$password1.chr($randnum);
		   $i++;
		  }
		 }
		return $password1;
	}
}