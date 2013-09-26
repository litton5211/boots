
<div class="hero-unit">

	Manage Product Price Ranges
	<br/>
	
</div>
<?php echo CHtml::link('新增', array('productPriceRange/create'),array('class'=>'btn btn-primary',
						'id'=>"modal-1",'data-toggle'=>'modal','data-target'=>'#myModal'));?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'activity-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'range_f',
		'range_t',
		'create_time',
		'num',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
	'itemsCssClass'=>'table table-condensed table-bordered table-hover',
	'htmlOptions'=>array('contenteditable'=>true),
	'rowCssClass'=>array('info',''),
)); ?>


<div id="myModal" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
				<div class="modal-body">
					<p>
						显示信息2
					</p>
				</div>
				
</div>

