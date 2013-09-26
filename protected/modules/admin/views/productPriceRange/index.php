<?php
$this->breadcrumbs=array(
	'Product Price Ranges',
);

$this->menu=array(
	array('label'=>'Create ProductPriceRange', 'url'=>array('create')),
	array('label'=>'Manage ProductPriceRange', 'url'=>array('admin')),
);
?>

<h1>Product Price Ranges</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
