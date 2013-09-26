<?php

class UserController extends Controller
{
	/**
	 * 用户设置头像或者背景接口
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
				$pic='';
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
				
				$this->result['data']['pic']=Yii::app()->request->hostInfo.$pic;
				$this->result['data']['token']=$user->token;
			}
			
		}		
	}
	/**
	 * 
	 * 获取用户个人主页信息
	 */
	public function actionUserInfo(){
		if (empty($_POST['token'])){
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
			return ;
		}
		
		$this->result['data']['token']=$user->token;	
		$this->result['data']['username']=$user->user_name;	
		//头像
		if(empty($user->profile_pic)){
			$this->result['data']['profile_pic']['url']=Yii::app()->request->hostInfo .'/images/profile/default.jpg';
		}else{
			$this->result['data']['profile_pic']['url']=Yii::app()->request->hostInfo .$user->profile_pic;
		}
		$profile_img=null;
		if(CommonUse::curlRes($this->result['data']['profile_pic']['url'])){
			$profile_img = getimagesize($this->result['data']['profile_pic']['url']);
		}
		if($profile_img!=null){
			$this->result['data']['profile_pic']['pic_width'] = $profile_img[0];
			$this->result['data']['profile_pic']['pic_height'] = $profile_img[1];
		}else{
			$this->result['data']['profile_pic']['pic_width'] = 0;
			$this->result['data']['profile_pic']['pic_height'] = 0;
		}
		
		
		//
		if (empty($user->home_bg_pic)){
			$this->result['data']['home_bg_pic']['url'] = '';
			$this->result['data']['home_bg_pic']['pic_width'] = '';
			$this->result['data']['home_bg_pic']['pic_height'] = '';
		}else{
			
			$this->result['data']['home_bg_pic']['url'] = Yii::app()->request->hostInfo .$user->home_bg_pic;
			$bg_img=null;
			if(CommonUse::curlRes($this->result['data']['home_bg_pic']['url'])){
				$bg_img = getimagesize($this->result['data']['home_bg_pic']['url']);
			}
			if($bg_img!=null){
				$this->result['data']['home_bg_pic']['pic_width'] = $bg_img[0];
				$this->result['data']['home_bg_pic']['pic_height'] = $bg_img[1];
			}else{
				$this->result['data']['home_bg_pic']['pic_width'] = 0;
				$this->result['data']['home_bg_pic']['pic_height'] = 0;
			}
			
		}
		
		$this->result['data']['activity_count']= JoinActivity::model()->countByAttributes(array('userid'=>$user->id));
		$this->result['data']['like_count'] = Feedback::model()->countByAttributes(array('userid'=>$user->id,'type'=>1));
		$this->result['data']['collect_count']=Feedback::model()->countByAttributes(array('userid'=>$user->id,'type'=>2));
		$this->result['data']['read_message_count']=Messge::model()->countByAttributes(array('t_userid'=>$user->id,'status'=>1));
		$this->result['data']['unread_message_count']=Messge::model()->countByAttributes(array('t_userid'=>$user->id,'status'=>0));	
		
	}
	/**
	 * 
	 * 用户响应接口
	 */
	public function actionFeedBack(){
		
		if (empty($_POST['token'])||empty($_POST['type'])||empty($_POST['object_type'])||empty($_POST['object_id'])){
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
			return ;
		}
		$feedBack = new Feedback();
		$feedBack->userid = $user->id;
		$feedBack->type = $_POST['type'];
		$feedBack->object_type =  $_POST['object_type'];
		$feedBack->object_id =  $_POST['object_id'];
		$feedBack->create_time =  time();
		$feedBack->save();
		$this->result['data']='处理成功';
	
		
			
	}
	/**
	 * 
	 * 用户分享
	 */
	public function actionShare(){
		
		if (empty($_POST['token'])||empty($_POST['title'])||empty($_POST['content'])){
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
			return ;
		}
		$share = new Share();
		$share->userid = $user->id;
		$share->title = $_POST['title'];
		$share->content =  $_POST['content'];
		$share->create_time =  time();
		$share->save();
		if (isset($_FILES['pic']['error'])){
			$count = sizeof($_FILES['pic']['error']);
			$pics= array();
			for($i=1;$i<=$count;$i++){
				$file_tmp = $_FILES["pic"]["tmp_name"][$i];
				$file_type =explode('/',$_FILES["pic"]["type"][$i]);
				if (sizeof($file_type)>1){
					$type=$file_type[1];
				}
				$pic = "/images/share/".time()."_".$share->id."_".$i.".".$type;
				$file_path=dirname(Yii::app()->BasePath).$pic;
				move_uploaded_file($file_tmp, $file_path);
				array_push($pics,$pic);
			}
			$share->pic=json_encode($pics);
			$share->save();
		}
		$this->result['data']['id']=$share->id;
		$this->result['data']['title']=$share->title;
		$this->result['data']['content']=$share->content;
		$this->result['data']['create_time']=$share->create_time;
		$pics = json_decode($share->pic);
		for ($i=0;$i<sizeof($pics);$i++){
			$this->result['data']['pic'][$i]['pic_url']=Yii::app()->request->hostInfo .$pics[$i];
			$share_img=null;
			if(CommonUse::curlRes($this->result['data']['pic'][$i]['pic_url'])){
				$share_img = getimagesize($this->result['data']['pic'][$i]['pic_url']);
			}
			if($share_img!=null){
				$this->result['data']['pic'][$i]['pic_width']=$share_img[0];
				$this->result['data']['pic'][$i]['pic_height']=$share_img[1];
			}else{
				$this->result['data']['pic'][$i]['pic_width']=0;
				$this->result['data']['pic'][$i]['pic_height']=0;
			}
			
		}
		
			
	}
	/**
	 * 用户参加过的活动
	 */
	public function actionMyActivity()
	{
		$criteria=new CDbCriteria(array(  
		    'order'=>'t.create_time DESC',  
		));

		$page =0 ;
		if(isset($_REQUEST['page'])){
			$page =(int)$_REQUEST['page'];  
		}
		
		if(!isset($_REQUEST['token'])){
			$this->result['code']=-1;
			$this->result['msg']='0002';
			$this->result['data']='用户未登陆';
			return;
		}
		$user = User::model()->find('token=:token',array('token'=>$_REQUEST['token']));
		$criteria->with='activiy';
		$criteria->addCondition('t.userid='.$user->id);
				
		$dataProvider=new CActiveDataProvider('JoinActivity',array(  
   				'pagination'=>array(  
        			'pageSize'=>10, 
					'currentPage'=> $page,
    			),  
    			'criteria' => $criteria,  
		));
  		$i=0;
  		foreach ($dataProvider->getData() as $activity) {
  			$pic="";
  			$img=null;
			$parUrl = parse_url($activity->activiy->pic_url);
			if($parUrl==false){
				$pic = '';
			}elseif(!isset($parUrl['scheme'])){
				
				$pic=Yii::app()->request->hostInfo .$activity->activiy->pic_url;
				if(CommonUse::curlRes($pic)){
					$img = getimagesize($pic);
				}
				
			}
			
			
			//$img=null;
			$data[$i]['id'] = $activity->activiy->id;
			$data[$i]['title'] = $activity->activiy->title;
			$data[$i]['begin_time'] = $activity->activiy->begin_time;
			$data[$i]['end_time'] = $activity->activiy->end_time;
			$data[$i]['quota_num'] = $activity->activiy->quota_num;
			$data[$i]['status'] = $activity->status;
			//图片
			$data[$i]['pic']['pic_url'] = $pic;
			if($img!=null){
				$data[$i]['pic']['pic_width'] = $img[0];
				$data[$i]['pic']['pic_height'] = $img[1];
			}else{
				$data[$i]['pic']['pic_width'] = 0;
				$data[$i]['pic']['pic_height'] = 0;
			}
			$data[$i]['like_count'] = $activity->activiy->like_count;
			$data[$i]['like_count'] = $activity->activiy->like_count;
			$data[$i]['collect_count'] = $activity->activiy->collect_count;
			$data[$i]['comment_count'] = $activity->activiy->comment_count;
			$data[$i]['create_time'] = $activity->activiy->create_time;
			//判断用户是否参加是否分享
			if($user!=null){
				$this->result['data']['joinStatus']=-1;
				$this->result['data']['is_share']=0;
				$joinAct =	JoinActivity::model()->findByAttributes(array('userid'=>$user->id,'activity_id'=>$activity->activiy->id));
				if($joinAct!=null){
					$this->result['data']['joinStatus']=$joinAct->status;
					if($joinAct->is_share!='0'){
						$this->result['data']['is_share']=1;
					}
				}
				
			}
			$i++;
		}

		$this->result['data']['total']=$i;
		$this->result['data']['page']=$page;
		$this->result['data']['list']=$data;
		
	}
	/**
	 * 用户参加活动
	 */
	public function actionJoinActivity()
	{
		if(!isset($_REQUEST['token'])){
			$this->result['code']=-1;
			$this->result['msg']='0000';
			$this->result['data']='用户未登陆';
			return;
		}
		if (empty($_REQUEST['name'])||empty($_REQUEST['tel'])||empty($_REQUEST['address'])||empty($_REQUEST['activityId'])){
			$this->result['code']=-1;
			$this->result['msg']='0002';
			$this->result['data']='操作失败，输入参数不正确';
			return;
		}
		
		$user = User::model()->find('token=:token',array('token'=>$_REQUEST['token']));
		if ($user==null){
			$this->result['code']=-1;
			$this->result['msg']='0000';
			$this->result['data']='用户未登录，或登录已过有效期';
			return ;
		}
		$activity = Activity::model()->findByPk($_REQUEST['activityId']);
		if ($activity==null){
			$this->result['code']=-1;
			$this->result['msg']='0002';
			$this->result['data']='操作失败，输入参数不正确';
			return ;
		}
		$join = new JoinActivity();
		$join->userid=$user->id;
		$join->activity_id=$_REQUEST['activityId'];
		$join->name=$_REQUEST['name'];
		$join->adress=$_REQUEST['adress'];
		$join->tel=$_REQUEST['tel'];
		$join->create_time = time();
		$join->status=0;

		$join->save();
  		$this->result['data']['activity_id']=$activity->id;
  		$this->result['data']['activity_title']=$activity->title;
  		$this->result['data']['name']=$join->name;
  		$this->result['data']['adress']=$join->adress;
  		$this->result['data']['tel']=$join->tel;
		
	}
	/**
	 * 用户发表过的分享
	 */
	public function actionMyShare()
	{
		$criteria=new CDbCriteria(array(  
		    'order'=>'t.create_time DESC',  
		));

		$page =0 ;
		if(isset($_REQUEST['page'])){
			$page =(int)$_REQUEST['page'];  
		}
		
		if(!isset($_REQUEST['token'])){
			$this->result['code']=-1;
			$this->result['msg']='0002';
			$this->result['data']='用户未登陆';
			return;
		}

		$user = User::model()->find('token=:token',array('token'=>$_REQUEST['token']));
		$criteria->addCondition('t.userid='.$user->id);
		$dataProvider=new CActiveDataProvider('Share',array(  
   				'pagination'=>array(  
        			'pageSize'=>10, 
					'currentPage'=> $page,
    			),  
    			'criteria' => $criteria,  
		));
  		$i=0;
		foreach ($dataProvider->getData() as $share) {
			$data[$i]['id'] = $share->id;
			$data[$i]['title'] = $share->title;
			$data[$i]['content'] = $share->content;
			$data[$i]['create_time'] = $share->create_time;
			$parUrls = json_decode($share->pic);
			for ($n=0;$n<sizeof($parUrls);$n++){
				$data[$i]['pic'][$n]['pic_url']=Yii::app()->request->hostInfo .$parUrls[$n];
				$img=null;
				if(CommonUse::curlRes($data[$i]['pic'][$n]['pic_url'])){
					$img = getimagesize($data[$i]['pic'][$n]['pic_url']);
				}
				
				if($img!=null){
					$data[$i]['pic'][$n]['pic_width'] = $img[0];
					$data[$i]['pic'][$n]['pic_height'] = $img[1];
				}else{
					$data[$i]['pic'][$n]['pic_width'] = 0;
					$data[$i]['pic'][$n]['pic_height'] = 0;
				}
			}
			
			$i++;
		}

		$this->result['data']['total']=$i;
		$this->result['data']['page']=$page;
		$this->result['data']['list']=$data;
	}
	
}
