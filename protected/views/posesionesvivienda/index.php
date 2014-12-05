<?php
/* @var $this PosesionesviviendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posesionesviviendas',
);

$this->menu=array(
	array('label'=>'Create Posesionesvivienda', 'url'=>array('create')),
	array('label'=>'Manage Posesionesvivienda', 'url'=>array('admin')),
);
?>

<h1>Posesionesviviendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
