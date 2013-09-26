<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid'); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level'); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descr'); ?>
		<?php echo $form->textArea($model,'descr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nick'); ?>
		<?php echo $form->textField($model,'nick',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nick'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_credit_score'); ?>
		<?php echo $form->textField($model,'seller_credit_score'); ?>
		<?php echo $form->error($model,'seller_credit_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_url'); ?>
		<?php echo $form->textField($model,'detail_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'detail_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taoke_url'); ?>
		<?php echo $form->textField($model,'taoke_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'taoke_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic_url'); ?>
		<?php echo $form->textField($model,'pic_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pic_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'volume'); ?>
		<?php echo $form->textField($model,'volume'); ?>
		<?php echo $form->error($model,'volume'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->