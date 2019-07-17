<?php
/* @var $this Topic3Controller */
/* @var $data Topic3 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp3_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tp3_id), array('view', 'id'=>$data->tp3_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp2_id')); ?>:</b>
	<?php echo CHtml::encode($data->tp2_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp3_name')); ?>:</b>
	<?php echo CHtml::encode($data->tp3_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp3_des')); ?>:</b>
	<?php echo CHtml::encode($data->tp3_des); ?>
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