<?php
/* @var $this AsignacionviviendaController */
/* @var $model Asignacionvivienda */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Asignacion de Vivienda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>