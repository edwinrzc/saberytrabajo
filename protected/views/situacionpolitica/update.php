<?php
/* @var $this SituacionpoliticaController */
/* @var $model Situacionpolitica */

$this->breadcrumbs=array(
	'Situacionpoliticas'=>array('index'),
	$model->cod_dp_enc=>array('view','id'=>$model->cod_dp_enc),
	'Update',
);

$this->menu=array(
	array('label'=>'List Situacionpolitica', 'url'=>array('index')),
	array('label'=>'Create Situacionpolitica', 'url'=>array('create')),
	array('label'=>'View Situacionpolitica', 'url'=>array('view', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Manage Situacionpolitica', 'url'=>array('admin')),
);
?>

<h1>Update Situacionpolitica <?php echo $model->cod_dp_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>