<?php
/* @var $this Topic1Controller */
/* @var $data Topic1 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp1_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tp1_id), array('view', 'id'=>$data->tp1_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp1_name')); ?>:</b>
	<?php echo CHtml::encode($data->tp1_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp1_des')); ?>:</b>
	<?php echo CHtml::encode($data->tp1_des); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	*/ ?>

</div>