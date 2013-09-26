<div class="content-box-header">
     <h3 style="cursor: s-resize;">新增用户</h3>
    <div class="clear"></div>
</div>
<div class="content-box-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repeatpwd'); ?>
		<?php echo $form->passwordField($model,'repeatpwd',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'repeatpwd'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Yii::app()->params["sys_param"]["USER_STATUS"]); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'role_id'); ?>
		<?php echo $form->dropDownList($model,'role_id',Yii::app()->params["sys_param"]["USER_ROLE"]); ?>
		<?php echo $form->error($model,'role_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('新增保存',array('class'=>'button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>