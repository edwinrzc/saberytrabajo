<?php
/* @var $this CadenaalimentosController */
/* @var $model Cadenaalimentos */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Cadena</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>