<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sys_name')); ?>:</b>
	<?php echo CHtml::encode($data->sys_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sys_ip')); ?>:</b>
	<?php echo CHtml::encode($data->sys_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sys_desc')); ?>:</b>
	<?php echo CHtml::encode($data->sys_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_userid')); ?>:</b>
	<?php echo CHtml::encode($data->create_userid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('operator_userid')); ?>:</b>
	<?php echo CHtml::encode($data->operator_userid); ?>
	<br />

	*/ ?>

</div>