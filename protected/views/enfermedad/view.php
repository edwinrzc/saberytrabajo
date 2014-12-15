<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_enf)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Enfermedad: <?php echo $model->nom_enf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_enf',
		'nom_enf',
		'des_enf',
	),
)); ?>
