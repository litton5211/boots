
<div class="search-form" style="">
	<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'post',
)); ?>
	<ul>
		<li class="searchfield">
			<?php echo $form->label($model,'site_name'); ?>
			<?php echo $form->textField($model,'site_name',array('size'=>40,'maxlength'=>255)); ?>
		</li>
		<li class="row">
			<?php echo $form->label($model,'list_format'); ?>
			<?php echo $form->textField($model,'list_format',array('size'=>40,'maxlength'=>255)); ?>
		</li>
	</ul>
	<ul>
		
		<li class="row">
			<?php echo $form->label($model,'page_format'); ?>
			<?php echo $form->textField($model,'page_format',array('size'=>40,'maxlength'=>255)); ?>
		</li>
		<li class="row">
			<?php echo $form->label($model,'homepage'); ?>
			<?php echo $form->textField($model,'homepage',array('size'=>40,'maxlength'=>255)); ?>
		</li>
	</ul>
	<ul>
		
		<li class="row buttons">
			<?php echo CHtml::submitButton('保存',array('class'=>'button')); ?>
		</li>
		
	</ul>
	

	<?php $this->endWidget(); ?>
</div><!-- search-form -->

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
            'name'=>'site_name',   
            'type'=>'raw',        
            'value'=>'$data->site_name',
            'htmlOptions'=>array('style'=>'padding:0px'),
        ),
		array(       
            'name'=>'list_format',   
            'type'=>'raw',        
            'value'=>'$data->list_format',
            'htmlOptions'=>array('align'=>'left'),
        ),
        array(       
            'name'=>'page_format',   
            'type'=>'raw',        
            'value'=>'$data->page_format',
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
			'template'=>'{refresh} {update} {delete}',
			'buttons'=>array(
        	'refresh' => array(
            	'label'=>'更新',
            	'imageUrl'=>$this->module->registerImage('update.png'),
            	'url'=>'Yii::app()->createUrl("admin/spider/getSiteList", array("id"=>$data->id))',
        	),
		),
		),
	),
)); ?>

