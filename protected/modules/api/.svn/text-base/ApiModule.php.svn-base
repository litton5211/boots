<?php

class ApiModule extends CWebModule
{
	public $defaultController = 'site';

    private $_assetsUrl;
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'api.models.*',
			'api.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
   public function getAssetsUrl()
    {
        if($this->_assetsUrl===null)
            $this->_assetsUrl=Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('api.assets'));
        return $this->_assetsUrl;
    }

    /**
    * @param string the base URL that contains all published asset files of this module.
    */
    public function setAssetsUrl($value)
    {
        $this->_assetsUrl=$value;
    }

    public function registerCss($file, $media='all')
    {
        $href = $this->getAssetsUrl().'/css/'.$file;
        return '<link rel="stylesheet" type="text/css" href="'.$href.'" media="'.$media.'" />';
    }

    public function registerJs($file)
    {
        $href = $this->getAssetsUrl().'/js/'.$file;
        return '<script type="text/javascript" src="'.$href.'"></script>';
    }

    public function registerImage($file)
    {
        return $this->getAssetsUrl().'/images/'.$file;
    }
 	public function checkToken()
    {
    	if (isset($_REQUEST['username'])&&isset($_REQUEST['token'])){
    	
    	}else{
    		$result = array('code'=>-1,'msg'=>'用户未登录','ext'=>'0002');
    		echo json_encode($result);
    		die();
    	}
    }
}
