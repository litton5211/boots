<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class UserLoginForm extends CFormModel
{
	public $username;
	public $password;
	public $userfrom;

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username'=>'用户名',
			'password' =>'密码',
			'repeatpwd' =>'重复新密码',
			'role_id'=>'角色',
			'status'=>'状态',
			'verifyCode'=>'验证码',
			'userfrom'=>'来源',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate()
	{
		$this->_identity=new UserIdentity($this->username,$this->password);
		if(!$this->_identity->authenticate()){
			$this->addError('password','Incorrect username or password.');
		}
		
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
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
