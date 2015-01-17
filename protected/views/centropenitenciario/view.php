<?php
/* @var $this CentropenitenciarioController */
/* @var $model Centropenitenciario */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_cen_pen)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Centro: <?php echo $model->nom_cen_pen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_cen_pen',
		'nom_cen_pen',
		'cod_edo',
	),
)); ?>
