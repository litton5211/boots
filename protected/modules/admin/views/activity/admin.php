
<div class="hero-unit">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form-inline'),
)); ?>
	<?php echo $form->label($model,'title',array('class'=>'control-label')); ?>：
	<?php echo $form->textField($model,'title',array('class'=>'input-small','placeholder'=>'活动标题')); ?>
	
	<?php echo $form->label($model,'begin_time',array('class'=>'control-label')); ?>：
	<div class="input-append date form_datetime" data-date-format="yyyy-mm-dd">
		<?php echo $form->textField($model,'begin_time',array('class'=>'input-small','placeholder'=>'开始时间')); ?>
		<span class="add-on"><i class="icon-th"></i></span>
	</div>
	<?php echo $form->label($model,'end_time',array('class'=>'control-label')); ?>：
	<div class="input-append date form_datetime" data-date-format="yyyy-mm-dd">
		<?php echo $form->textField($model,'end_time',array('class'=>'input-small','placeholder'=>'结束时间')); ?>
		<span class="add-on"><i class="icon-th"></i></span>
	</div>
	<?php echo CHtml::submitButton('查询',array('class'=>'btn btn-primary')); ?>
<?php $this->endWidget(); ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'activity-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'op_id',
		'title',
		'create_time',
		'begin_time',
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
	'itemsCssClass'=>'table table-hover table-bordered',
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
