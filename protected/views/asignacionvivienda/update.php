<?php
/* @var $this AsignacionviviendaController */
/* @var $model Asignacionvivienda */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Asignar', 'url'=>array('create')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Modificar Asignacion: <?php echo $model->num_viv_asi_viv; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>