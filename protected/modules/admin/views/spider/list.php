
<div class="hero-unit">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form-inline'),
)); ?>
	<?php echo $form->label($model,'site_id',array('class'=>'control-label')); ?>：
	<?php echo $form->dropDownList($model,'site_id',Yii::app()->params["sys_param"]["SITE_NAME"]); ?>
	
	<?php echo $form->label($model,'list_name',array('class'=>'control-label')); ?>：
	<?php echo $form->textField($model,'list_name',array('class'=>'input-small','placeholder'=>'标题关键字')); ?>
	
	
	
	<?php echo CHtml::submitButton('查询',array('class'=>'btn btn-primary')); ?>
<?php $this->endWidget(); ?>
</div>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'dataProvider'=>$dataProvider,
	'summaryCssClass'=>'content-box-header',
	'columns'=>array(
		array(       
            'name'=>'id',   
            'type'=>'raw',        
            'value'=>'"<input name=\"nid[]\" type=\"checkbox\" value=\"$data->id\">"',
            'htmlOptions'=>array('style'=>'padding:0px'),
        ),
		array(       
            'name'=>'site_id',   
            'type'=>'raw',        
            'value'=>'Yii::app()->params["sys_param"]["SITE_NAME"][$data->site_id]',
            'htmlOptions'=>array('style'=>'padding:0px'),
        ),
        array(       
            'name'=>'list_name',   
            'type'=>'raw',        
            'value'=>'$data->list_name',
            'htmlOptions'=>array('align'=>'left'),
        ),
		array(       
            'name'=>'list_url',   
            'type'=>'raw',
			'htmlOptions'=>array('width'=>'100px'),       
            'value'=>'$data->list_url',
        ),     
        array(       
            'name'=>'add_time',   
            'type'=>'raw',        
            'value'=>'date("Y-m-d H:i:s", $data->add_time)',
            'htmlOptions'=>array('align'=>'left'),
        ),
		array(       
            'name'=>'last_update_time',   
            'type'=>'raw',        
            'value'=>'date("Y-m-d H:i:s", $data->last_update_time)',
            'htmlOptions'=>array('align'=>'left'),
        ), 
		array(
			'class'=>'CButtonColumn',
			'template'=>'{refresh} {delete}',
			'buttons'=>array(
        	'refresh' => array(
            	'label'=>'更新',
            	'imageUrl'=>$this->module->registerImage('update.png'),
            	'url'=>'Yii::app()->createUrl("admin/spider/updateList", array("id"=>$data->id))',
        	),
		),
		),
	),
	'itemsCssClass'=>'table table-condensed table-bordered table-hover',
	'htmlOptions'=>array('contenteditable'=>true),
	'rowCssClass'=>array('info',''),
)); ?>

