<?php

class DefaultController extends Controller
{
	/**
	 * 获取活动列表
	 */
	public function actionActivity()
	{
		
		$criteria=new CDbCriteria(array(  
		    'order'=>'create_time DESC',  
		));
		if(isset($_REQUEST['order'])){
			if($_REQUEST['order']=='0'){
				$criteria->order ='create_time DESC';
			}elseif($_REQUEST['order']=='1'){
				$criteria->order ='end_time DESC';
			}
		}
		if(isset($_REQUEST['status'])){
			$dt = time();
			if($_REQUEST['status']=='0'){
				
				$criteria->addCondition('end_time>='.$dt);  
			}elseif($_REQUEST['status']=='1'){
				$criteria->addCondition('end_time<'.$dt);  
			}
		}
		$page =0 ;
		if(isset($_REQUEST['page'])){
			$page =(int)$_REQUEST['page'];  
		}
		
		$dataProvider=new CActiveDataProvider('Activity',array(  
   				'pagination'=>array(  
        			'pageSize'=>10, 
					'currentPage'=> $page,
    			),  
    			'criteria' => $criteria,  
		));
		$user = null;
		if(isset($_REQUEST['token'])){
			$user = User::model()->find('token=:token',array('token'=>$_REQUEST['token']));
		}
		$i=0;
  		foreach ($dataProvider->getData() as $activity) {	
			$activity->pic_url=Yii::app()->request->hostInfo.$activity->pic_url;
			$img=null;
			if(CommonUse::curlRes($activity->pic_url)){
				$img = getimagesize($activity->pic_url);
			}
			
			//$img=null;
			$data[$i]['id'] = $activity->id;
			$data[$i]['title'] = $activity->title;
			$data[$i]['begin_time'] = $activity->begin_time;
			$data[$i]['end_time'] = $activity->end_time;
			$data[$i]['quota_num'] = $activity->quota_num;
			//图片
			$data[$i]['pic']['pic_url'] = $activity->pic_url;
			if($img!=null){
				$data[$i]['pic']['pic_width'] = $img[0];
				$data[$i]['pic']['pic_height'] = $img[1];
			}else{
				$data[$i]['pic']['pic_width'] = 0;
				$data[$i]['pic']['pic_height'] = 0;
			}

			$data[$i]['like_count'] = $activity->like_count;
			$data[$i]['collect_count'] = $activity->collect_count;
			$data[$i]['comment_count'] = $activity->comment_count;
			$data[$i]['create_time'] = $activity->create_time;
			//判断用户是否参加是否分享
			if($user!=null){
				$this->result['data']['joinStatus']=-1;
				$this->result['data']['is_share']=0;
				$joinAct =	JoinActivity::model()->findByAttributes(array('userid'=>$user->id,'activity_id'=>$activity->id));
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
		if(!empty($data)){
			$this->result['data']['list']=$data;
		}
		
		
	}
	/**
	 * 活动详细页面
	 */
	public function actionActivityView(){
		$activity = null;
		if(isset($_REQUEST['activityId'])){
			$activity = Activity::model()->findByPk((int)$_REQUEST['activityId']);		
		}
		
		if($activity!=null){
			$this->result['data']['joinStatus']=-1;
			$this->result['data']['is_share']=0;
			$users = JoinActivity::model()->with('join_user')->findAll("t.activity_id = "+(int)$_REQUEST['activityId']+" and t.status=1");
			$join = JoinActivity::model()->with('join_user')->count("t.activity_id = "+(int)$_REQUEST['activityId']);
			if(isset($_REQUEST['token'])){
				$user = User::model()->find('token=:token',array('token'=>$_REQUEST['token']));
				if($user!=null){
					$joinAct =	JoinActivity::model()->findByAttributes(array('userid'=>$user->id,'activity_id'=>$_REQUEST['activityId']));
					if($joinAct!=null){
						$this->result['data']['joinStatus']=$joinAct->status;
						if($joinAct->is_share!='0'){
							$this->result['data']['is_share']=1;
						}
					}					
				}
				
			}
			$this->result['data']['id']=$activity->id;
			$this->result['data']['title']=$activity->title;
			$this->result['data']['content']=strip_tags($activity->content);
			$this->result['data']['create_time']=$activity->create_time;
			$this->result['data']['begin_time']=$activity->begin_time;
			$this->result['data']['end_time']=$activity->end_time;
			$this->result['data']['quota_num']=$activity->quota_num;
	
			$activity->pic_url=Yii::app()->request->hostInfo .$activity->pic_url;
			$img=null;
			if(CommonUse::curlRes($activity->pic_url)){
				$img = getimagesize($activity->pic_url);
			}
			
			$data['data']['pic']['pic_url'] = $activity->pic_url;
			if($img!=null){
				$data['data']['pic']['pic_width'] = $img[0];
				$data['data']['pic']['pic_height'] = $img[1];
			}else{
				$data['data']['pic']['pic_width'] = 0;
				$data['data']['pic']['pic_height'] = 0;
			}
			$this->result['data']['product_id']=$activity->product_id;
			$this->result['data']['like_count']=$activity->like_count;
			$this->result['data']['collect_count']=$activity->collect_count;
			$this->result['data']['comment_count']=$activity->comment_count;
			$this->result['data']['status']=$activity->status;
			$this->result['data']['jion_count']=$join;
			$num=0;
			foreach ($users as $user){
				$this->result['data']['jion_user'][$num]['userid']=$user->id;
				$this->result['data']['jion_user'][$num]['username']=$user->join_user->user_name;
				$num++;
			}
		}else{
			$this->result['code']=-1;
			$this->result['msg']='0002';
			$this->result['data']='操作失败,输入数据错误';
			return;
		}
		
	}
	/**
	 * 获取全部晒装列表
	 */
	public function actionShare()
	{
		$criteria=new CDbCriteria(array(  
		    'order'=>'t.create_time DESC',  
		));

		$page =0 ;
		if(isset($_REQUEST['page'])){
			$page =(int)$_REQUEST['page'];  
		}


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
			$user = User::model()->findByPk($share->userid);
			$data[$i]['user']['username'] = $user->user_name;
			$data[$i]['user']['profile_pic'] = Yii::app()->request->hostInfo ."/images/profile/default.jpg";
			$data[$i]['user']['profile_width'] = "";
			$data[$i]['user']['profile_height'] = "";
			if(!empty($user->profile_pic)){
				$pic_url = Yii::app()->request->hostInfo .$user->profile_pic;
				if(CommonUse::curlRes($pic_url)){
					$img = getimagesize($pic_url);
					$data[$i]['user']['profile_width']=$img[0];
					$data[$i]['user']['profile_height']=$img[1];
				}
			}
			
			$i++;
		}

		$this->result['data']['total']=$i;
		$this->result['data']['page']=$page;
		$this->result['data']['list']=$data;
	}
	/**
	 * 获取商务推广列表
	 */
	public function actionAd()
	{
		$criteria=new CDbCriteria(array(  
		    'order'=>'t.publish_time DESC',  
		));

		$page =0 ;
		if(isset($_REQUEST['page'])){
			$page =(int)$_REQUEST['page'];  
		}


		$dataProvider=new CActiveDataProvider('AdInfo',array(  
   				'pagination'=>array(  
        			'pageSize'=>10, 
					'currentPage'=> $page,
    			),  
    			'criteria' => $criteria,  
		));
  		$i=0;
  		$data=null;
		foreach ($dataProvider->getData() as $ad) {
			$data[$i]['id'] = $ad->id;
			$data[$i]['object_id'] = $ad->object_id;
			$data[$i]['object_type'] = $ad->object_type;
			$data[$i]['title'] = $ad->title;
			$data[$i]['publish_time'] = $ad->publish_time;
			$pic_url=Yii::app()->request->hostInfo .$ad->pic_url;
			if(CommonUse::curlRes($pic_url)){
				$img = getimagesize($pic_url);
				$data[$i]['pic']['pic_url']=$pic_url;
				$data[$i]['pic']['pic_width'] = $img[0];
				$data[$i]['pic']['pic_height'] = $img[1];
			}else{
				$data[$i]['pic']['pic_url']="";
				$data[$i]['pic']['pic_width'] = 0;
				$data[$i]['pic']['pic_height'] =0;
			}

			
			$i++;
		}

		$this->result['data']['total']=$i;
		$this->result['data']['page']=$page;
		$this->result['data']['list']=$data;
	}
}