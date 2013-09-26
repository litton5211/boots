<div class="content-box-header">
     <h3 style="cursor: s-resize;">修改密码</h3>
    <div class="clear"></div>
</div>
<div class="content-box-content">

<?php if(Yii::app()->user->hasFlash('commentSubmitted ')): ?>
            <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('commentSubmitted '); ?>
            </div>
<?php endif; ?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'oldpwd'); ?>
		<?php echo $form->passwordField($model,'oldpwd',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'oldpwd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newpwd'); ?>
		<?php echo $form->passwordField($model,'newpwd',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'newpwd'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->labelEx($model,'repeatpwd'); ?>
		<?php echo $form->passwordField($model,'repeatpwd',array('class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'repeatpwd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('修改密码',array('class'=>'button')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div>