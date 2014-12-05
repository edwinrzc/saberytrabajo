<?php
/* @var $this DistribuciontiempoController */
/* @var $model Distribuciontiempo */

$this->breadcrumbs=array(
	'Distribuciontiempos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Distribuciontiempo', 'url'=>array('index')),
	array('label'=>'Manage Distribuciontiempo', 'url'=>array('admin')),
);
?>

<h1>Create Distribuciontiempo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>