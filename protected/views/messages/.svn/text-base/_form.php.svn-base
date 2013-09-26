<h2>发表留言</h2>
<div name="message" id="contactform">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'messages-form',
	'enableAjaxValidation'=>true,
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
            <ol>
              <li>
        <?php echo $form->labelEx($model,'MsgName'); ?>
		<?php echo $form->textField($model,'MsgName',array('class'=>"text")); ?>
		<?php echo $form->error($model,'MsgName'); ?>
              </li>
              <li>
		<?php echo $form->labelEx($model,'MsgEmail'); ?>
		<?php echo $form->textField($model,'MsgEmail',array('class'=>"text")); ?>
		<?php echo $form->error($model,'MsgEmail'); ?>
              </li>
              <li>
		<?php echo $form->labelEx($model,'MsgTel'); ?>
		<?php echo $form->textField($model,'MsgTel',array('class'=>"text")); ?>
		<?php echo $form->error($model,'MsgTel'); ?>
              </li>
              <li>
		<?php echo $form->labelEx($model,'MsgContent'); ?>
		<?php echo $form->textArea($model,'MsgContent',array('rows'=>10, 'cols'=>40)); ?>
		<?php echo $form->error($model,'MsgContent'); ?>
              </li>
        <?php echo $form->textField($model,'MsgIP',array('style'=>'display:none','value'=>$_SERVER['REMOTE_ADDR']))?>                 
              <li class="buttons">
              <div id="stateStr"></div>
              <?php echo CHtml::submitButton($model->isNewRecord ? 'Send massage' : 'Save'); ?>
              </li>
          </ol>

</div>
<?php $this->endWidget(); ?>