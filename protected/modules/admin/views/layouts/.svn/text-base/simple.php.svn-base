<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: 100%;" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php $config = Webconfig::model()->findByPk(1); ?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo CHtml::encode($this->pageTitle.'-'.Yii::app()->name); ?></title>
		<meta name="keywords" content="<?php echo $config['webkeywords'] ?>">
		<meta name="description" content="<?php echo $config['webdescription'] ?> ">
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/datetimepicker.css" rel="stylesheet" type="text/css">
		<?php echo $this->module->registerCss('admin.css', 'screen');?>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js"></script>	
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>	
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.zh-CN.js"></script>	
	</head>

	<body  data-target=".bs-docs-sidebar" data-spy="scroll">
		
		<?php echo $content; ?>
	</body>
</html>