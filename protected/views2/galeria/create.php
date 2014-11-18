<?php
/* @var $this GaleriaController */
/* @var $model Galeria */

$this->breadcrumbs=array(
	'Galerias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Galeria', 'url'=>array('index')),
	array('label'=>'Manage Galeria', 'url'=>array('admin')),
);
?>

<h1>Create Galeria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>