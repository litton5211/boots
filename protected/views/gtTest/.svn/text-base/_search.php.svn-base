<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ArtID'); ?>
		<?php echo $form->textField($model,'ArtID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArtTitle'); ?>
		<?php echo $form->textField($model,'ArtTitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArtSort'); ?>
		<?php echo $form->textField($model,'ArtSort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArtAddTime'); ?>
		<?php echo $form->textField($model,'ArtAddTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArtUpdateTime'); ?>
		<?php echo $form->textField($model,'ArtUpdateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArtDescription'); ?>
		<?php echo $form->textArea($model,'ArtDescription',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArtContent'); ?>
		<?php echo $form->textArea($model,'ArtContent',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArtPic'); ?>
		<?php echo $form->textField($model,'ArtPic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->