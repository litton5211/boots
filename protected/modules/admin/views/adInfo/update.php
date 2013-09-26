<?php
$this->breadcrumbs=array(
	'Ad Infos'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AdInfo', 'url'=>array('index')),
	array('label'=>'Create AdInfo', 'url'=>array('create')),
	array('label'=>'View AdInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AdInfo', 'url'=>array('admin')),
);
?>

<h1>Update AdInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>