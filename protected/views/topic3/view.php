<?php
/* @var $this Topic3Controller */
/* @var $model Topic3 */

$this->breadcrumbs=array(
	'Topic3s'=>array('index'),
	$model->tp3_id,
);

$this->menu=array(
	array('label'=>'List Topic3', 'url'=>array('index')),
	array('label'=>'Create Topic3', 'url'=>array('create')),
	array('label'=>'Update Topic3', 'url'=>array('update', 'id'=>$model->tp3_id)),
	array('label'=>'Delete Topic3', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tp3_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Topic3', 'url'=>array('admin')),
);
?>

<h1>View Topic3 #<?php echo $model->tp3_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tp2_id',
		'tp3_id',
		'tp3_name',
		'tp3_des',
		'create_by',
		'create_date',
		'update_by',
		'update_date',
		'active',
	),
)); ?>
