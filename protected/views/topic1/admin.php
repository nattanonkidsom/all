<?php
/* @var $this Topic1Controller */
/* @var $model Topic1 */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#topic1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php echo CHtml::link('เพิ่มข้อมูล',array('topic1/create')); ?>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'topic1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tp1_id',
		'tp1_name',
		'tp1_des',
		'create_by',
		'create_date',
		'update_by',
		'update_date',
		//'active',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
