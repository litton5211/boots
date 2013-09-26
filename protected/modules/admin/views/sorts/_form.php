<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sorts-form',
	'enableAjaxValidation'=>false,
        //'htmlOptions'=>array('class'=>'jNice'),
)); ?>
<script type="text/javascript">
    $(document).ready(function(){
	var sortid = $("#Sorts_SortType").val();
	if(sortid == 4){
		$("#sort_type").hide();
		$("#sort_content").hide();
		$("#sort_Url").show();		
	}
	$("#Sorts_SortType").change(function(){
		var sortid = $("#Sorts_SortType").val();
		if(sortid == 0){
			$("#sort_Fid").hide();
			$("#sort_Url").hide();
			$("#sort_content").show();
			return ;
		}
		if(sortid == 4){
			$("#sort_Fid").hide();
			$("#sort_content").hide();
			$("#sort_Url").show();
			return ;
		}
		$("#sort_Fid").show();
		$("#sort_content").show();
		$("#sort_Url").hide();
	 });
    });
</script>
<fieldset>
	<?php echo $form->errorSummary($model); ?>
	<p>
		<?php echo $form->labelEx($model,'SortName'); ?>
		<?php echo $form->textField($model,'SortName',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'SortName'); ?>
	</p>

        <p id='sort_type'>
               <?php echo $form->labelEx($model,'SortType'); ?> 
               <?php echo $form->dropDownList($model,'SortType', Yii::app()->params["sys_param"]["SORT_TYPE"],array(
							'ajax' => array(
							'type'=>'POST', 
							'url'=>CController::createUrl('sorts/getFid'), 
							'update'=>'#Sorts_SortFID', 
				))); ?>
	       <?php echo $form->error($model,'SortType'); ?>
	</p>
        <p id='sort_Fid' style='display:none'>
		<?php echo $form->labelEx($model,'SortFID'); ?>
		<?php echo $form->dropDownList($model,'SortFID',array()); ?>
		<?php echo $form->error($model,'SortFID'); ?>
	</p>
	<p>
		<?php echo $form->labelEx($model,'SortIsNav'); ?>
		<?php echo $form->checkBox($model,'SortIsNav'); ?>
		<?php echo $form->error($model,'SortIsNav'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'SortOrder'); ?>
		<?php echo $form->textField($model,'SortOrder',array('size'=>60,'maxlength'=>255,'class'=>'text-small')); ?>
		<?php echo $form->error($model,'SortOrder'); ?>
	</p>

	<p id='sort_content'>
		<?php echo $form->labelEx($model,'SortContent'); ?>
		<?php echo $form->textArea($model,'SortContent',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SortContent'); ?>
	</p>
	<p id='sort_Url' style='display:none'>
		<?php echo $form->labelEx($model,'SortUrl'); ?>
		<?php echo $form->textField($model,'SortUrl',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'SortUrl'); ?>		
	</p>
<button name="" type="submit" ><span><span><?php echo $model->isNewRecord ? '添加新栏目' : '修改' ?></span></span><div></div></button>
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

</fieldset>
<?php $this->endWidget(); ?>
