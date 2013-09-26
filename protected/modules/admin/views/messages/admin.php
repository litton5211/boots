<?php
$this->breadcrumbs=array(
	'Messages'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('messages-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2><a href="#">网站内容管理</a> &raquo; <a href="#" class="active">留言管理</a></h2>
<div id="main">
<?php echo CHtml::beginForm('','',array('class'=>'jNice')); ?>
    <h3>留言列表</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'messages-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
        array(       
            'name'=>'MsgID',   
            'type'=>'raw',        
            'value'=>'"<input name=\"nid[]\" type=\"checkbox\" value=\"$data->MsgID\">"',
            'htmlOptions'=>array('style'=>'padding:0px'),
        ),
        array(
            'name'=>'MsgName',
            'value'=>'$data->MsgName',
            'htmlOptions'=>array('style'=>'padding:0px'),
        ),
        array(
            'name'=>'MsgIsAudit',
            'type'=>'raw',
            'value'=>'$data->MsgIsAudit? "":"<font color=\"red\">未审核</font>"',
            'htmlOptions'=>array('style'=>'padding:0px;margin:0px'),
         ),
		'MsgTel',
        'MsgIP',
		'MsgEmail',      
		array(
			'class'=>'CButtonColumn',
		    'buttons'=>array(
			   'update'=>array(
		           'label'=>'修改',	
		           'imageUrl'=>false,
		           'options'=>array('class'=>'edit'),
		               ),
		        'delete'=>array(
		           'label'=>'删除',  
		           'imageUrl'=>false,
		           'options'=>array('class'=>'delete'), 
		               ),
		        'reply'=>array(
		          'label'=>'回复',
		          'url'=>'array("reply","id"=>$data->MsgID)',
		          'imageUrl'=>false,
		          'options'=>array('class'=>'colorbox'),
		               ),
		        ),
		    'htmlOptions'=>array('class'=>'action'),
		    'template'=>'{update}{delete}{reply}',		
		    ),		
	),
	'template'=>'{items}{pager}',
	'hideHeader'=>true,
	'selectableRows'=>1,
)); ?>
<div class="clear"></div>
<h3></h3>
<?php
echo CHtml::ajaxSubmitButton(
    '批量删除',
    array('messages/delete'),
    array(
        'success'=>'function(){location.reload()}',
    ),
    array(
        'type'=>'submit',
	    'confirm'=>'你确定要删除这些项吗?',
    )
);
echo CHtml::ajaxSubmitButton(
    '批量审核',
    array('messages/audit/flag/1'),
    array(
        'success'=>'function(){location.reload()}',
    ),
    array(
        'type'=>'submit',
	    'confirm'=>'你确定这些项通过审核吗?',
    )
);
echo CHtml::ajaxSubmitButton(
    '取消审核',
    array('messages/audit/flag/0'),
    array(
        'success'=>'function(){location.reload()}',
    ),
    array(
        'type'=>'submit',
	    'confirm'=>'你确定这些项取消审核吗?',
    )
);
?>
<div class="clear"></div>
<?php echo CHtml::endForm(); ?>
<p>&nbsp;</p>
</div>