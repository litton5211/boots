<div class="content-box">
<div class="content-box-header">
	<h3>视频源配置信息</h3>
	<div class="clear"></div>
</div>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'content-box-content'),
)); ?>
<fieldset>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



	<p class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'text-input medium-input','size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username'); ?>
	</p>

	<p class="row">
		<?php echo $form->labelEx($model,'token'); ?>
		<?php echo $form->textField($model,'token',array('class'=>'text-input medium-input','size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'token'); ?>
	</p>

	<p class="row">
		<?php echo $form->labelEx($model,'last_update_time'); ?>
		<?php echo $form->textField($model,'last_update_time',array('class'=>'text-input medium-input')); ?>
		<?php echo $form->error($model,'last_update_time'); ?>
	</p>

	

	<p class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</p>
</fieldset>
<?php $this->endWidget(); ?>

</div><!-- form -->





			