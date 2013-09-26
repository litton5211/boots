<?php
$this->breadcrumbs=array(
	'Messages'=>array('index'),
	$model->MsgID=>array('view','id'=>$model->MsgID),
	'Update',
);
?>
<?php echo $this->renderPartial('_reply', array('model'=>$model)); ?>
