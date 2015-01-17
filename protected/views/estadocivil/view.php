<?php
/* @var $this EstadocivilController */
/* @var $model Estadocivil */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_est_civ)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Estado Civil: <?php echo $model->nom_est_civ; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_est_civ',
		'nom_est_civ',
	),
)); ?>
