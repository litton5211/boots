<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_pwd'); ?>
		<?php echo $form->textField($model,'user_pwd',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'user_pwd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role_id'); ?>
		<?php echo $form->textField($model,'role_id',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'role_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->