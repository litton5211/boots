<div class="content-box-header">
     <h3 style="cursor: s-resize;">模块管理</h3>
    <div class="clear"></div>
</div>
	
	<div class="content-box-content">
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'infosys-grid',
			'htmlOptions'=>array('class'=>'tab-content default-tab'),
			'summaryCssClass'=>'notification',
			'dataProvider'=>$model->search(),
			//'filter'=>$model,
			'columns'=>array(
				'id',
				'sys_name',
				'sys_ip',
				'sys_desc',
				array(
					'name'=>'status',
					'type'=>'raw',
					'value'=>'Yii::app()->params["sys_param"]["INFOSYS_STATUS"][$data->status]',
				),
				array(
					'name'=>'create_time',
					'type'=>'raw',
					'value'=>'date("Y-m-d H:i:s",$data->create_time)',
				),
				/*
				'create_userid',
				'operator_userid',
				*/
				array(
					'class'=>'CButtonColumn',
					'header'=>'操作',
					'buttons'=>array(
		            	'view'=>array(
							'imageUrl' =>Yii::app()->request->baseUrl.'/images/view.png',
			                'label'    => '查看',
							'options'=>array('class'=>'colorbox view'),
			                'url'    => 'Yii::app()->createURL("infosys/view",array("id"=>$data->id))' // 可以传参
		                 ),
		                'update'=>array(
							'imageUrl' =>Yii::app()->request->baseUrl.'/images/update.png',
			                'label'    => '查看',
							'options'=>array('class'=>'colorbox view'),
			                'url'    => 'Yii::app()->createURL("infosys/update",array("id"=>$data->id))' // 可以传参
		                 ),
		             ) ,
					'template'=>'{view}{update}{delete}',
				),
				
			),
		)); ?>
	
	</div>

