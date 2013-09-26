<?php
$this->breadcrumbs=array(
	'Connect Logs',
);

$this->menu=array(
	array('label'=>'Create ConnectLog', 'url'=>array('create')),
	array('label'=>'Manage ConnectLog', 'url'=>array('admin')),
);
?>

<h1>Connect Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
