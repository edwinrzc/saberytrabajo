<?php
/* @var $this CentropenitenciarioController */
/* @var $dataProvider CActiveDataProvider */



$this->menu=array(
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Centros Penitenciarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
