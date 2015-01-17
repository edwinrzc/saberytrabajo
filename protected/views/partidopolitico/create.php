<?php
/* @var $this PartidopoliticoController */
/* @var $model Partidopolitico */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Partido</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>