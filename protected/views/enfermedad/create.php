<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Enfermedad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>