<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';
	public $layout='/layouts/column2';
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
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','create','update','view','admin','delete','video','getVideo','order'),
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * 查看文章详细
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{

		$this->renderPartial('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * 
	 * 添加文章
	 */
	public function actionCreate()
	{
		$model=new Post;

		if(isset($_POST['Post']))
		{
			$dt=time();
			$model->attributes=$_POST['Post'];
			if (empty($_POST['Post']['post_desc'])||(isset($_POST['Post']['autoGetDesc'])&&$_POST['Post']['autoGetDesc'][0]==1)){
				$desc = strip_tags($model->post_content);
				$desc = mb_substr($desc, 0, 140, 'utf-8'); 
				$model->post_desc = $desc;
			}
			
			$model->post_type =0;//文章类
			$model->from_type='0';//编辑录入
			$model->post_uid=YII::app()->user->id;
			$model->post_time=$dt;
			$model->last_edit_uid=YII::app()->user->id;
			$model->last_edit_time=$dt;
			if($model->save()){
				if($_FILES['Post']['error']['pic_url']==0){
					$tmp = $_FILES['Post']['tmp_name']['pic_url'];
					$file_type =explode('/',$_FILES['Post']['type']['pic_url']);
					$type=".JPG";
					if (sizeof($file_type)>1){
						$type=$file_type[1];
					}
					$pic = "/images/post/".$dt."_".$model->id.".".$type;
					$file_path=dirname(Yii::app()->BasePath).$pic;
					move_uploaded_file($tmp, $file_path);
					$model->pic_url=$pic;
					$model->save();
				}
				
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * 文章更新
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->renderPartial('update',array(
			'model'=>$model,
		));
	}

	/**
	 * 删除文章
	 */
	public function actionDelete($id)
	{
		
		if(isset($id))
		{
			
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Post');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * 文章管理页面.
	 */
	public function actionAdmin()
	{
		$criteria=new CDbCriteria(array(  
		    'order'=>'post_time DESC',  
		));
		$criteria->addCondition('post_type=0');  
		$page =0 ;
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post'])){
			$model->attributes=$_GET['Post'];
			if (isset($model->post_type)){
				$criteria->addCondition('post_type='.$model->post_type);  
			}
			if (isset($model->post_title)){
				$criteria->addSearchCondition('post_title',$model->post_title);  
			}
			if (isset($_REQUEST['Post']['begin_time'])){
				$criteria->addCondition('post_time>='.strtotime($_REQUEST['Post']['begin_time']));  
			}
			if (isset($_REQUEST['Post']['end_time'])){
				$criteria->addCondition('post_time<='.strtotime($_REQUEST['Post']['end_time']));  
			}
		}
  
		//添加条件  
		
		$dataProvider=new CActiveDataProvider('Post',array(  
		    'pagination'=>array(  
		        'pageSize'=>10,   
		    ),  
		    'criteria' => $criteria,  
		));

		$this->render('admin',array(
			'model'=>$model,'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	/**
	 * 视频管理页面.
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
	 * Manages all video.
	 */
	public function actionGetVideo()
	{
		
	
		$result = file_get_contents("http://api.aliyun.video-tx.com/getVideosByFolder?folderId=102467845836767234&firstResult=0&maxResults=50&token=MTAyNDIwOTM0MDU2NDc2NjczOjEwMjQyMDkzNDA1NjQ3NjkyOTowOjEzNjgwNjU5MzU2OTY6YTkyOGRlMzhjNThjOTZjMjM5OTE3MDhmMThjYmM1MDM."); 	
		$res = json_decode($result,true);
		for ($i = 0; $i < count($res); $i++)
		{
			$post = new Post();
			$item = $res[$i];
			$post->post_refer_url = $item->id;
			$post->post_title = $item->title;
			$post->post_content = $item->title;
			$post->video_url = $item->videoUrl;
			$post->pic_url = $item->snapshotUrl;
			$post->post_refer_url = $item->id;
			$post->post_time = (int)(substr($item->creationTime,0,10));
			$post->post_uid = 1;
			$post->post_type = 1;
			$n=Post::model()->count("post_refer_url=:post_refer_url",array(":post_refer_url"=>$post->post_refer_url));
			if ($post->video_url == ""||$n>0)
			{
				continue;
			}else{
				
				$post->save();
				//var_dump($post->getErrors() );die();
			}
			
		}
		$url = $this->createUrl('/admin/post/video');
		$this->redirect($url);
	}
	/**
	 * 文章推荐.
	 */
	public function actionOrder()
	{
		if((!isset($_REQUEST['type']))||(!isset($_REQUEST['id']))){
			return ;
		}
		$post=Post::model()->findByPk($_REQUEST['id']);
		if ($post==null){
			return ;
		}
		if($post->menu_order==$_REQUEST['type']){
			$this->redirect(Yii::app()->request->urlReferrer);
		}else{
			if($_REQUEST['type']=="1"){
				$ad = new AdInfo();
				$ad->object_id=$post->id;
				$ad->object_type=1;
				$ad->title=$post->post_title;
				$ad->pic_url=$post->pic_url;
				$ad->publish_time=time();
				$ad->last_update_time=time();
				$ad->status=0;
				$ad->save();
			}
			
			$post->menu_order=$_REQUEST['type'];
			$post->save();
		}
		Yii::app()->user->setFlash('commentSubmitted ','处理成功');
		$this->redirect(Yii::app()->request->urlReferrer);
		//$this->redirectMessage("呜呜呜",Yii::app()->request->urlReferrer);
	}
}
