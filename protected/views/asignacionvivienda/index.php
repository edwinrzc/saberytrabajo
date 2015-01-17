<?php
/* @var $this AsignacionviviendaController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Asignar', 'url'=>array('create')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Asignaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
