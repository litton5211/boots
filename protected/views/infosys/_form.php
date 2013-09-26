<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'infosys-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<p>
              <?php echo $form->labelEx($model,'sys_name'); ?>
              <?php echo $form->textField($model,'sys_name',array('id'=>"small-input",'class'=>"text-input small-input")); ?>
              <?php echo $form->error($model,'sys_name'); ?>
    </p>

	<p>
		<?php echo $form->labelEx($model,'sys_ip'); ?>
		<?php echo $form->textField($model,'sys_ip',array('id'=>"small-input",'class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'sys_ip'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'sys_desc'); ?>
		<?php echo $form->textField($model,'sys_desc',array('id'=>"small-input",'class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'sys_desc'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Yii::app()->params["sys_param"]["INFOSYS_STATUS"]); ?>
		<?php echo $form->error($model,'status'); ?>
	</p>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建保存' : '修改保存',array('class'=>'button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->