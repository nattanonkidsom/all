<?php
/* @var $this Topic3Controller */
/* @var $model Topic3 */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#topic3-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php echo CHtml::link('เพิ่มข้อมูล',array('topic3/create')); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'topic3-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tp2_id',
		'tp3_id',
		'tp3_name',
		'tp3_des',
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
