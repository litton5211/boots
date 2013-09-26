<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MsgID'); ?>
		<?php echo $form->textField($model,'MsgID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgName'); ?>
		<?php echo $form->textField($model,'MsgName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgTel'); ?>
		<?php echo $form->textField($model,'MsgTel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgEmail'); ?>
		<?php echo $form->textField($model,'MsgEmail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgContent'); ?>
		<?php echo $form->textArea($model,'MsgContent',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgSort'); ?>
		<?php echo $form->textField($model,'MsgSort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgNewsID'); ?>
		<?php echo $form->textField($model,'MsgNewsID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgProID'); ?>
		<?php echo $form->textField($model,'MsgProID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgAddTime'); ?>
		<?php echo $form->textField($model,'MsgAddTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgIsAudit'); ?>
		<?php echo $form->textField($model,'MsgIsAudit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgReply'); ?>
		<?php echo $form->textArea($model,'MsgReply',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgIP'); ?>
		<?php echo $form->textField($model,'MsgIP',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MsgType'); ?>
		<?php echo $form->textField($model,'MsgType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->