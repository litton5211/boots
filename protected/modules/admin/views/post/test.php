<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3 id="myModalLabel"><?php echo CHtml::encode($model->post_title); ?></h3>
</div>
<div class="modal-body">
	<blockquote>
		<p><?php echo CHtml::encode($model->post_desc); ?></p>
	</blockquote>
	<?php echo CHtml::encode($model->post_content); ?>
</div>
<div class="modal-footer">
	<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</button> 
</div>
