<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	/**
	 * 
	 */
	public $result = array('code'=>'0','msg'=>'处理成功','ext'=>'');
	
	protected function afterAction($action){
		parent::afterAction($action);
		if (isset($this->result['data'])){
			echo json_encode($this->result);
		}
	}
	public function redirectMessage($message, $url, $delay=5, $script='')
	{
	    $this->layout=false;
	    if(is_array($url))
	    {
	        $route=isset($url[0])? $url[0]:'';
	        $url=$this->createUrl($route,array_splice($url,1));
	    }
	    return $this->render('/redirect', array(
	        'message'=> $message,
	        'url'=> $url,
	        'delay'=> $delay,
	        'script'=> $script,
	    ));
	}
}