<div class="notification form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<ul style="padding:10px;">
		<li class="inline">
			<?php echo $form->label($model,'client_id',array('class'=>'inline')); ?>
			<?php echo $form->textField($model,'client_id',array('size'=>15,'maxlength'=>20)); ?>
		</li>
		<li class="inline">
			<?php echo $form->labelEx($model,'status',array('class'=>'inline')); ?>
			<?php echo $form->dropDownList($model,'status',Yii::app()->params["sys_param"]["CLIENTINFO_STATUS"]); ?>
		</li>
		<li class="inline">
			<?php echo $form->labelEx($model,'client_type_sort',array('class'=>'inline')); ?>
			<?php echo $form->dropDownList($model,'client_type_sort',Yii::app()->params["sys_param"]["CLIENTINFO_TYPE_CODE_TY"],
					array(
					'ajax'=> array(				
						'type'=>'POST', 			
						'url'=>Yii::app()->createUrl('site/GetType'), 				
						'update'=>'#ClientInfo_client_type', 
						'data'=>array('code'=>'js:this.value'), 
						),
					'style'=>"width:100px",
					)
		
				); ?>
			<?php echo $form->dropDownList($model,'client_type',array(''=>'请选择'),array('style'=>"width:100px",)); ?>
		</li>
	</ul>
	<ul style="padding:10px;">		
		<li class="inline">
			<?php echo $form->labelEx($model,'prof_type',array('class'=>'inline')); ?>
			<?php echo $form->dropDownList($model,'prof_type_sort',Yii::app()->params["sys_param"]["CLIENTINFO_TRAD_TYPE"],
						array(
						'ajax'=> array(				
							'type'=>'POST', 			
							'url'=>Yii::app()->createUrl('site/GetProf'), 				
							'update'=>'#ClientInfo_prof_type', 
							'data'=>array('code'=>'js:this.value'), 
							),
							'style'=>"width:100px",
						)
					); ?>
			<?php echo $form->dropDownList($model,'prof_type',array(''=>'请选择'),array('style'=>"width:100px",)); ?>
		</li>
		<li class="inline">
			<?php echo $form->labelEx($model,'province',array('class'=>'inline')); ?>
			<?php echo $form->dropDownList($model,'province',Area::getProvince(),
				array(
						'ajax'=> array(				
							'type'=>'POST', //发送类型				
							'url'=>Yii::app()->createUrl('area/getCodes'), //要调用返回的php程序.					
							'update'=>'#ClientInfo_city', //选择这个菜单后下个菜单要变动
							'data'=>array('code'=>'js:this.value'), 
							),
						'style'=>"width:100px",
				)
			
			); ?>
			<?php echo $form->dropDownList($model,'city',array(''=>'请选择'),
				array(
						'ajax'=> array(				
							'type'=>'POST', //发送类型				
							'url'=>Yii::app()->createUrl('area/getCodes'), //要调用返回的php程序.					
							'update'=>'#ClientInfo_department', //选择这个菜单后下个菜单要变动
							'data'=>array('code'=>'js:this.value'), 
							),
						'style'=>"width:100px",
				)
			
			); ?>
			<?php echo $form->dropDownList($model,'department',array(''=>'请选择'),array('style'=>"width:100px",)); ?>
		</li>
	</ul>

	<ul style="padding:5px;">
		<li class="inline">
			<?php echo CHtml::submitButton('查询',array('class'=>'button')); ?>
		</li>		
	</ul>


<?php $this->endWidget(); ?>

</div><!-- search-form -->