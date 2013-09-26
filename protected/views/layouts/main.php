<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: 100%;" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo CHtml::encode($this->pageTitle.'-'.Yii::app()->name); ?></title>
	<meta name="keywords" content="<?php echo $config['webkeywords'] ?>">
	<meta name="description" content="<?php echo $config['webdescription'] ?> ">
	<meta name="author" content="Litton Zheng">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/colorbox.css" />
	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css">
	
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.colorbox-min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".colorbox").colorbox({opacity:0.4, width:"40%"});
	});			
    </script> 
	
</head>

<body style="height: 100%;">

<div id="main">
<div id="header">
	<!--  logo设置-->
  	<div class="logo">
  		<?php echo CHtml::link("<img src=\"" .Yii::app()->request->baseUrl . "/images/logo.png \"  width=\"350\" >",array('/')); ?>
  		
  	</div>
    <div class="top">
		<div class="top_a">
			<a title="手机版" href="#">设为首页</a>&nbsp;&nbsp;-&nbsp;&nbsp;
			<a href="#">加入收藏</a>&nbsp;&nbsp;-&nbsp;&nbsp;
			<?php echo CHtml::link("注销登出",array('/site/logout')); ?>&nbsp;&nbsp;
		</div>
		<form name="search" action="" onsubmit="search_check();" method="post" style="float: right;">
			<div class="top_input">
				<input name="keyword" value="请输入查询信息！" onfocus="if(this.value=='请输入查询信息！') {this.value=''}" onblur="if(this.value=='') this.value='请输入查询信息！'" size="24" type="text">
    		</div> 
			<div class="top_inputimg">
				<input name="submit" src="<?php echo Yii::app()->request->baseUrl; ?>/images/sm_3.gif" align="middle" type="image">
			</div>
		</form>
	
	</div>
	<div class="clear"></div>
	<!-- 导航设置 -->
	<div id="nav">
		<ul id="navmenu"> 
			<li><?php echo CHtml::link("网站首页",array('/')); ?></li>
			<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_line.gif"></li>
			<li style="float:right"><?php echo CHtml::link("登出",array('/site/logout')); ?></li>
		</ul>
	</div>
	<div class="blank5"></div>

	
	<div class="announ">
		<div id="announ">
		<?php if(Yii::app()->user->id){?>
			<p>欢迎[<a href="#" ><?php echo Yii::app()->user->userName;?></a>] 登录</p>
		<?php }?>
		</div>
	</div>
</div>
<!-- 头部设置完毕 -->
<?php echo $content; ?>
<div class="clear"></div>
<?php
    $this->beginContent('application.views.layouts.footer');
    $this->endContent(); 
?>
</body></html>