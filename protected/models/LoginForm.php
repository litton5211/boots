<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $oldpwd;
	public $newpwd;
	public $repeatpwd;
	public $rememberMe;
	public $status;
	public $role_id;
	public $verifyCode;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required','on'=>'login'),
			array('verifyCode', 'captcha', 'on'=>'login', 'allowEmpty'=> !extension_loaded('gd')),
			
			
			array('oldpwd, newpwd,repeatpwd', 'required','on'=>'changePwd'),
			//原密码正确
			array('oldpwd', 'checkPwd','on' => 'changePwd'),
			//重复密码一致
			 array('repeatpwd', 'compare','compareAttribute'=>'newpwd','on'=>'changePwd'),
			
			//新增用户
			array('username, password,repeatpwd,status,role_id', 'required','on'=>'create'),
			array('repeatpwd', 'compare','compareAttribute'=>'password','on'=>'create','message'=>'两次输入的密码不一致'),
			array('username', 'checkName','on' => 'create'),
			array('username,password','match','pattern'=>'/^[a-zA-Z0-9_]{4,16}$/u','on'=>'create','message'=>'账号只能由4-16个字母，数字，下划线组成'),
			// password needs to be authenticated
			
			//array('password', 'authenticate', 'skipOnError'=>true,'on'=>'login'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username'=>'用户名',
			'rememberMe'=>'Remember me next time',
			'password' =>'密码',
			'oldpwd' =>'原密码',
			'newpwd' =>'新密码',
			'repeatpwd' =>'重复新密码',
			'role_id'=>'角色',
			'status'=>'状态',
			'verifyCode'=>'验证码',
		);
	}


	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if(Yii::app()->user->id!=0){
			var_dump(11);die();
		}
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			//var_dump(Yii::app()->user->login($this->_identity,$duration));die();
			return true;
		}else{
			$this->addError('password','用户名或密码错误');
			return false;
		}
			
	}
	public function checkPwd($attribute,$params)
	{
		$user = User::model()->findByPk(Yii::app()->user->id);
		if (md5($this->oldpwd)!=$user->user_pwd){
			$this->addError('oldpwd','原密码错误');
		}
		
	}
	public function checkName($attribute,$params)
	{
		$user = User::model()->findAllByAttributes(array('user_name'=>$this->username));
		if ($user!=null){
			$this->addError('username','用户名已存在');
		}
		
	}
}
