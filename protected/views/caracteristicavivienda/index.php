<?php
/* @var $this CaracteristicaviviendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Caracteristicaviviendas',
);

$this->menu=array(
	array('label'=>'Create Caracteristicavivienda', 'url'=>array('create')),
	array('label'=>'Manage Caracteristicavivienda', 'url'=>array('admin')),
);
?>

<h1>Caracteristicaviviendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
