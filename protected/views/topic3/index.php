<?php
/* @var $this Topic3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Topic3s',
);

$this->menu=array(
	array('label'=>'Create Topic3', 'url'=>array('create')),
	array('label'=>'Manage Topic3', 'url'=>array('admin')),
);
?>

<h1>Topic3s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
