<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Proyecto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>