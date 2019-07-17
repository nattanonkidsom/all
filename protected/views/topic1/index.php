<?php
/* @var $this Topic1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Topic1s',
);

$this->menu=array(
	array('label'=>'Create Topic1', 'url'=>array('create')),
	array('label'=>'Manage Topic1', 'url'=>array('admin')),
);
?>

<h1>Topic1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
