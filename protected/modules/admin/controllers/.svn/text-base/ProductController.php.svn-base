<?php

class ProductController extends Controller
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update','admin','delete','move','type'),
				'users'=>array('@'),
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
		$model=new Product;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ProID));
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

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id = null)
	{
		if(isset($id)){
			$this->loadModel($id)->delete();
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		} 
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$ids = $_POST['nid'];
				foreach($ids as $id){
				    $this->loadModel($id)->delete();					
				}
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	public function actionMove()
	{
		if(Yii::app()->request->isPostRequest)
		{
	                $ids = $_POST['nid'];
	                foreach($ids as $id)
			{
		                $model=$this->loadModel($id);
		                if(isset($id))
		                {			
			                $model->ProSort = $_POST['ProSort'];
			                $model->save();				
		                }
	               }	
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id = null)
	{
		$newProduct = new Product;
		if(isset($_POST['Product']))
		{
			$newProduct->attributes=$_POST['Product'];
			if($newProduct->save())
			$this->redirect(array('index'));
		}

		if(isset($id)){
			$dataProvider=new CActiveDataProvider('Product',array('criteria'=>array('condition'=>'ProSort= :id','params'=>array(':id'=>$id)),'pagination'=>array('pageSize'=>5)));
		} else
		$dataProvider=new CActiveDataProvider('Product',array('pagination'=>array('pageSize'=>5)));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'newProduct'=>$newProduct
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
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
		$model=Product::model()->findByPk((int)$id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='Product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/**
	 * 产品分类查询
	 * @param CModel the model to be validated
	 */
	public function actionType()
	{	
		$model=new ProductType('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProductType']))
			$model->attributes=$_GET['Product'];

		$this->render('type',array(
			'model'=>$model,
		));
	}
}
