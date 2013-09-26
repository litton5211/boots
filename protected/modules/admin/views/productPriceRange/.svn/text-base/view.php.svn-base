<?php
$this->breadcrumbs=array(
	'Product Price Ranges'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductPriceRange', 'url'=>array('index')),
	array('label'=>'Create ProductPriceRange', 'url'=>array('create')),
	array('label'=>'Update ProductPriceRange', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductPriceRange', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductPriceRange', 'url'=>array('admin')),
);
?>

<h1>View ProductPriceRange #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'range_f',
		'range_t',
		'create_time',
		'num',
	),
)); ?>
