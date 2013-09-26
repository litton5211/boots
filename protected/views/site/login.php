<div class="navbar navbar-inverse">
    <div class="navbar-inner">
		<a class="brand" href="#">美妆宝典</a>
		<p class="navbar-text pull-right">
	    	Logged in as <a class="navbar-link" href="#">
	    	<?php if(!Yii::app()->user->isGuest) {
	    			echo Yii::app()->user->name;
	    		} 
	    		
	    	?></a>
	    </p>
    	<ul class="nav">
    		<li class="active"><a href="#">首页</a></li>
    	</ul>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="span12">
			
			<div class="hero-unit well">
			<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableAjaxValidation'=>true,
					'htmlOptions'=>array('class'=>'form-horizontal')
				)); ?>
				
					<div class="control-group">
						<?php echo $form->labelEx($model,'username',array('class'=>'control-label','placeholder'=>'username')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'username'); ?>
							<?php echo $form->error($model,'username'); ?>
						</div>
					</div>
				
					<div class="control-group">
						<?php echo $form->labelEx($model,'password',array('class'=>'control-label','placeholder'=>'password')); ?>
						<div class="controls">
							<?php echo $form->passwordField($model,'password'); ?>
							<?php echo $form->error($model,'password'); ?>
						</div>
					</div>
					
					<div class="control-group">
						<?php echo $form->labelEx($model,'verifyCode',array('class'=>'control-label','for'=>'verifyCode')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'verifyCode',array('class'=>'input-small')); ?>
							<?php $this->widget('CCaptcha',array('clickableImage'=>true,'buttonLabel'=>'','imageOptions'=>array('style'=>'width:80px'))); ?>
							<?php echo $form->error($model,'verifyCode'); ?>
						</div>
						
					</div>
				
					<div class="control-group">
						<div class="controls">
							<label class="checkbox"><input type="checkbox" /> Remember me</label> 
							<?php echo CHtml::submitButton('登陆',array('class'=>'btn btn-large btn-primary')); ?>
						</div>
					</div>
				<?php $this->endWidget(); ?>	
				
				
			</div>
		</div>
	</div>
</div>
