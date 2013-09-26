
<div class="hero-unit">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form-inline'),
)); ?>
	<?php echo $form->label($model,'parent_id',array('class'=>'control-label')); ?>：
	<?php echo $form->textField($model,'parent_id',array('class'=>'input-small','placeholder'=>'分类级别')); ?>
	
	<?php echo $form->label($model,'type_name',array('class'=>'control-label')); ?>：
	<?php echo $form->dropDownList($model,'type_name',Yii::app()->params["sys_param"]["PRODUCT_TYPE"]); ?>
	
	<?php echo CHtml::submitButton('查询',array('class'=>'btn btn-primary')); ?>
<?php $this->endWidget(); ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'activity-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'type_name',
		array(       
            'name'=>'parent_id',   
            'type'=>'raw',          
            'value'=>'$data->parent_id=="0"?"一级分类":"二级分类"',
            'htmlOptions'=>array('align'=>'left'),
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
	'itemsCssClass'=>'table table-condensed table-bordered table-hover',
	'htmlOptions'=>array('contenteditable'=>true),
	'rowCssClass'=>array('info',''),
)); ?>

