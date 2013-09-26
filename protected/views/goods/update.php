<?php
$this->breadcrumbs=array(
	'Goods Infos'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsInfo', 'url'=>array('index')),
	array('label'=>'Create GoodsInfo', 'url'=>array('create')),
	array('label'=>'View GoodsInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GoodsInfo', 'url'=>array('admin')),
);
?>

<h1>Update GoodsInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>