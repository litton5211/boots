<div class="notification form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<ul style="padding:10px;">
		<li class="inline">
			<?php echo $form->label($model,'log_item',array('class'=>'inline')); ?>
			<?php echo $form->textField($model,'log_item'); ?>
		</li>
		
		<li class="inline">
			<?php echo $form->label($model,'connect_type',array('class'=>'inline')); ?>
			<?php echo $form->dropDownList($model,'connect_type',Yii::app()->params["sys_param"]["CONNECT_TYPE"],array('style'=>"width:100px",)); ?>
		</li>
		<li class="inline">
			<?php echo $form->label($model,'connect_mode',array('class'=>'inline')); ?>
			<?php echo $form->dropDownList($model,'connect_mode',Yii::app()->params["sys_param"]["CONNECT_MODE"],array('style'=>"width:100px",)); ?>
		</li>
	</ul>
	<ul style="padding:10px;">
		<li class="inline">
			<?php echo $form->label($model,'connect_with',array('class'=>'inline')); ?>
			<?php echo $form->textField($model,'connect_with'); ?>
		</li>

		<li class="inline">
			<?php echo $form->label($model,'create_time',array('class'=>'inline')); ?>
			<?php echo $form->textField($model,'create_time'); ?>
		</li>
		<li class="inline">
			<?php echo CHtml::submitButton('查询',array('class'=>'button')); ?>
		</li>
	</ul>
<?php $this->endWidget(); ?>

</div><!-- search-form -->