<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gt-test-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ArtTitle'); ?>
		<?php echo $form->textField($model,'ArtTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ArtTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArtSort'); ?>
		<?php echo $form->textField($model,'ArtSort'); ?>
		<?php echo $form->error($model,'ArtSort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArtAddTime'); ?>
		<?php echo $form->textField($model,'ArtAddTime'); ?>
		<?php echo $form->error($model,'ArtAddTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArtUpdateTime'); ?>
		<?php echo $form->textField($model,'ArtUpdateTime'); ?>
		<?php echo $form->error($model,'ArtUpdateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArtDescription'); ?>
		<?php echo $form->textArea($model,'ArtDescription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ArtDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArtContent'); ?>
		<?php echo $form->textArea($model,'ArtContent',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ArtContent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArtPic'); ?>
		<?php echo $form->textField($model,'ArtPic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ArtPic'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->