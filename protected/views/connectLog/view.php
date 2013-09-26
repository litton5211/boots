<?php
$this->breadcrumbs=array(
	'Connect Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ConnectLog', 'url'=>array('index')),
	array('label'=>'Create ConnectLog', 'url'=>array('create')),
	array('label'=>'Update ConnectLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ConnectLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConnectLog', 'url'=>array('admin')),
);
?>

<h1>View ConnectLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'from_id',
		'to_id',
		'connect_type',
		'create_time',
		'content',
	),
)); ?>
