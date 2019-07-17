<?php
/* @var $this DocumentController */
/* @var $model Document */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#document-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

</div><!-- search-form -->
<?php echo CHtml::link('เพิ่มข้อมูล',array('document/create')); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'document-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tp3_id',
		'doc_id',
		'create_by',
		'create_date',
		'update_by',
		'update_date',
	
		'upload',
		//'rename',
		//'active',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
