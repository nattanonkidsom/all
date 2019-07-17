<?php
/* @var $this Topic2Controller */
/* @var $model Topic2 */

$this->breadcrumbs=array(
	'Topic2s'=>array('index'),
	$model->tp2_id=>array('view','id'=>$model->tp2_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Topic2', 'url'=>array('index')),
	array('label'=>'Create Topic2', 'url'=>array('create')),
	array('label'=>'View Topic2', 'url'=>array('view', 'id'=>$model->tp2_id)),
	array('label'=>'Manage Topic2', 'url'=>array('admin')),
);
?>

<h1>Update Topic2 <?php echo $model->tp2_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>