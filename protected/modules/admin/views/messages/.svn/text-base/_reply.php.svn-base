<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'messages-form',
	'enableAjaxValidation'=>false,
)); ?>
<fieldset>
  <p>
		<?php echo $form->labelEx($model,'MsgName'); ?>
		<?php echo $form->textField($model,'MsgName',array('size'=>60,'maxlength'=>255,'class'=>'text-long','disabled'=>'true')); ?>
		<?php echo $form->error($model,'MsgName'); ?>     
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgIsAudit'); ?>
		<?php echo "<font color='#999'>审核通过:</font>"?>
		<?php echo $form->checkBox($model,'MsgIsAudit'); ?>
		<?php echo $form->error($model,'MsgIsAudit'); ?>  
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgContent'); ?>
		<?php echo $form->textArea($model,'MsgContent',array('rows'=>6, 'cols'=>50,'disabled'=>'true')); ?>
		<?php echo $form->error($model,'MsgContent'); ?>  
  </p>
  <p>
		<?php echo $form->labelEx($model,'MsgReply'); ?>
                <span>*</span>
		<?php echo $form->textArea($model,'MsgReply',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MsgReply'); ?>  
  </p>  
   <button style="margin:10px 0 0 25px" type="submit"><span><span>确认回复</span></span></button>
</fieldset>
<?php $this->endWidget(); ?>
