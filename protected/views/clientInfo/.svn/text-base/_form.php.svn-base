
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-info-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<p>
		<?php echo $form->labelEx($model,'client_code'); ?>
		<?php echo $form->textField($model,'client_code',array('id'=>"small-input",'class'=>"text-input small-input")); ?>(两位数字)
		<?php echo $form->error($model,'client_code'); ?>
	</p>
	
	<?php echo $form->labelEx($model,'client_type'); ?>
		<?php echo $form->dropDownList($model,'client_type_sort',Yii::app()->params["sys_param"]["CLIENTINFO_TYPE_CODE_TY"],
					array(
					'ajax'=> array(				
						'type'=>'POST', 			
						'url'=>Yii::app()->createUrl('site/GetType'), 				
						'update'=>'#ClientInfo_client_type', 
						'data'=>array('code'=>'js:this.value'), 
						),
					)
		
				); ?>
		<?php echo $form->dropDownList($model,'client_type',array(''=>'请选择')); ?>
		<?php echo $form->error($model,'client_type'); ?>
	</p>
	<p>
		<?php echo $form->labelEx($model,'prof_type'); ?>
		建设主体：<?php echo $form->dropDownList($model,'prof_type_sort',Yii::app()->params["sys_param"]["CLIENTINFO_TRAD_TYPE"],
					array(
					'ajax'=> array(				
						'type'=>'POST', 			
						'url'=>Yii::app()->createUrl('site/GetProf'), 				
						'update'=>'#ClientInfo_prof_type', 
						'data'=>array('code'=>'js:this.value'), 
						),
					)
				); ?>
		行业类型：<?php echo $form->dropDownList($model,'prof_type',array(''=>'请选择')); ?>
		<?php echo $form->error($model,'prof_type'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->dropDownList($model,'province',Area::getProvince(),
			array(
					'ajax'=> array(				
						'type'=>'POST', //发送类型				
						'url'=>Yii::app()->createUrl('area/getCodes'), //要调用返回的php程序.					
						'update'=>'#ClientInfo_city', //选择这个菜单后下个菜单要变动
						'data'=>array('code'=>'js:this.value'), 
						),
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
			)
		
		); ?>
		<?php echo $form->dropDownList($model,'department',array(''=>'请选择')); ?>
	</p>

	
	
	<p>
		<?php echo $form->labelEx($model,'client_pwd'); ?>
		<?php echo $form->textField($model,'client_pwd',array('id'=>"small-input",'class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'client_pwd'); ?>
	</p>
	
	<p>
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('id'=>"small-input",'class'=>"text-input small-input")); ?>
		<?php echo $form->error($model,'address'); ?>
	</p>	



	<p>
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Yii::app()->params["sys_param"]["CLIENTINFO_STATUS"]); ?>
		<?php echo $form->error($model,'status'); ?>
	</p>
		

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建保存' : '修改保存',array('class'=>'button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->