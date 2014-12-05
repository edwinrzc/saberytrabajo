<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */

$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ocupacion', 'url'=>array('index')),
	array('label'=>'Manage Ocupacion', 'url'=>array('admin')),
);
?>

<h1>Create Ocupacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>