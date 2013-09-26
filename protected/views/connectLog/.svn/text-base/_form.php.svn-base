<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'connect-log-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'from_id'); ?>
		<?php echo $form->textField($model,'from_id'); ?>
		<?php echo $form->error($model,'from_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_id'); ?>
		<?php echo $form->textField($model,'to_id'); ?>
		<?php echo $form->error($model,'to_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'connect_type'); ?>
		<?php echo $form->textField($model,'connect_type'); ?>
		<?php echo $form->error($model,'connect_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->