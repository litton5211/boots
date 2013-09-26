<?php

class ProductController extends Controller
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
				'actions'=>array('view','index','getType'),
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
		    'order'=>'last_edit_time  DESC',  
		));
		$page =0 ; 
		//翻页page
		if (isset($_REQUEST['page'])){
			$page =(int)$_REQUEST['page'];  
		}
		//查询价格区间
		if (!empty($_REQUEST['range_f'])){
			$criteria->addCondition(" price>="+$_REQUEST['range_f']);  
		}
		if (!empty($_REQUEST['range_t'])){
			$criteria->addCondition(" price<="+$_REQUEST['range_t']);  
		}
		
		if(isset($_REQUEST['type'])&&$_REQUEST['type']!=''){
			$criteria->join='inner join ( mz_product_sort as sort ) on ( sort.product_id= t.id )';
			$type = ProductType::model()->findByPk($_REQUEST['type']);
			
			if ($type->parent_id==0){
				$type = ProductType::model()->findAll('parent_id=:parent_id',array(':parent_id'=>$_REQUEST['type']));
				$sort= array();
				foreach ($type as $t){
					array_push($sort,$t->id);
				}
				$criteria->addInCondition('sort.type_id',$sort);
			}else {
				$criteria->compare('sort.type_id',$_REQUEST['type']);
			}		
			
		}
		$dataProvider=new CActiveDataProvider('Product',array(  
   				'pagination'=>array(  
        			'pageSize'=>10, 
					'currentPage'=> $page,
    			),  
    			'criteria' => $criteria,  
		));
  
		$data = Array();
		$i =0;
		
		foreach ($dataProvider->getData() as $product) {
			
			$parUrl = parse_url($product->pic_url);
			if($parUrl==false){
				$product->pic_url = '';
			}elseif(!isset($parUrl['scheme'])){
				
				$product->pic_url=Yii::app()->request->hostInfo .$product->pic_url;
			}
			$img=null;
			if(CommonUse::curlRes($product->pic_url)){
				$img = getimagesize($product->pic_url);
			}
			
			//$img=null;
			$data[$i]['id'] = $product->id;
			$data[$i]['name'] = $product->name;
			$data[$i]['price'] = $product->price;
			$data[$i]['specification'] = $product->specification;
			//图片
			$data[$i]['pic']['pic_url'] = $product->pic_url;
			if($img!=null){
				$data[$i]['pic']['pic_width'] = $img[0];
				$data[$i]['pic']['pic_height'] = $img[1];
			}else{
				$data[$i]['pic']['pic_width'] = 0;
				$data[$i]['pic']['pic_height'] = 0;
			}

			$data[$i]['like_count'] = $product->like_count;
			$data[$i]['collect_count'] = $product->collect_count;
			$data[$i]['comment_count'] = $product->comment_count;
			$data[$i]['is_like'] = 0;
			$data[$i]['is_collect'] = 0;
			$data[$i]['last_edit_time'] = $product->last_edit_time;
			
			$i++;
		}
		$result['code']=0;
		$result['data']['total']=$i;
		$result['data']['page']=$page;
		$result['data']['list']=$data;
		
		echo json_encode($result);
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Product::model()->findByPk($id);
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
	/** Manages all models.
	 */
	public function actionGetType()
	{
		$firstTypes = ProductType::model()->findAll('parent_id=0');
		$i=0;
		$types= Array();
		foreach($firstTypes as $firstType ){
			$types[$i]['typeId']=$firstType->id;
			$types[$i]['typeName']=$firstType->type_name;
			$secondTypes = ProductType::model()->findAll('parent_id='.$firstType->id);
			$j=0;
			$sec = Array();
			foreach($secondTypes as $second){
				$sec[$j]['typeId']=$second->id;
				$sec[$j]['typeName']=$second->type_name;
				$j++;
			}
			$types[$i]['sonType']=$sec;
			$i++;
		}
		$result['code']=0;
		$result['data']['total']=$i;
		$result['data']['page']=0;
		$result['data']['list']=$types;
		echo json_encode($result);
	}
	/** get price range.
	 */
	public function actionPriceRange()
	{
		$rangs = ProductPriceRange::model()->findAll();
		$i=0;
		$types= Array();
		foreach($rangs as $range ){
			$types[$i]['id']=$range->id;
			$types[$i]['range_f']=$range->range_f;
			$types[$i]['range_t']=$range->range_t;
			$types[$i]['num']=$range->num;
			$i++;
		}
		$result['code']=0;
		$result['data']['total']=$i;
		$result['data']['page']=0;
		$result['data']['list']=$types;
		echo json_encode($result);
	}
}
