<?php
/* @var $this Topic2Controller */
/* @var $model Topic2 */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#topic2-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php echo CHtml::link('เพิ่มข้อมูล',array('topic2/create')); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'topic2-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tp1_id',
		'tp2_id',
		'tp2_name',
		'tp2_des',
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
