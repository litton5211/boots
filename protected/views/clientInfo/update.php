<?php
$this->breadcrumbs=array(
	'Client Infos'=>array('index'),
	$model->client_id=>array('view','id'=>$model->client_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClientInfo', 'url'=>array('index')),
	array('label'=>'Create ClientInfo', 'url'=>array('create')),
	array('label'=>'View ClientInfo', 'url'=>array('view', 'id'=>$model->client_id)),
	array('label'=>'Manage ClientInfo', 'url'=>array('admin')),
);
?>

<h1>Update ClientInfo <?php echo $model->client_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>