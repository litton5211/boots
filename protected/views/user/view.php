
<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_name',
		'last_login_time',
		'last_login_ip',
		'login_count',
		'create_time',
		'update_time',
		'status',
		'role_id',
	),
)); ?>
