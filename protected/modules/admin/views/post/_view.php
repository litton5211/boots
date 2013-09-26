<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_uid')); ?>:</b>
	<?php echo CHtml::encode($data->post_uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_time')); ?>:</b>
	<?php echo CHtml::encode($data->post_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort_type')); ?>:</b>
	<?php echo CHtml::encode($data->sort_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_url')); ?>:</b>
	<?php echo CHtml::encode($data->pic_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_title')); ?>:</b>
	<?php echo CHtml::encode($data->post_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_content')); ?>:</b>
	<?php echo CHtml::encode($data->post_content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('post_desc')); ?>:</b>
	<?php echo CHtml::encode($data->post_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_status')); ?>:</b>
	<?php echo CHtml::encode($data->post_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_order')); ?>:</b>
	<?php echo CHtml::encode($data->menu_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_type')); ?>:</b>
	<?php echo CHtml::encode($data->from_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_refer_url')); ?>:</b>
	<?php echo CHtml::encode($data->post_refer_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('like_count')); ?>:</b>
	<?php echo CHtml::encode($data->like_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collect_count')); ?>:</b>
	<?php echo CHtml::encode($data->collect_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_count')); ?>:</b>
	<?php echo CHtml::encode($data->comment_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share_count')); ?>:</b>
	<?php echo CHtml::encode($data->share_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_edit_uid')); ?>:</b>
	<?php echo CHtml::encode($data->last_edit_uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_edit_time')); ?>:</b>
	<?php echo CHtml::encode($data->last_edit_time); ?>
	<br />

	*/ ?>

</div>