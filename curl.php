<?php

 function curl_url($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$output = curl_exec($ch); 
	curl_close($ch);  
	return  $output;   
}
	var_dump(curl_url("http://42.120.5.248/index.php/api/default/activityView?token=c4164a150bd654db8ecc40ba7126fdcf&activityId=3"));
?>