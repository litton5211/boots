
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'activity-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','enctype'=>'multipart/form-data'),
)); ?>

	<fieldset>
		<div id="legend" class="">
	    	<legend class="">活动详情</legend>
	    </div>
		<?php echo $form->errorSummary($model); ?>
		
		<div class="control-group">
			<?php echo $form->labelEx($model,'title',array('class'=>'control-label')); ?>
        	
         	<div class="controls">
         		<?php echo $form->textField($model,'title',array('class'=>'input-xlarge')); ?>
          	</div>
		</div>
		
		<div class="control-group">
			<?php echo $form->labelEx($model,'pic_url',array('class'=>'control-label')); ?>
        	
         	<div class="controls">
         		<?php echo $form->fileField($model,'pic_url',array('class'=>'input-xlarge')); ?>           	
          	</div>
		</div>
		
		
		
		<div class="control-group">
			<?php echo $form->labelEx($model,'quota_num',array('class'=>'control-label')); ?>    	
         	<div class="controls">
         		<?php echo $form->textField($model,'quota_num',array('class'=>'input-xlarge')); ?>
          	</div>
		</div>
		
		<div class="control-group">
			<?php echo $form->labelEx($model,'begin_time',array('class'=>'control-label')); ?>
         	<div class="controls date form_datetime" data-date-format="yyyy-mm-dd" >
         		<?php echo $form->textField($model,'begin_time',array('class'=>'input-small','placeholder'=>'开始时间')); ?>
         		<span class="add-on"><i class="icon-th"></i></span>
          	</div>
		</div>
		<div class="control-group">
			<?php echo $form->labelEx($model,'end_time',array('class'=>'control-label')); ?>
         	<div class="controls date form_datetime" data-date-format="yyyy-mm-dd" >
         		<?php echo $form->textField($model,'end_time',array('class'=>'input-small','placeholder'=>'结束时间')); ?>
         		<span class="add-on"><i class="icon-th"></i></span>
          	</div>
		</div>
		
		<div class="control-group">
        	<?php echo $form->labelEx($model,'content',array('class'=>'control-label')); ?>
          	<div class="controls">
            	<?php echo $form->textArea($model,'content',array('class'=>'input-file')); ?>
          	</div>
        </div>
		
		<div class="control-group">
          <div class="controls">
          	<?php echo CHtml::submitButton('保存',array('class'=>'btn btn-success')); ?>
          </div>
        </div>
	</fieldset>
	
	
<?php $this->endWidget(); ?>

<?php $this->widget('ext.kindeditor.KindEditorWidget',array(
		    'id'=>'Activity_content',   //Textarea id
		    // Additional Parameters (Check http://www.kindsoft.net/docs/option.html)
		    'items' => array(
		        'width'=>'700px',
		        'height'=>'300px',
		        'themeType'=>'simple',
		        'allowImageUpload'=>true,
		        'allowFileManager'=>true,
		        'items'=>array(
		            'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic',
		            'underline', 'removeformat', '|', 'justifyleft', 'justifycenter',
		            'justifyright', 'insertorderedlist','insertunorderedlist', '|',
		            'emoticons', 'image', 'link',),
		    ),
		)); ?>
		
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
    	format:'yyyy-mm-dd',
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1,
        minView:2,
        initialDate:new Date(),
        pickerPosition: "bottom-left"
    });
</script>
