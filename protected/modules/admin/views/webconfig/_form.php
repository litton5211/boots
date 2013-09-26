<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'webconfig-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'jNice'),
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model); ?>

	<p>
		<?php echo $form->labelEx($model,'webhost'); ?>
		<?php echo $form->textField($model,'webhost',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'webhost'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'webname'); ?>
		<?php echo $form->textField($model,'webname',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'webname'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'webkeywords'); ?>
		<?php echo $form->textField($model,'webkeywords',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'webkeywords'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'webdescription'); ?>
		<?php echo $form->textArea($model,'webdescription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'webdescription'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'webbeian'); ?>
		<?php echo $form->textField($model,'webbeian',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'webbeian'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'webuser'); ?>
		<?php echo $form->textField($model,'webuser',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'webuser'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'password',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'password'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'webcopyright'); ?>
		<?php echo $form->textArea($model,'webcopyright',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'webcopyright'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'ismsgAudit'); ?>
		<?php echo $form->checkbox($model,'ismsgAudit'); ?>
		<?php echo $form->error($model,'ismsgAudit'); ?>
	</p>

	<p>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</p>

<?php $this->endWidget(); ?>
</fieldset>