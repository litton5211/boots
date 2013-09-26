<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->ProID,
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->ProID)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ProID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>

<h1>View Products #<?php echo $model->ProID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ProID',
		'ProName',
		'ProSort',
		'ProSmallPic',
		'ProBigPic',
		'ProIsTop',
		'ProAddtime',
		'ProKeywords',
		'Prodescription',
		'ProIsRec',
		'ProIsReview',
		'proDiyValue',
		'ProContent',
		'ProUpdateTime',
		'proClicks',
	),
)); ?>
