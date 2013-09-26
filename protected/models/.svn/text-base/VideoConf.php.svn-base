<?php

/**
 * This is the model class for table "{{video_conf}}".
 *
 * The followings are the available columns in table '{{video_conf}}':
 * @property integer $id
 * @property string $username
 * @property string $pwd
 * @property string $token
 * @property integer $last_update_time
 */
class VideoConf extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VideoConf the static model class
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
		return '{{video_conf}}';
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
			array('username, pwd, token', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, pwd, token, last_update_time', 'safe', 'on'=>'search'),
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
			'username' => '视频后台用户名',
			'pwd' => 'Pwd',
			'token' => 'Token',
			'last_update_time' => '最后更新日期',
		);
	}


	public static function getConfig()
	{
		return VideoConf::model()->findByPk(1);
	}
	public static function getNewTokenConf()
	{
		$conf = VideoConf::model()->findByPk(1);
		$params['email']='xdl5378@163.com';
		$params['passwd']='460052';
		$response = CommonUse::RestRequest("http://api.aliyun.video-tx.com/login",$params,true);
		if ($response!=false){
			$conf->token = $response['token'];
			$conf->last_update_time = time();
			$conf->save();
		}
		return $conf;
	}
}