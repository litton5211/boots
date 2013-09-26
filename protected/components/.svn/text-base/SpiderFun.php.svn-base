<?php
class SpiderFun {
	
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
	
	public static function restRequest($url,$params,$postType)
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
        	//return json_decode($response,true);
        	return $response;
        }

	}
	public static function LefengPaser($spiderPage){
		$url = $spiderPage->page_url;
		if(!$url) return ;
		if (!preg_match('#^http://product\.lefeng\.com/product/\d+\.html$#i', $url)) {
			return ;
		}
		$document = SpiderFun::restRequest($url,array(),0);
		$product = new Product();
		$sort=-1;
		if (preg_match('#<div class="main mauto"[^>]*>.*<p class="path">(.*)</p>#Us', $document, $info)) {
			$inf = trim(strip_tags($info[1]));
			preg_match_all('|([^&]*)&gt|Us', $inf, $nav) ;
			if(sizeof($nav[1])==3){
				$productType = ProductType::model()->find('type_name=:type_name',array('type_name'=>trim($nav[1][1])));
				if (empty($productType)){
					$productType = new ProductType;
					$productType->type_name=trim($nav[1][1]);
					$productType->parent_id=0;
					$productType->save();	
				}
				$fistType=$productType->id;
				$productType2 = ProductType::model()->find('type_name=:type_name',array('type_name'=>trim($nav[1][2])));
				if (empty($productType2)){
					$productType2 = new ProductType;
					$productType2->type_name=trim($nav[1][2]);
					$productType2->parent_id=$fistType;
					$productType2->save();	
				}
				$sort=$productType2->id;
			}
			//var_dump($nav);
		}
		$product->from_url = $url;
		$product->from_pid = $spiderPage->id;
		//产品名称
		if (preg_match('#<span class="pname">(.*)</span>#Us', $document, $info)) {
			$inf = trim(strip_tags($info[1]));
			$product->name = $inf;
		}
		//产品名称第二选择
		if (preg_match('#>商品名称.*</th>[^>]*>(.*)</td>#iUs', $document, $info)) {
			$inf = trim(strip_tags($info[1]));
			if(!empty($inf)){
				$product->name = $inf;
			}
		}
		//产品品牌
		if (preg_match('#<p class="brand">.*<a.*>(.*)-#iUs', $document, $info)) {
			$inf = trim(strip_tags($info[1]));
			if(!empty($inf)){
				$product->brand= trim($inf);
			}
		}
		
		//产品价格
		if (preg_match('#<i class="add_pri" id="add_price">￥(.*)</i>#Us', $document, $info)) {
			$inf = trim(strip_tags($info[1]));
			$product->price = $inf;
		}
		//产品规格
		if (preg_match('#>产品规格.*</th>[^>]*>(.*)</td>#iUs', $document, $info)) {
			$inf = trim(strip_tags($info[1]));
			$product->specification = $inf;
		}
		//适合人群 	
		if (preg_match('#>适合人群 .*</th>[^>]*>(.*)</td>#iUs', $document, $info)) {
			$inf = trim(strip_tags($info[1]));
			$product->apply_crowd = $inf;
		}
		$product->save();
		//产品图片
		if (preg_match('#<dl id="imgshow">.*<dd>(.*)</dd>#iUs', $document, $info)) {
			if (preg_match_all('#<a.*supsrc="(.*)"#iUs', $info[1], $pics)) {
				$time=time();
				//$pic_path=Yii::app()->request->baseUrl.'/images/product_pic/'.$spiderPage->site_id.'_'.$spiderPage->id."/"
				$pic_path=dirname(Yii::app()->BasePath).'/images/product_pic/'.$spiderPage->site_id.'_'.$spiderPage->id."/";
				if(is_dir($pic_path)){
					CommonUse::deldir($pic_path);
				}
				$oldumask=umask(0);
				mkdir($pic_path,0777,true);
				for ($i=0;$i<sizeof($pics[1]);$i++){
					$pic = SpiderFun::restRequest($pics[1][$i],array(),0);
					if($pic){
						@file_put_contents($pic_path.$time.$i.'.jpg', $pic);
					}
        			
				}
				$product->pic_url = '/images/product_pic/'.$spiderPage->site_id.'_'.$spiderPage->id."/".$time.'0.jpg';
				$product->last_edit_time = time();
				$product->save();
			}

		}
		$productSort = new ProductSort;
		$productSort->type_id=$sort;
		$productSort->product_id=$product->id;
		$productSort->save();
		
		
		
		
	}
}
 ?>
