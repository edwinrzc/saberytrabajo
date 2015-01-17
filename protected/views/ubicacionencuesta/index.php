<?php
/* @var $this UbicacionencuestaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ubicacion Encuestas',
);

$this->menu=array(
	array('label'=>'Create UbicacionEncuesta', 'url'=>array('create')),
	array('label'=>'Manage UbicacionEncuesta', 'url'=>array('admin')),
);
?>

<h1>Ubicacion Encuestas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
