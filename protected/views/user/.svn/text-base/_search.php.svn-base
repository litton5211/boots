<div class="notification form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<ul style="padding:10px;">
		<li class="inline">
			<?php echo $form->label($model,'user_name',array('class'=>'inline')); ?>
			<?php echo $form->textField($model,'user_name',array('size'=>15,'maxlength'=>20)); ?>
		</li>
		<li class="inline">
			<?php echo $form->label($model,'role_id',array('class'=>'inline')); ?>
			<?php echo $form->textField($model,'role_id',array('size'=>15,'maxlength'=>20)); ?>
		</li>
		<li class="inline">
			<?php echo CHtml::submitButton('Search',array('class'=>'button')); ?>
		</li>		
	</ul>
	

<?php $this->endWidget(); ?>

</div><!-- search-form -->