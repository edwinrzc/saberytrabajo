<?php
/* @var $this NivelinstruccionController */
/* @var $model Nivelinstruccion */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_niv_ins)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Nivel de instruccion: <?php echo $model->nom_niv_ins; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_niv_ins',
		'nom_niv_ins',
		'des_niv_ins',
	),
)); ?>
