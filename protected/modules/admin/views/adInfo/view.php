<?php
$this->breadcrumbs=array(
	'Ad Infos'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List AdInfo', 'url'=>array('index')),
	array('label'=>'Create AdInfo', 'url'=>array('create')),
	array('label'=>'Update AdInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AdInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AdInfo', 'url'=>array('admin')),
);
?>

<h1>View AdInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'object_id',
		'object_type',
		'title',
		'publish_time',
		'pic_url',
		'last_update_time',
		'status',
	),
)); ?>
