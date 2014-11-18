<?php
/* @var $this MotivoestudioController */
/* @var $model Motivoestudio */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Motivo de Estudio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>