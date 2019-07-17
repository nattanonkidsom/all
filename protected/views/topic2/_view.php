<?php
/* @var $this Topic2Controller */
/* @var $data Topic2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp2_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tp2_id), array('view', 'id'=>$data->tp2_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp1_id')); ?>:</b>
	<?php echo CHtml::encode($data->tp1_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp2_name')); ?>:</b>
	<?php echo CHtml::encode($data->tp2_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp2_des')); ?>:</b>
	<?php echo CHtml::encode($data->tp2_des); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	*/ ?>

</div>