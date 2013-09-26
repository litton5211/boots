<?php if($data->MsgIsAudit == 1 || Webconfig::model()->findByPk(1)->ismsgAudit == 0):?>
<li>
<p class="title">
   <?php echo CHtml::encode($data->MsgName); ?>  
   <span><?php echo CHtml::encode($data->MsgAddTime); ?></span> 
</p>
<p class="content">
<?php echo CHtml::encode($data->MsgContent); ?>
</p>
<?php if($data->MsgReply):?>
<dt class="reply"><p><?php echo CHtml::encode($data->MsgReply); ?></p></dt>
<?php endif;?>
</li>
<?php endif;?>
