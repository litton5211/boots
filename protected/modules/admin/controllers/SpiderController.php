<?php

class SpiderController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','getSiteList','getList','updateList','getContent'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('site','delete'),
				'users'=>array('admin'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SpiderSite;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SpiderSite']))
		{
			$model->attributes=$_POST['SpiderSite'];
			$model->last_update_time=time();
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SpiderSite']))
		{
			$model->attributes=$_POST['SpiderSite'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
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
		$dataProvider=new CActiveDataProvider('SpiderSite');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionSite()
	{
		$model = new SpiderSite;
		if(isset($_POST['SpiderSite'])){
			$model->site_name=$_POST['SpiderSite']['site_name'];
			$model->list_format=$_POST['SpiderSite']['list_format'];
			$model->page_format=$_POST['SpiderSite']['page_format'];
			$model->homepage=$_POST['SpiderSite']['homepage'];
			$model->last_update_time=time();
			$model->save();
			
		}
			
			
			
		$dataProvider=new CActiveDataProvider('SpiderSite', array(
			'criteria'=>array(
			),
			'pagination'=>array(
				'pageSize'=>20,
			),
		));
		

		$this->render('site',array(
			'dataProvider'=>$dataProvider,'model'=>$model
		));
		
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=SpiderSite::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='spider-site-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	public function actionGetSiteList()
	{
		$model=SpiderSite::model()->findByPk($_GET['id']);
		
		$page = SpiderFun::restRequest($model->homepage,array(),0);
		preg_match_all("|<a [^>]*href=\"(http://s.lefeng.com/directory/.*</a>)|Us",$page,$pageList);
		
		foreach ($pageList[1] as  $info){
			preg_match_all("|(.*html).*>(.*)</a>|Us",$info,$list);
			if (sizeof($list,0)==3){
				$spiderList = new SpiderList();
				$spiderList->list_url = $list[1][0];
				$record = SpiderList::model()->find('list_url=:list_url',array('list_url'=>$spiderList->list_url));
				if ($record!=null){
					continue;
				}
				$spiderList->site_id = $model->id;
				$spiderList->list_name = $list[2][0];
				$spiderList->add_time = time();
				$spiderList->save();
			}
		}
		
		
	}
	/**
	 * 网站列表
	 * @param CModel the model to be validated
	 */
	public function actionGetList()
	{
		$model = new SpiderList;
		if(isset($_POST['SpiderList'])){
			$model->site_name=$_POST['SpiderList']['site_name'];
			$model->list_format=$_POST['SpiderSite']['list_format'];
			$model->page_format=$_POST['SpiderSite']['page_format'];
			$model->homepage=$_POST['SpiderSite']['homepage'];
			$model->last_update_time=time();
			$model->save();
			
		}
		$dataProvider=new CActiveDataProvider('SpiderList', array(
			'criteria'=>array(
			),
			'pagination'=>array(
				'pageSize'=>20,
			),
		));
		$this->render('list',array(
			'dataProvider'=>$dataProvider,'model'=>$model
		));
		
	}

	/**
	 * 更新列表
	 * @param CModel the model to be validated
	 */
	public function actionUpdateList()
	{
		
		$model=SpiderList::model()->findByPk($_GET['id']);
		
		$page = SpiderFun::restRequest($model->list_url,array(),0);
		//抓取产品列表
		preg_match_all("|<a [^>]*href=\"(http://s.lefeng.com/directory/.*</a>)|Us",$page,$pageList);
		
		foreach ($pageList[1] as  $info){
			preg_match_all("|(.*html).*>(.*)</a>|Us",$info,$list);
			if (sizeof($list,0)==3){
				$spiderList = new SpiderList();
				$spiderList->list_url = $list[1][0];
				$record = SpiderList::model()->find('list_url=:list_url',array('list_url'=>$spiderList->list_url));
				if ($record!=null){
					continue;
				}
				$spiderList->site_id = $model->id;
				$spiderList->list_name = $list[2][0];
				$spiderList->add_time = time();
				//$spiderList->save();
			}
		}
		if(preg_match('#<div class="list">(.*)<div id="recommend-show">#Us', $page, $info)){
			$page =$info[1];
		}

		//抓取产品页面
		preg_match_all("#(<a[^>]*href=\"http://product.lefeng.com/product/[^<]*)(<i style|</a>)#Us",$page,$productList);
		foreach ($productList[1] as  $product){		
			preg_match_all("|href=\"(.*html).*>(.*)<|Us",$product."<",$list);			
			if (sizeof($list,0)==3){
				$spiderPage = new SpiderPage();
				$spiderPage->page_url = trim($list[1][0]);
				$record = SpiderPage::model()->find('page_url=:page_url',array('page_url'=>$spiderPage->page_url));
				if ($record!=null){
					continue;
				}
				$spiderPage->site_id = $model->site_id;
				$spiderPage->list_id = $model->id;
				$spiderPage->page_name = trim($list[2][0]);
				$spiderPage->last_update_time = time();
				$spiderPage->status=0;
				$spiderPage->save();
				SpiderFun::LefengPaser($spiderPage);
			}
		}
		
	}
	public  function actionGetContent(){
		if(isset($_GET['id'])){
			$model=SpiderPage::model()->findByPk($_GET['id']);
		}else{
			$model = new SpiderPage;
			$model->page_url='http://product.lefeng.com/product/7164.html';
			$model->id=2;
			$model->site_id=2;
		}
		
		$document = SpiderFun::LefengPaser($model);
		

	}
}
