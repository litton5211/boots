<?php
$this->breadcrumbs="用户管理";
?>
<div class="content-box-content">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
<!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'htmlOptions'=>array('class'=>'tab-content default-tab'),
	'summaryCssClass'=>'notification',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'user_name',
		array(
			'name'=>'role_id',
			'type'=>'raw',
			'value'=>'Yii::app()->params["sys_param"]["USER_ROLE"][$data->role_id]',
		),
		array(
			'name'=>'status',
			'type'=>'raw',
			'value'=>'Yii::app()->params["sys_param"]["USER_STATUS"][$data->status]',
		),
		array(
			'name'=>'last_login_time',
			'type'=>'raw',
			'value'=>'date("Y-m-d H:i:s",$data->last_login_time)',
		),
		'last_login_ip',
		'login_count',
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
			'template'=>'{view}{delete}',
		),
	),
)); ?>
</div>
