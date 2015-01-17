<?php
/* @var $this AyudatecnicaController */
/* @var $model Ayudatecnica */

$this->breadcrumbs=array(
	'Ayudatecnicas'=>array('index'),
	$model->cod_ayu_tec,
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_ayu_tec)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Ayuda: <?php echo $model->nom_ayu_tec; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_ayu_tec',
		'nom_ayu_tec',
		'des_ayu_tec',
	),
)); ?>
