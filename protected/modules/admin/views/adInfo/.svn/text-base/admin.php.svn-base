<div class="hero-unit">

	<div id="id">商务推广信息列表</div>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ad-info-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'object_id',
		'object_type',
		'title',
		'publish_time',
		'pic_url',
		/*
		'last_update_time',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
	'itemsCssClass'=>'table table-hover table-bordered',
)); ?>
