<div id="test-main">
<div class="content">
	<div class="title">
		<h2><?php echo CHtml::encode("新增价格区间"); ?></h2>
		
		<hr>
	</div>
	<div class="text">
		 

		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'product-price-range-form',
			'enableAjaxValidation'=>false,
		)); ?>
		
		
			<?php echo $form->errorSummary($model); ?>
			<div class="control-group">
				<?php echo $form->labelEx($model,'range_f',array('class'=>'control-label')); ?>
			    <div class="controls">
		        	<?php echo $form->textField($model,'range_f',array('class'=>'input-xlarge')); ?>
		      	</div>
			</div>
			<div class="control-group">
				<?php echo $form->labelEx($model,'range_t',array('class'=>'control-label')); ?>
			    <div class="controls">
		        	<?php echo $form->textField($model,'range_t',array('class'=>'input-xlarge')); ?>
		      	</div>
			</div>

		
			<div class="control-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success')); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		

	</div>
</div>
</div>
