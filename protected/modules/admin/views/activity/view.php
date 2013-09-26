<?php
$this->breadcrumbs=array(
	'Activities'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Activity', 'url'=>array('index')),
	array('label'=>'Create Activity', 'url'=>array('create')),
	array('label'=>'Update Activity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Activity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Activity', 'url'=>array('admin')),
);
?>

<h1>View Activity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'op_id',
		'title',
		'content',
		'create_time',
		'begin_time',
		'end_time',
		'quota_num',
		'pic_url',
		'product_id',
		'like_count',
		'collect_count',
		'comment_count',
	),
)); ?>
