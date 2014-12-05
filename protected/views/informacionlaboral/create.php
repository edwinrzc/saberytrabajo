<?php
/* @var $this InformacionlaboralController */
/* @var $model Informacionlaboral */

$this->breadcrumbs=array(
	'Informacionlaborals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Informacionlaboral', 'url'=>array('index')),
	array('label'=>'Manage Informacionlaboral', 'url'=>array('admin')),
);
?>

<h1>Create Informacionlaboral</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>