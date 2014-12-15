<?php
/* @var $this CadenaalimentosController */
/* @var $model Cadenaalimentos */

$this->breadcrumbs=array(
	'Cadenaalimentoses'=>array('index'),
	$model->cod_cad_ali,
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_cad_ali)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Cadena: <?php echo $model->nom_cad_ali; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_cad_ali',
		'nom_cad_ali',
		'des_cad_ali',
	),
)); ?>
