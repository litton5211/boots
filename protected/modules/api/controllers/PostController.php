<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';
	//public $layout='/layouts/sidebar';
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index'),
				'expression'=>array($this->getModule(),'checkToken'),
			),
			array('deny',  // deny all users
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
		
		$this->layout = "/layouts/main";
		
		$this->render('view',array(
			'data'=>$this->loadModel($id),
		));
	}

	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria(array(  
		    'order'=>'post_time DESC',  
		));
		$page =0 ;
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post'])){
			$model->attributes=$_GET['Post'];
			if (isset($_GET['Post']['page'])&&is_int($_GET['Post']['page'])){
				$page = $_GET['Post']['page'];  
			}
			if (isset($model->post_type)){
				$criteria->addInCondition('post_type',$model->post_type);  
			}
		}
		$dataProvider=new CActiveDataProvider('Post',array(  
   				'pagination'=>array(  
        			'pageSize'=>10, 
					'currentPage'=> $page,
    			),  
    			'criteria' => $criteria,  
		));
  
		
		$data = Array();
		$i =0;
		foreach ($dataProvider->getData() as $post) {
			$post->pic_url=Yii::app()->request->hostInfo .$post->pic_url;
			if(CommonUse::curlRes($post->pic_url)){
				$img = getimagesize($post->pic_url);
			}else{
				$img=null;
			}
					
			$data[$i]['id'] = $post->id;
			$data[$i]['post_type'] = $post->post_type;
			$data[$i]['post_title'] = $post->post_title;
			$data[$i]['post_desc'] = $post->post_desc;
			//图片
			$data[$i]['pic']['pic_url'] = $post->pic_url;
			if($img!=null){
				$data[$i]['pic']['pic_width'] = $img[0];
				$data[$i]['pic']['pic_height'] = $img[1];
			}else{
				$data[$i]['pic']['pic_width'] = 0;
				$data[$i]['pic']['pic_height'] = 0;
			}
			//视频
			$data[$i]['video_url'] = $post->video_url;

			$data[$i]['like_count'] = $post->like_count;
			$data[$i]['collect_count'] = $post->collect_count;
			$data[$i]['comment_count'] = $post->comment_count;
			$data[$i]['is_like'] = 0;
			$data[$i]['is_collect'] = 0;
			$data[$i]['post_time'] = $post->post_time;
			$data[$i]['type'] = $post->sort_type;
			$data[$i]['post_user']['user_name'] = User::getUserInfo($post->post_uid)->user_name;
			if($post->from_type=='0'){
				$data[$i]['post_user']['prof_url'] = Yii::app()->request->hostInfo .'/images/profile/default.jpg';
				$prof_img=null;
				if(CommonUse::curlRes($data[$i]['post_user']['prof_url'])){
					$prof_img = getimagesize($data[$i]['post_user']['prof_url']);	
				}
				if($prof_img!=null){
					$data[$i]['post_user']['prof_width'] = $prof_img[0];
					$data[$i]['post_user']['prof_height'] = $prof_img[1];
				}else{
					$data[$i]['post_user']['prof_width'] = 0;
					$data[$i]['post_user']['prof_height'] = 0;
				}
				
			}
			
			$i++;
		}
		$this->result['data']['total']=$i;
		$this->result['data']['page']=$page;
		$this->result['data']['list']=$data;
		
		//echo json_encode($result);
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
}
