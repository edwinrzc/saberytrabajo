<?php
/* @var $this NivelinstruccionController */
/* @var $model Nivelinstruccion */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Nivel de Instruccion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>