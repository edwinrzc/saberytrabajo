<?php
/* @var $this InformacionlaboralController */
/* @var $model Informacionlaboral */

$this->breadcrumbs=array(
	'Informacionlaborals'=>array('index'),
	$model->cod_dp_enc=>array('view','id'=>$model->cod_dp_enc),
	'Update',
);

$this->menu=array(
	array('label'=>'List Informacionlaboral', 'url'=>array('index')),
	array('label'=>'Create Informacionlaboral', 'url'=>array('create')),
	array('label'=>'View Informacionlaboral', 'url'=>array('view', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Manage Informacionlaboral', 'url'=>array('admin')),
);
?>

<h1>Update Informacionlaboral <?php echo $model->cod_dp_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>