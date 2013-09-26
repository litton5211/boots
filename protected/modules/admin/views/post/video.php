<div class="hero-unit">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		'htmlOptions'=>array('class'=>'form-inline'),
	)); ?>
	<h3>
		<?php 
			$update = date("Y-m-d H:i:s",VideoConf::getConfig()->last_update_time);
			echo "视频最后更新日期：".$update; 
			echo CHtml::ajaxButton ("更新视频源", Yii::app()->createUrl('admin/video/flushVideo'),
	        array('type'=>"POST",
	        	'data'=>array('test'=>'W'),
	       			'success'=>'js:function(string){ alert(string); }'
	         	),
	           	array('class'=>'btn btn-primary')
	           	);
		?>
	</h3>		
		<?php echo $form->label($model,'post_title',array('class'=>'control-label')); ?>：
		<?php echo $form->textField($model,'post_title',array('class'=>'input-small','placeholder'=>'标题关键字')); ?>
		
		<?php echo $form->label($model,'post_time',array('class'=>'control-label')); ?>：
		<div class="input-append date form_datetime" data-date-format="yyyy-mm-dd">
			<?php echo CHtml::textField('Post[begin_time]','',array('class'=>'input-small','placeholder'=>'开始时间')); ?>
			<span class="add-on"><i class="icon-th"></i></span>
		</div>
		<div class="input-append date form_datetime" data-date-format="yyyy-mm-dd">
			<?php echo CHtml::textField('Post[end_time]','',array('class'=>'input-small','placeholder'=>'结束时间')); ?>
			<span class="add-on"><i class="icon-th"></i></span>
		</div>
		<?php echo CHtml::submitButton('查询',array('class'=>'btn btn-primary')); ?>
	<?php $this->endWidget(); ?>

</div>





<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'dataProvider'=>$dataProvider,
	'htmlOptions'=>array('class'=>'content-box'),
	'summaryCssClass'=>'content-box-header',
	'columns'=>array(
		array(       
            'name'=>'id',   
            'type'=>'raw',        
            'value'=>'"<input name=\"nid[]\" type=\"checkbox\" value=\"$data->id\">"',
            'htmlOptions'=>array('style'=>'padding:0px'),
        ),
		array(       
            'name'=>'pic_url',   
            'type'=>'raw',        
            'value'=>'"<img height=\"150\" width=\"150\" src=\"$data->pic_url\">"',
            'htmlOptions'=>array('style'=>'padding:0px'),
        ),
		array(       
            'name'=>'post_desc',   
            'type'=>'raw',        
            'value'=>'"<h5>$data->post_title</h5><br/>".$data->post_desc',
            'htmlOptions'=>array('align'=>'left'),
        ),
        array(       
            'name'=>'video_url',   
            'type'=>'raw',        
            'value'=>'$data->video_url',
            'htmlOptions'=>array('align'=>'left'),
        ),
        array(       
            'name'=>'last_edit_time',   
            'type'=>'raw',        
            'value'=>'date("Y-m-d H:i:s",$data->last_edit_time)',
            'htmlOptions'=>array('align'=>'left'),
        ),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
