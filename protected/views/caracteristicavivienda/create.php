<?php
/* @var $this CaracteristicaviviendaController */
/* @var $model Caracteristicavivienda */

$this->breadcrumbs=array(
	'Caracteristicaviviendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Caracteristicavivienda', 'url'=>array('index')),
	array('label'=>'Manage Caracteristicavivienda', 'url'=>array('admin')),
);
?>

<h1>Create Caracteristicavivienda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>