<?php

/**
 * This is the model class for table "{{user_login}}".
 *
 * The followings are the available columns in table '{{user_login}}':
 * @property integer $id
 * @property integer $user_id
 * @property string $login_time
 * @property string $token
 * @property string $expire_time
 * @property string $last_login_ip
 * @property integer $status
 * @property string $accessToken
 */
class UserLogin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserLogin the static model class
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
		return '{{user_login}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, token', 'required'),
			array('user_id, status', 'numerical', 'integerOnly'=>true),
			array('login_time, expire_time', 'length', 'max'=>10),
			array('token', 'length', 'max'=>32),
			array('last_login_ip', 'length', 'max'=>15),
			array('accessToken', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, login_time, token, expire_time, last_login_ip, status, accessToken', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'login_time' => 'Login Time',
			'token' => 'Token',
			'expire_time' => 'Expire Time',
			'last_login_ip' => 'Last Login Ip',
			'status' => 'Status',
			'accessToken' => 'Access Token',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('login_time',$this->login_time,true);
		$criteria->compare('token',$this->token,true);
		$criteria->compare('expire_time',$this->expire_time,true);
		$criteria->compare('last_login_ip',$this->last_login_ip,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('accessToken',$this->accessToken,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}