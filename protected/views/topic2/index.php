<?php
/* @var $this Topic2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Topic2s',
);

$this->menu=array(
	array('label'=>'Create Topic2', 'url'=>array('create')),
	array('label'=>'Manage Topic2', 'url'=>array('admin')),
);
?>

<h1>Topic2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
