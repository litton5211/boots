<?php
$this->breadcrumbs="日志管理";
?>
<div class="content-box-content">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'connect-log-grid',
	'htmlOptions'=>array('class'=>'tab-content default-tab'),
	'summaryCssClass'=>'notification',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'log_item',
		array(
			'name'=>'connect_mode',
			'type'=>'raw',
			'value'=>'Yii::app()->params["sys_param"]["CONNECT_MODE"][$data->connect_mode]',
		),
		'connect_with',
		array(
			'name'=>'connect_type',
			'type'=>'raw',
			'value'=>'Yii::app()->params["sys_param"]["CONNECT_TYPE"][$data->connect_type]',
		),
		'create_time',
		'content',
	),
)); ?>
	</div>