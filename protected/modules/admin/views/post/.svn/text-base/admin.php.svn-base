<div class="hero-unit">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form-inline'),
)); ?>
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

     <?php if(Yii::app()->user->hasFlash('commentSubmitted ')): ?>
     	<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<h4>提示!</h4>
			<strong>处理成功!</strong> <?php echo Yii::app()->user->getFlash('commentSubmitted '); ?>
		</div>
		<script type="text/javascript">
			$(".alert-success").delay(2000).hide(1000);
		</script>
     <?php endif; ?>
   
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(       
            'name'=>'id',   
            'type'=>'raw',  
			'htmlOptions'=>array('width'=>'60px'),
	   	   	'headerHtmlOptions'=>array('width'=>'3%'),      
            'value'=>'"<input name=\"nid[]\" type=\"checkbox\" value=\"$data->id\">"',
        ),
		array(       
            'name'=>'pic_url',   
            'type'=>'raw',     
			'headerHtmlOptions'=>array('width'=>'15%'),     
            'value'=>'"<img height=\"150\" width=\"150\"  class=\"img-rounded\" src=\"$data->pic_url\">"',
        ),
		array(       
            'name'=>'post_title',   
            'type'=>'raw',        
			'headerHtmlOptions'=>array('width'=>'40%'),   
            'value'=>'$data->post_title.$data->menu_order',
            'htmlOptions'=>array('align'=>'left'),
        ),
        array(       
            'name'=>'post_time',   
            'type'=>'raw',        
			'headerHtmlOptions'=>array('width'=>'25%'),   
            'value'=>'"CT：".date("Y-m-d H:m:i",$data->post_time)."<br/>UT：".date("Y-m-d H:m:i",$data->last_edit_time)',
            'htmlOptions'=>array('align'=>'left'),
        ),
		
		array(       
            'type'=>'raw',        
			'headerHtmlOptions'=>array('width'=>'5%'),   
            'value'=>'CommonUse::dpMenu($data->menu_order,array("action"=>array(' .
            		'"商业推广"=>array("url"=>"order?type=1&id=$data->id",' .
            					  '"inIcon"=>"icon-arrow-up",'.
            					  '"htmlOpt"=>" id=test "),
            		"置顶推广"=>array("url"=>"order?type=2&id=$data->id",' .
            					  '"inIcon"=>"icon-arrow-up",'.
            					  '"htmlOpt"=>" id=test "),
            		"取消推广"=>array("url"=>"order?type=0&id=$data->id",' .
            					  '"inIcon"=>"icon-arrow-up",'.
            					  '"htmlOpt"=>" id=test "))))',
            'htmlOptions'=>array('align'=>'left'),
        ),
		array(
            'class'=>'CButtonColumn',
            'headerHtmlOptions'=>array('width'=>'15%'),
            'header'=>'操作',
            'buttons'=>array(
                    'view'=>array(
                    	'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
                    	'label'=>'查看',
                    	'options'=>array('id'=>"modal-1",'data-toggle'=>'modal','data-target'=>'#myModal'),
                    	'url'=>'Yii::app()->createURL("admin/post/view",array("id"=>$data->id))'
                    ),
                    'update'=>array(
                    	'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
                      	'label'=>'更新',
                      	'options'=>array('id'=>"modal-1",'data-toggle'=>'modal','data-target'=>'#myModal'),
                      	'url'=>'Yii::app()->createURL("admin/post/update",array("id"=>$data->id))'
                     ),
               ) ,
            'template'=>'{view}{update}{delete}',
        ),

	),
	'itemsCssClass'=>'table table-condensed table-bordered table-hover',
	'htmlOptions'=>array('contenteditable'=>true),
	'rowCssClass'=>array('info',''),
)); ?>

<div id="myModal" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
				<div id="myModal-body" class="modal-body">
					<p>
					dd
					</p>
				</div>
				
</div>

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
	$("a[data-toggle=modal]").click(function(){
	    var target = $(this).attr('data-target');
	    var url = $(this).attr('href');
	    $(target).load(url);
	});

</script>

