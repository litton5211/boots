<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	'enableAjaxValidation'=>true,
    'htmlOptions'=>array('class'=>'jNice'),
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model); ?>
	<p>
		<?php echo $form->labelEx($model,'ProName'); ?>
		<?php echo $form->textField($model,'ProName',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'ProName'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'ProSort'); ?>
	        <?php echo $form->dropDownList($model,'ProSort', $model->getTypeOptions()); ?>      
		<?php echo $form->error($model,'ProSort'); ?>
	</p>

	<p>
		<label>产品图片:<a href="javascript:;" id='ProBigPic' name="Products_ProBigPic" class="inline" style="text-decoration:none;">上传图片</a></label>
		<?php echo $form->textField($model,'ProBigPic',array('size'=>60,'maxlength'=>255,'class'=>'text-long')); ?>
		<?php echo $form->error($model,'ProBigPic'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'Prodescription'); ?>
		<?php echo $form->textArea($model,'Prodescription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Prodescription'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'ProContent'); ?>
 <?php $this->widget('application.extensions.fckeditor.FCKEditorWidget',array(
    "model"=>$model,                # Data-Model
    "attribute"=>'ProContent',         # Attribute in the Data-Model
    "height"=>'400px',
    "width"=>'100%',
    "toolbarSet"=>'Default',          # EXISTING(!) Toolbar (see: fckeditor.js)
    "fckeditor"=>Yii::app()->basePath."/../fckeditor/fckeditor.php",
                                    # Path to fckeditor.php
    "fckBasePath"=>Yii::app()->baseUrl."/fckeditor/",
                                    # Realtive Path to the Editor (from Web-Root)
    "config" => array("EditorAreaCSS"=>Yii::app()->baseUrl.'/css/index.css',),
                                    # Additional Parameter (Can't configure a Toolbar dynamicly)
) ); ?>   
		<?php echo $form->error($model,'ProContent'); ?>
	</p>

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

</fieldset>
<?php $this->endWidget(); ?>
<div style='display:none'>
 <div id="ModalContent"> 
	<h1 style="background:url(none);">上传文件:</h1> 
    <hr /> 
    <?php $fckUrl = Yii::app()->request->baseUrl."/fckeditor/editor/filemanager/connectors/php/upload.php?CurrentFolder=%2Fimage%2F&Type=Image&time="?>
    <form id="frmUpload" target="UploadWindow" enctype="multipart/form-data" action="<?php echo $fckUrl?>" method="post"> 
    <p><input type="file" name="NewFile" id="files" ><br /></p> 
    <p>     
    <button type="button" value="" onClick="SendFile();"><span><span>上 传</span></span><div></div></button> 
    </p> 
    </form> 
 </div>
</div>
<iframe name="UploadWindow" width="0" height="0" style="display:none;"></iframe> 
<iframe frameborder="0" style="display:none;" name="act"></iframe> 