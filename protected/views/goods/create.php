<?php
$this->breadcrumbs=array(
	'Goods Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoodsInfo', 'url'=>array('index')),
	array('label'=>'Manage GoodsInfo', 'url'=>array('admin')),
);
?>

<h1>Create GoodsInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>