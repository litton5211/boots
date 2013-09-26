<div class="content-box-header">
     <h3 style="cursor: s-resize;">客户端管理</h3>
    <div class="clear"></div>
</div>
<div class="content-box-content">

<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'client-info-grid',
	'htmlOptions'=>array('class'=>'tab-content default-tab'),
	'summaryCssClass'=>'notification',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'client_id',
		array(
			'name'=>'client_type',
			'type'=>'raw',
			'value'=>'Yii::app()->params["sys_param"]["CLIENTINFO_TYPE_CODE"][$data->client_type_sort][$data->client_type]',
		),
		array(
			'name'=>'prof_type',
			'type'=>'raw',
			'value'=>'Yii::app()->params["sys_param"]["CLIENTINFO_TRAD"][$data->prof_type_sort][$data->prof_type]',
		),
		array(
			'name'=>'客户端所在地',
			'type'=>'raw',
			'value'=>'Area::getAddName($data->province)." - ".Area::getAddName($data->city)',
		),
		array(
			'name'=>'status',
			'type'=>'raw',
			'value'=>'Yii::app()->params["sys_param"]["CLIENTINFO_STATUS"][$data->status]',
		),
		
		/*
		'province',
		'city',
		'department',
		'address',
		'create_time',
		*/
		array(
			'class'=>'CButtonColumn',
			'headerHtmlOptions'=>array('width'=>'10%'),
			'header'=>'操作',
			'buttons'=>array(
		        	'view'=>array(
						'imageUrl' =>Yii::app()->request->baseUrl.'/images/view.png',
			        	'label'    => '查看',
						'options'=>array('class'=>'colorbox view'),
			        	'url'    => 'Yii::app()->createURL("clientInfo/view",array("id"=>$data->client_id))' // 可以传参
	         		),
		  		    'update'=>array(
						'imageUrl' =>Yii::app()->request->baseUrl.'/images/update.png',
			            'label'    => '查看',
						'options'=>array('class'=>'colorbox view'),
			            'url'    => 'Yii::app()->createURL("clientInfo/update",array("id"=>$data->client_id))' // 可以传参
		             ),
		       ) ,
			'template'=>'{view}{delete}',
		),
	),
)); ?>
</div>