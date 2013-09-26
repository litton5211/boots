<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ArtID), array('view', 'id'=>$data->ArtID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtTitle')); ?>:</b>
	<?php echo CHtml::encode($data->ArtTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtSort')); ?>:</b>
	<?php echo CHtml::encode($data->ArtSort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtAddTime')); ?>:</b>
	<?php echo CHtml::encode($data->ArtAddTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtUpdateTime')); ?>:</b>
	<?php echo CHtml::encode($data->ArtUpdateTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtDescription')); ?>:</b>
	<?php echo CHtml::encode($data->ArtDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtContent')); ?>:</b>
	<?php echo CHtml::encode($data->ArtContent); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtPic')); ?>:</b>
	<?php echo CHtml::encode($data->ArtPic); ?>
	<br />

	*/ ?>

</div>