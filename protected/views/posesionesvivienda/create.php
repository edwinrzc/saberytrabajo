<?php
/* @var $this PosesionesviviendaController */
/* @var $model Posesionesvivienda */

$this->breadcrumbs=array(
	'Posesionesviviendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Posesionesvivienda', 'url'=>array('index')),
	array('label'=>'Manage Posesionesvivienda', 'url'=>array('admin')),
);
?>

<h1>Create Posesionesvivienda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>