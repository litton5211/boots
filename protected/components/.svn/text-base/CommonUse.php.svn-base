<?php
class CommonUse {
	
	public static function menu(){
		$menu = Sorts::model()->findAllByAttributes(array('SortIsNav'=>1),array('order'=>'`SortOrder` ASC'));
		$label = array(array('label'=>'首页','url'=>'first'));
		foreach($menu as $menu){
			if($menu->SortType == 4 && stristr($menu->SortUrl,'.'))
			 array_push($label, array('label'=>$menu->SortName,'url'=>$menu->SortUrl,'linkOptions'=>array('target'=>'_blank')));
			    elseif($menu->SortType == 4) array_push($label, array('label'=>$menu->SortName,'url'=>Yii::app()->request->baseUrl.'/index.php/'.$menu->SortUrl));
			    else array_push($label, array('label'=>$menu->SortName,'url'=>array('page/index','id'=>$menu->sortid)));
		}
		return $label;
	}
	
	
	public static function formatUrl($url){
		if(!$url) return ;
		if(stristr($url,'http://')){
			return $url;
		}
		if(stristr($url,'www') || stristr($url,'.')){
			return $url = "http://".$url;		
		}
		return $url;
	}
	
	public static function RestRequest($url,$params,$postType)
	{
		//post
		if ($postType){
			$options[CURLOPT_POST] = true;
            $queryString = '';

            foreach($params as $key => $value) {
                $queryString .= '&'. $key .'='. urlencode($value);
            }
            $queryString = trim($queryString, '&');

            $options[CURLOPT_POSTFIELDS] = $queryString;
		}else {
			//get
			$queryString = '';
            foreach($params as $key => $value) {
                $queryString .= '&'. $key .'='. urlencode($value);
            }
            $queryString = trim($queryString, '&');
            if (strpos($url, '?') > 0) {
                $url .= '&' . $queryString;
            } else {
                $url .= '?' . $queryString;
            }
		}
		$options[CURLOPT_URL] = $url;
        $options[CURLOPT_PORT] = 80;
        $options[CURLOPT_TIMEOUT] = 0;
        $options[CURLOPT_RETURNTRANSFER] = true;
        
        $curl = curl_init();

        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);
        $header = curl_getinfo($curl);
        curl_close($curl);
        if(!in_array($header['http_code'], array(0, 200))){
        	return false;
        }else {
        	return json_decode($response,true);
        }

	}
	//删除非空目录
	function deldir($dir) {
	    $dh=opendir($dir);
	    while ($file=readdir($dh)) {
	        if($file!="." && $file!="..") {
	            $fullpath=$dir."/".$file;
	            if(!is_dir($fullpath)) {
	                unlink($fullpath);
	            } else {
	                deldir($fullpath);
	            }
	        }
	    }
	    closedir($dh);
	    if(rmdir($dir)) {
	        return true;
	    } else {
	        return false;
	    }
	}
	//下拉菜单
	function dpMenu($order,$opt) {
		if($order=="0"){
			$button="<div class='btn btn-primary btn-small'>普通</div>";
		}elseif ($order=="1"){
			$button="<div class='btn btn-success btn-small'>商业</div>";
		}elseif ($order=="2"){
			$button="<div class='btn btn-warning btn-small'>置顶</div>";
		}
		$html = $button."<div class=\"btn-group\">";
		
		$icon="icon-cog";
		if(isset($opt['icon'])){
			$icon=$opt['icon'];
		}
		$html=$html."<a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"$icon  icon-white\"></i><span class=\"caret\"></span></a>" ;
		 	
		$html=$html."<ul class=\"dropdown-menu\">";
		$action="";
	    foreach ( $opt["action"] as $key => $value ) {
       		$action=$action."<li><a href=\"$value[url]\"$value[htmlOpt]><i class=\"$value[inIcon]\"></i>$key</a></li>";
		}
	    $html=$html.$action."</ul></div>";  
	    echo  $html; 
	}
	/**
	 * 判断远程资源是否存在
	 */
	public static function curlRes($url){
		$ch = curl_init(); 
		$timeout = 10; 
		curl_setopt ($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_HEADER, 1); 
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
		$contents = curl_exec($ch);
		if (preg_match("/404/", $contents)){
			return false;
		}else{
			return true;
		}
	}
}
 ?>
