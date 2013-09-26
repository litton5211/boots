<?php
$this->breadcrumbs=array(
	'Client Infos',
);

$this->menu=array(
	array('label'=>'新增客户端', 'url'=>array('create')),
	array('label'=>'管理客户端', 'url'=>array('admin')),
);
?>

<h1>Client Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
