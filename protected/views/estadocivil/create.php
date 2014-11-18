<?php
/* @var $this EstadocivilController */
/* @var $model Estadocivil */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Estado civil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>