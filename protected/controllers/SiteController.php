<?php

class SiteController extends Controller
{
	public $layout='';
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
				'actions'=>array('login','captcha','error'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','logout'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				'minLength'=>4,  //最短为4位
				'maxLength'=>4,   //是长为4位
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
		public function actionIndex()
	{
		
		$this->layout='//layouts/simple';  
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}


	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout='//layouts/simple';  
		$model=new LoginForm('login');


		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			//var_dump($model->validate());die();
			if($model->validate() && $model->login()){
				
			    $url = $this->createUrl('/admin/post/index');
				$this->redirect($url);
			}
		}
		
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionGetProf(){
		
		$profs = Yii::app()->params["sys_param"]["CLIENTINFO_TRAD"][$_POST['code']];
		
		foreach ($profs as $key=>$prof){
			echo CHtml::tag('option',array('value'=>$key),CHtml::encode($prof),true);
		}
	}
	public function actionGetType(){
		
		$profs = Yii::app()->params["sys_param"]["CLIENTINFO_TYPE_CODE"][$_POST['code']];
		
		foreach ($profs as $key=>$prof){
			echo CHtml::tag('option',array('value'=>$key),CHtml::encode($prof),true);
		}
	}
}