<?php
/* @var $this CaracteristicaviviendaController */
/* @var $model Caracteristicavivienda */

$this->breadcrumbs=array(
	'Caracteristicaviviendas'=>array('index'),
	$model->cod_dp_enc=>array('view','id'=>$model->cod_dp_enc),
	'Update',
);

$this->menu=array(
	array('label'=>'List Caracteristicavivienda', 'url'=>array('index')),
	array('label'=>'Create Caracteristicavivienda', 'url'=>array('create')),
	array('label'=>'View Caracteristicavivienda', 'url'=>array('view', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Manage Caracteristicavivienda', 'url'=>array('admin')),
);
?>

<h1>Update Caracteristicavivienda <?php echo $model->cod_dp_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>