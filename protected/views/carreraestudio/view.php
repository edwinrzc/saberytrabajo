<?php
/* @var $this CarreraestudioController */
/* @var $model Carreraestudio */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_car_est)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Carrera: <?php echo $model->nom_car_est; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_car_est',
		'nom_car_est',
		'des_car_est',
	),
)); ?>
