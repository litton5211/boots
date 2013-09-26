
<div class="hero-unit">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form-inline'),
)); ?>
	<?php echo $form->label($model,'brand',array('class'=>'control-label')); ?>：
	<?php echo $form->textField($model,'brand',array('class'=>'input-small','placeholder'=>'品牌')); ?>
	
	<?php echo $form->label($model,'name',array('class'=>'control-label')); ?>：
	<?php echo $form->textField($model,'name',array('class'=>'input-small','placeholder'=>'名称')); ?>
	
	<?php echo CHtml::submitButton('查询',array('class'=>'btn btn-primary')); ?>
<?php $this->endWidget(); ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'activity-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'brand',
		'name',
		'price',
		'pic_url',
		/*
		'end_time',
		'quota_num',
		'pic_url',
		'product_id',
		'like_count',
		'collect_count',
		'comment_count',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
	'itemsCssClass'=>'table table-condensed table-bordered table-hover',
	'htmlOptions'=>array('contenteditable'=>true),
	'rowCssClass'=>array('info',''),
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
