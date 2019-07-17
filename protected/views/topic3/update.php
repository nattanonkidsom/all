<?php
/* @var $this Topic3Controller */
/* @var $model Topic3 */

$this->breadcrumbs=array(
	'Topic3s'=>array('index'),
	$model->tp3_id=>array('view','id'=>$model->tp3_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Topic3', 'url'=>array('index')),
	array('label'=>'Create Topic3', 'url'=>array('create')),
	array('label'=>'View Topic3', 'url'=>array('view', 'id'=>$model->tp3_id)),
	array('label'=>'Manage Topic3', 'url'=>array('admin')),
);
?>

<h1>Update Topic3 <?php echo $model->tp3_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>