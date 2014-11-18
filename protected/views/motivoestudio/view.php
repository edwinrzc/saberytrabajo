<?php
/* @var $this MotivoestudioController */
/* @var $model Motivoestudio */

$this->breadcrumbs=array(
	'Motivoestudios'=>array('index'),
	$model->cod_mot_est,
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_mot_est)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Motivo: <?php echo $model->nom_mot_est; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_mot_est',
		'nom_mot_est',
	),
)); ?>
