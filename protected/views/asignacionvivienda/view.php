<?php
/* @var $this AsignacionviviendaController */
/* @var $model Asignacionvivienda */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Asignar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_asi_viv)),		
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Asignacion: <?php echo $model->num_viv_asi_viv; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_asi_viv',
		'num_viv_asi_viv',
		'cod_pro',
		'cod_dp_enc',
		'cod_user',
		'fec_reg_asi_viv',
	),
)); ?>
