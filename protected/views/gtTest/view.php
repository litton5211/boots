<?php
$this->breadcrumbs=array(
	'Gt Tests'=>array('index'),
	$model->ArtID,
);

$this->menu=array(
	array('label'=>'List GtTest', 'url'=>array('index')),
	array('label'=>'Create GtTest', 'url'=>array('create')),
	array('label'=>'Update GtTest', 'url'=>array('update', 'id'=>$model->ArtID)),
	array('label'=>'Delete GtTest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ArtID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GtTest', 'url'=>array('admin')),
);
?>

<h1>View GtTest #<?php echo $model->ArtID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ArtID',
		'ArtTitle',
		'ArtSort',
		'ArtAddTime',
		'ArtUpdateTime',
		'ArtDescription',
		'ArtContent',
		'ArtPic',
	),
)); ?>
