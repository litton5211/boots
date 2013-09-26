<?php
$this->breadcrumbs=array(
	'Goods Infos'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List GoodsInfo', 'url'=>array('index')),
	array('label'=>'Create GoodsInfo', 'url'=>array('create')),
	array('label'=>'Update GoodsInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GoodsInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsInfo', 'url'=>array('admin')),
);
?>

<h1>View GoodsInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cid',
		'level',
		'title',
		'descr',
		'nick',
		'seller_credit_score',
		'detail_url',
		'taoke_url',
		'pic_url',
		'price',
		'volume',
	),
)); ?>
