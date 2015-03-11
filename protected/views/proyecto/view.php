<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */


$this->menu=array(
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_pro)),	
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Proyecto #<?php echo $model->cod_pdvsa_pro .'&nbsp;'. $model->nom_pro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_pro',
		'nom_pro',
		'cod_edo',
		'cod_mun',
		'cod_par',
		'sec_pro',
		'dir_exa_pro',
		'pun_ref_pro',
		'viv_asi_pro',
		'obs_pro',
	),
)); ?>
