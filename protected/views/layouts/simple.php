<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: 100%;" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $config = Webconfig::model()->findByPk(1); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo CHtml::encode($this->pageTitle.'-'.Yii::app()->name); ?></title>
	<meta name="keywords" content="<?php echo $config['webkeywords'] ?>">
	<meta name="description" content="<?php echo $config['webdescription'] ?> ">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/datetimepicker.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.zh-CN.js"></script>		
</head>

<body style="height: 100%;">
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
		<a class="brand" href="#">美妆宝典</a>
    	<ul class="nav">
    		<li class="active"><a href="#">首页</a></li>
    		<li><a href="#">最新信息</a></li>
    		<li><a href="#">导航</a></li>
    		<li><a href="#">导航栏菜单</a></li>
    	</ul>
    	<ul class="nav pull-right">
			<li><a href="#myModal" data-toggle="modal" data-target="#myModal">登录</a></li>
		</ul>
    </div>
</div>

<?php echo $content; ?>
</body></html>