<?php
/* @var $this MotivoestudioController */
/* @var $model Motivoestudio */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_mot_est)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Motivo: <?php echo $model->nom_mot_est; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>