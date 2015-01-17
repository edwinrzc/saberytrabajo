<?php
/* @var $this ComunidadindigenaController */
/* @var $model Comunidadindigena */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_com_ind)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Comunidad: <?php echo $model->nom_com_ind; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_com_ind',
		'nom_com_ind',
	),
)); ?>
