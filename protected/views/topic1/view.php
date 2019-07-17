<?php
/* @var $this Topic1Controller */
/* @var $model Topic1 */

$this->breadcrumbs=array(
	'Topic1s'=>array('index'),
	$model->tp1_id,
);

$this->menu=array(
	array('label'=>'List Topic1', 'url'=>array('index')),
	array('label'=>'Create Topic1', 'url'=>array('create')),
	array('label'=>'Update Topic1', 'url'=>array('update', 'id'=>$model->tp1_id)),
	array('label'=>'Delete Topic1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tp1_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Topic1', 'url'=>array('admin')),
);
?>

<h1>View Topic1 #<?php echo $model->tp1_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tp1_id',
		'tp1_name',
		'tp1_des',
		'create_by',
		'create_date',
		'update_by',
		'update_date',
		'active',
	),
)); ?>
