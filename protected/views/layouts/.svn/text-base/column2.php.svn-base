<?php $this->beginContent('//layouts/main'); ?>
    	<div id="bd_leftg">
			<div class="blank10"></div>

			<div class="box1"> 
				<?php 
					$menus = require(Yii::app()->basePath . '/config/site_menu.php');
					foreach ($menus as $menu=>$list)
					{
					?>
				<div class="title2"> 
					<div class="lanwd2"><?php echo $menu ;?></div> 
					<div class="english2"></div> 
				</div> 
				<div class="content"> 
					<div class="blank10"></div> 			
				
					<dl class="treemenu mb20" id="leftmenu">
						<?php $this->widget('zii.widgets.CMenu',array(
							'items'=>$list,
						)); ?>
					</dl>			
					<div class="blank10"></div> 
				</div> 
				<?php }?>
			</div> 
			<div class="box1"> 
				<div class="title">
 					<div class="lanwd">通告</div>
 					<div class="english"></div> 
 				</div> 
 				<div class="content"> 
	 				<div class="p1g"> 
	 					<ul class="ul2g"> 
	 						<li>热烈庆祝聚网SIP管理系统上线</li> 
	 						<li>时 间：2012年10月</li> 
	 					</ul>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 	<div id ="bd_right">
	 		<div class="content-box">
	 			
	 			<?php echo $content; ?>
	 		</div>
	 	</div>
	 	
	 	
<?php $this->endContent(); ?>
