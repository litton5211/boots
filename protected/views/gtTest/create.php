<?php
$this->breadcrumbs=array(
	'Gt Tests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GtTest', 'url'=>array('index')),
	array('label'=>'Manage GtTest', 'url'=>array('admin')),
);
?>

<h1>Create GtTest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>