<?php
/* @var $this Topic2Controller */
/* @var $model Topic2 */

$this->breadcrumbs=array(
	'Topic2s'=>array('index'),
	$model->tp2_id,
);

$this->menu=array(
	array('label'=>'List Topic2', 'url'=>array('index')),
	array('label'=>'Create Topic2', 'url'=>array('create')),
	array('label'=>'Update Topic2', 'url'=>array('update', 'id'=>$model->tp2_id)),
	array('label'=>'Delete Topic2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tp2_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Topic2', 'url'=>array('admin')),
);
?>

<h1>View Topic2 #<?php echo $model->tp2_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tp1_id',
		'tp2_id',
		'tp2_name',
		'tp2_des',
		'create_by',
		'create_date',
		'update_by',
		'update_date',
		'active',
	),
)); ?>
