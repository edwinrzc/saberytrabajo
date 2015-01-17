<?php
/* @var $this ProyectoController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Create Proyecto', 'url'=>array('create')),
	array('label'=>'Manage Proyecto', 'url'=>array('admin')),
);
?>

<h1>Proyectos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
