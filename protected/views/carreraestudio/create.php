<?php
/* @var $this CarreraestudioController */
/* @var $model Carreraestudio */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Carrera</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>