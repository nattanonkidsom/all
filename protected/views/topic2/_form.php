<?php
/* @var $this Topic2Controller */
/* @var $model Topic2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'topic2-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tp1_id'); ?>
		<?php echo $form->textField($model,'tp1_id'); ?>
		<?php echo $form->error($model,'tp1_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp2_name'); ?>
		<?php echo $form->textField($model,'tp2_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tp2_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp2_des'); ?>
		<?php echo $form->textField($model,'tp2_des',array('size'=>60,'maxlength'=>255 )); ?>
		<?php echo $form->error($model,'tp2_des'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by'); ?>
		<?php echo $form->error($model,'create_by'); ?>
	</div> -->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div> -->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by'); ?>
		<?php echo $form->error($model,'update_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div> -->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'active'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->