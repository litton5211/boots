

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'messages-form',
	'enableAjaxValidation'=>true,
)); ?>
<fieldset>
  <p>
		<?php echo $form->labelEx($model,'MsgName'); ?>
		<?php echo $form->textField($model,'MsgName',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'MsgName'); ?>     
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgTel'); ?>
		<?php echo $form->textField($model,'MsgTel',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'MsgTel'); ?>
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgEmail'); ?>
		<?php echo $form->textField($model,'MsgEmail',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'MsgEmail'); ?>  
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgIsAudit'); ?>
		<?php echo "<font color='#999'>审核通过:</font>"?>
		<?php echo $form->checkBox($model,'MsgIsAudit'); ?>
		<?php echo $form->error($model,'MsgIsAudit'); ?>  
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgIP'); ?>
		<?php echo $form->textField($model,'MsgIP',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'MsgIP'); ?>
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgContent'); ?>
		<?php echo $form->textArea($model,'MsgContent',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MsgContent'); ?>  
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgReply'); ?>
		<?php echo $form->textArea($model,'MsgReply',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MsgReply'); ?>  
  </p>  
   <button type="submit"><span><span><?php echo $model->isNewRecord ? '添 加':'修改' ?></span></span></button>
</fieldset>
<?php $this->endWidget(); ?>
