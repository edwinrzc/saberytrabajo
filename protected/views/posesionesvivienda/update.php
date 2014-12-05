<?php
/* @var $this PosesionesviviendaController */
/* @var $model Posesionesvivienda */

$this->breadcrumbs=array(
	'Posesionesviviendas'=>array('index'),
	$model->cod_dp_enc=>array('view','id'=>$model->cod_dp_enc),
	'Update',
);

$this->menu=array(
	array('label'=>'List Posesionesvivienda', 'url'=>array('index')),
	array('label'=>'Create Posesionesvivienda', 'url'=>array('create')),
	array('label'=>'View Posesionesvivienda', 'url'=>array('view', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Manage Posesionesvivienda', 'url'=>array('admin')),
);
?>

<h1>Update Posesionesvivienda <?php echo $model->cod_dp_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>