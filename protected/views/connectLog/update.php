<?php
$this->breadcrumbs=array(
	'Connect Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConnectLog', 'url'=>array('index')),
	array('label'=>'Create ConnectLog', 'url'=>array('create')),
	array('label'=>'View ConnectLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ConnectLog', 'url'=>array('admin')),
);
?>

<h1>Update ConnectLog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>