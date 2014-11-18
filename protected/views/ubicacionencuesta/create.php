<?php
/* @var $this UbicacionencuestaController */
/* @var $model UbicacionEncuesta */

$this->breadcrumbs=array(
	'Ubicacion Encuestas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UbicacionEncuesta', 'url'=>array('index')),
	array('label'=>'Manage UbicacionEncuesta', 'url'=>array('admin')),
);
?>

<h1>Create UbicacionEncuesta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>