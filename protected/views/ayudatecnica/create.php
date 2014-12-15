<?php
/* @var $this AyudatecnicaController */
/* @var $model Ayudatecnica */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Ayuda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>