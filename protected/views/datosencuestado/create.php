<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */


$this->menu=array(
	array('label'=>'List Datosencuestado', 'url'=>array('index')),
	array('label'=>'Manage Datosencuestado', 'url'=>array('admin')),
);
?>

<h1>Create Datosencuestado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>