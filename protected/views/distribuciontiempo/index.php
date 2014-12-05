<?php
/* @var $this DistribuciontiempoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Distribuciontiempos',
);

$this->menu=array(
	array('label'=>'Create Distribuciontiempo', 'url'=>array('create')),
	array('label'=>'Manage Distribuciontiempo', 'url'=>array('admin')),
);
?>

<h1>Distribuciontiempos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
