<?php
$this->breadcrumbs=array(
	'Webconfigs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<h2><a href="#">网站内容管理</a> &raquo; <a href="#" class="active">系统设置</a></h2>
<div id="main">
<h3>系统设置</h3>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>