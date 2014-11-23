<?php
/* @var $this MisionsocialController */
/* @var $model Misionsocial */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_mis_soc)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Mision: <?php echo $model->nom_mis_soc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_mis_soc',
		'nom_mis_soc',
		'des_mis_soc',
	),
)); ?>
