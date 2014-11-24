<?php
/* @var $this PartidopoliticoController */
/* @var $model Partidopolitico */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_par_pol)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Partido: <?php echo $model->nom_par_pol; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_par_pol',
		'nom_par_pol',
		'des_par_pol',
	),
)); ?>
