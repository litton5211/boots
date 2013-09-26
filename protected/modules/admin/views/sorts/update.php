<?php
$this->breadcrumbs=array(
	'Sorts'=>array('index'),
	$model->sortid=>array('view','id'=>$model->sortid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sorts', 'url'=>array('index')),
	array('label'=>'Create Sorts', 'url'=>array('create')),
	array('label'=>'View Sorts', 'url'=>array('view', 'id'=>$model->sortid)),
	array('label'=>'Manage Sorts', 'url'=>array('admin')),
);
?>

<div id="main">
    <h3>修改栏目</h3>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>