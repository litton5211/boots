<?php
$this->breadcrumbs=array(
	'Shares'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Share', 'url'=>array('index')),
	array('label'=>'Create Share', 'url'=>array('create')),
	array('label'=>'Update Share', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Share', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Share', 'url'=>array('admin')),
);
?>

<h1>View Share #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'userid',
		'title',
		'content',
		'create_time',
		'pic',
	),
)); ?>
