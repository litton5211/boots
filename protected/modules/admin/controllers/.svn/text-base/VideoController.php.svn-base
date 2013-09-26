<?php

class VideoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';
	public $layout='/layouts/sidebar';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('admin'),
			),

			array('allow',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel(1);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['VideoConf']))
		{
			$model->attributes=$_POST['VideoConf'];
			$model->save();
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=VideoConf::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/**
	 * Manages all video.
	 */
	public function actionVideo()
	{
	
		$dataProvider=new CActiveDataProvider('Post', array(
			'criteria'=>array(
				'condition'=>'post_type=1',
				'order'=>'post_time DESC',
			),
			'pagination'=>array(
				'pageSize'=>20,
			),
		));
		$model = new Post();
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('video',array(
			'dataProvider'=>$dataProvider,'model'=>$model
		));
	}
	/**
	 * flush all video.
	 */
	public function actionFlushVideo()
	{
		$conf = VideoConf::getConfig();
		$tokeDate = date("Y-m-d",$conf->last_update_time);
		if ($tokeDate<date("Y-m-d",time())){
			$conf = VideoConf::getNewTokenConf();
			
		}
		$result = file_get_contents("http://api.aliyun.video-tx.com/getVideosByFolder?folderId=102467845836767234&firstResult=0&maxResults=50&token=".$conf->token); 	
		$res = json_decode($result);
		//var_dump($res);die();
		$sum=0;
		for ($i = 0; $i < count($res); $i++)
		{
			$post = new Post();
			$item = $res[$i];
			
			$params['videoId']=$item->id;
			$params['token']=$conf->token;
			$m3u8 = CommonUse::RestRequest("http://api.aliyun.video-tx.com/getRenditions",$params,false);
			//var_dump($m3u8[1]['videoHttpUrl']);die();
			
			$post->post_refer_url = $item->id;
			$post->post_title = $item->title;
			$post->post_content = $item->title;
			if (isset($m3u8['error'])){
				$post->video_url = $item->videoUrl;
			}else {
				$post->video_url = $m3u8[1]['videoHttpUrl'];
			}
			
			$post->pic_url = $item->snapshotUrl;
			$post->post_refer_url = $item->id;
			$post->post_time = (int)(substr($item->creationTime,0,10));
			$post->post_uid = 1;
			$post->post_type = 1;
			$post->last_edit_time = (int)(substr($item->creationTime,0,10));
			$post->last_edit_uid = 1;
			$n=Post::model()->count("post_refer_url=:post_refer_url",array(":post_refer_url"=>$post->post_refer_url));
			if ($post->video_url == ""||$n>0)
			{
				continue;
			}else{
				
				$post->save();
				$sum++;
				//var_dump($post->getErrors() );die();
			}
			
		}
		echo '更新视频成功，一共新获取了['.$sum.']条记录';
	}
}
