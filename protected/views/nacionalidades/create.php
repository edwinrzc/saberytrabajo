<?php
/* @var $this NacionalidadesController */
/* @var $model Nacionalidades */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Nacionalidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>