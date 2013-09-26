<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-price-range-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'range_f'); ?>
		<?php echo $form->textField($model,'range_f'); ?>
		<?php echo $form->error($model,'range_f'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'range_t'); ?>
		<?php echo $form->textField($model,'range_t'); ?>
		<?php echo $form->error($model,'range_t'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num'); ?>
		<?php echo $form->textField($model,'num'); ?>
		<?php echo $form->error($model,'num'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->