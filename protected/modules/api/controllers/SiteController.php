<?php

class SiteController extends Controller
{
	/**
	 * 普通用户登录
	 */
	public function actionLogin(){
		$model=new User();
		$model->email=$_POST['email'];
		$model->user_pwd=$_POST['password'];
		$user = User::model()->find('email=:email',array('email'=>$model->email));
		if ($user==null){
			$this->result['code']=-1;
			$this->result['msg']='登录失败,用户不存在';
			$this->result['data']='';
		}else{
			if(md5($model->user_pwd)==$user->user_pwd){
				$login = new UserLogin();
				$dt=time();
				$login->user_id=$user->id;
				$login->login_time=$dt;
				$login->token=md5($user->user_name+$dt);
				$login->expire_time=$dt+86400*15;
				$login->status=1;
				$login->save();
				$user->token=$login->token;
				$user->save();
				$this->result['data']['token']=$login->token;
				$this->result['data']['expire']=$login->expire_time;
			}else{
				$this->result['code']=-1;
				$this->result['msg']='0005';
				$this->result['data']='登录失败,密码错误';
			}
		}		
	}
	/**
	 * 第三方账号登录
	 */
	public function actionAuthLogin(){
		if (empty($_POST['accessToken'])||empty($_POST['openid'])||empty($_POST['fromSrc'])){
			$this->result['code']=-1;
			$this->result['msg']='登录失败,输入数据错误';
			$this->result['data']='';
			return;
		}
		$user = User::model()->find('openid=:openid',array('openid'=>trim($_POST['openid'])));
		$dt=time();
		if ($user==null){
			$this->result['code']=-1;
			$this->result['msg']='0001';
			$user = new User();
			$user->user_name=trim($_POST['openid']);
			$user->email=trim($_POST['openid']);
			$user->create_time=$dt;
			$user->update_time=$dt;
			$user->token=md5(trim($_POST['openid'])+$dt);
			$user->from_src=$_POST['fromSrc'];
			$user->status=-1;
			$user->openid=trim($_POST['openid']);
			$user->save();
		}else if($user->status=='-1'){
			$this->result['code']=-1;
			$this->result['msg']='0001';
			$this->result['data']='请注册';
			return;
		}
		
		$user->update_time=$dt;
		$user->token=md5(trim($_POST['openid'])+$dt);
		$user->save();
				
		$login = new UserLogin();
		$login->user_id=$user->id;
		$login->login_time=$dt;
		$login->token=md5(trim($_POST['openid'])+$dt);
		$login->expire_time=$dt+86400*15;
		$login->status=1;
		$login->accessToken=$_POST['accessToken'];
		$login->save();
		$this->result['data']['token']=$login->token;
		$this->result['data']['accessToken']=$login->accessToken;
		$this->result['data']['expire']=$login->expire_time;
	}
	/**
	 * 用户注册接口
	 */
	public function actionReg(){
		$user = null;
		$dt=time();
		if (empty($_POST['email'])||empty($_POST['password'])||empty($_POST['username'])){
			$this->result['code']=-1;
			$this->result['msg']='0002';
			$this->result['data']='注册失败,输入数据错误';
			return;
		}
		if(!empty($_POST['openid'])){
			$user = User::model()->find('openid=:openid',array('openid'=>trim($_POST['openid'])));
			if ($user==null){
				$this->result['code']=-1;
				$this->result['msg']='0002';
				$this->result['data']='注册失败,输入数据错误';
				return;
			}
		}else {
			
			$user = User::model()->find('email=:email',array('email'=>trim($_POST['email'])));
			if($user!=null){
				$this->result['code']=-1;
				$this->result['msg']='0003';
				$this->result['data']='注册失败,email已被注册';
				return;
			}
			$user = User::model()->find('user_name=:user_name',array('user_name'=>trim($_POST['username'])));
			if($user!=null){
				$this->result['code']=-1;
				$this->result['msg']='0004';
				$this->result['data']='注册失败,'.trim($_POST['username']).'已被占用';
				return;
			}
			$user = new User();
			$user->create_time = $dt;
			$user->token = md5(trim($_POST['email'])+$dt);
		}
		
		
		
		$user->user_name = trim($_POST['username']);
		$user->user_pwd = md5($_POST['password']);
		$user->email = $_POST['email'];
		$user->update_time = $dt;
		$user->status = 1;
		$user->save();
				
		if (isset($_FILES["pic"])&&$_FILES["pic"]["error"]==0){
			$file_tmp = $_FILES["pic"]["tmp_name"];
			$file_type =explode('/',$_FILES["pic"]["type"]);
			if (sizeof($file_type)>1){
				$file_type=$file_type[1];
			}
			$pic = "/images/profile/".time()."_".$user->id.".".$file_type;
			$file_path=dirname(Yii::app()->BasePath).$pic;
			move_uploaded_file($file_tmp, $file_path);
			$user->profile_pic=$pic;
			$user->save();
		}
		$login = new UserLogin();
		$login->user_id=$user->id;
		$login->login_time=$dt;
		$login->token=$user->token;
		$login->expire_time=$dt+86400*15;
		$login->status=1;
		$login->save();
		$this->result['data']['token']=$login->token;
		$this->result['data']['expire']=$login->expire_time;
	}
	/**
	 * 用户设置头像、背景图像接口
	 */
	public function actionSetPic(){
		
		if (!isset($_POST['picType'])||empty($_POST['token'])){
			$this->result['code']=-1;
			$this->result['msg']='0002';
			$this->result['data']='操作失败,输入数据错误';
			return;
		}
		
		$user = User::model()->find('token=:token',array('token'=>$_POST['token']));
		if ($user==null){
			$this->result['code']=-1;
			$this->result['msg']='0000';
			$this->result['data']='用户未登录，或登录已过有效期';
		}else{
			
			if ($_FILES["pic"]["error"] > 0){
				$this->result['code']=-1;
				$this->result['msg']='0002';
				$this->result['data']='操作失败,输入数据错误';
				return;
			}else {
				$file_tmp = $_FILES["pic"]["tmp_name"];
				$file_type =explode('/',$_FILES["pic"]["type"]);
				if (sizeof($file_type)>1){
					$file_type=$file_type[1];
				}
				if($_POST['picType']=='0'){
					$pic = "/images/profile/".time()."_".$user->id.".".$file_type;
					$file_path=dirname(Yii::app()->BasePath).$pic;
					move_uploaded_file($file_tmp, $file_path);
					$user->profile_pic=$pic;
				}elseif ($_POST['picType']=='1'){
					$pic = "/images/home_bg/".time()."_".$user->id.".".$file_type;
					$file_path=dirname(Yii::app()->BasePath).$pic;
					move_uploaded_file($file_tmp, $file_path);
					$user->home_bg_pic=$pic;
				}else {
					$this->result['code']=-1;
					$this->result['msg']='0002';
					$this->result['data']='操作失败,输入数据错误';
					return;
				}
				$user->save();
				$this->result['data']['token']=$user->token;
			}
			
		}		
	}
}
