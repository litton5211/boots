<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3 id="myModalLabel">活动详情</h3>
</div>
<div class="modal-body">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal','enctype'=>'multipart/form-data'),
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model); ?>
	
	<div class="control-group">
		<?php echo $form->labelEx($model,'post_title',array('class'=>'control-label')); ?>
	    <div class="controls">
        	<?php echo $form->textField($model,'post_title',array('class'=>'input-xlarge')); ?>
      	</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'pic_url',array('class'=>'control-label')); ?>
	    <div class="controls">
        	<?php echo $form->fileField($model,'pic_url',array('class'=>'input-xlarge')); ?>
      	</div>
	</div>
	
	<div class="control-group">
		<?php echo $form->labelEx($model,'menu_order',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'menu_order',Yii::app()->params["sys_param"]["POST_ORDER"],array('class'=>'input-xlarge')); ?>
        </div>
	</div>
	
	<div class="control-group" >
		<?php echo $form->labelEx($model,'post_content',array('class'=>'control-label')); ?>
		<div class="controls"  id="post_content">
			<?php echo $form->textArea($model,'post_content',array('class'=>'input-file')); ?>
		</div>
	</div>
		
	<div class="control-group">
		<?php echo $form->labelEx($model,'post_desc',array('class'=>'control-label')); ?>
		<div class="controls">
			<label class="checkbox">
				<?php  echo Chtml::checkBoxList('Post[autoGetDesc]','',array('1'=>'www'));?>自动生成摘要？
			</label>
			<?php echo $form->textArea($model,'post_desc',array('rows'=>'5','cols'=>"60",'style'=>'width:700px')); ?>
		</div>
	</div>
	
	<div class="control-group">
    	<div class="controls">
        	<?php echo CHtml::submitButton('保存',array('class'=>'btn btn-success')); ?>
        </div>
   	</div>
        
	
</fieldset>
<?php $this->endWidget(); ?>
</div>

<?php $this->widget('ext.kindeditor.KindEditorWidget',array(
		    'id'=>'Post_post_content',   //Textarea id
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
    
    $("#Post_autoGetDesc_0").change(function(){
    	var test = document.getElementById("Post_autoGetDesc_0").checked; 
    	if(test){
    		 $("#Post_post_desc").attr({'readonly':'readonly'});
    	}else{
    		 $("#Post_post_desc").attr({'readonly':false});
    	}
		
		 
	});
</script>
