<?php
/* @var $this NacionalidadesController */
/* @var $model Nacionalidades */

$this->breadcrumbs=array(
	'Nacionalidades'=>array('index'),
	$model->cod_nac_enc,
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_nac_enc)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Nacionalidades: <?php echo $model->nom_nac_enc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_nac_enc',
		'nom_nac_enc',
		'des_nac_enc',
	),
)); ?>
