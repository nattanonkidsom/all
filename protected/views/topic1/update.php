<?php
/* @var $this Topic1Controller */
/* @var $model Topic1 */

$this->breadcrumbs=array(
	'Topic1s'=>array('index'),
	$model->tp1_id=>array('view','id'=>$model->tp1_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Topic1', 'url'=>array('index')),
	array('label'=>'Create Topic1', 'url'=>array('create')),
	array('label'=>'View Topic1', 'url'=>array('view', 'id'=>$model->tp1_id)),
	array('label'=>'Manage Topic1', 'url'=>array('admin')),
);
?>

<h1>Update Topic1 <?php echo $model->tp1_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>