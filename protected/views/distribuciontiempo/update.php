<?php
/* @var $this DistribuciontiempoController */
/* @var $model Distribuciontiempo */

$this->breadcrumbs=array(
	'Distribuciontiempos'=>array('index'),
	$model->cod_dp_enc=>array('view','id'=>$model->cod_dp_enc),
	'Update',
);

$this->menu=array(
	array('label'=>'List Distribuciontiempo', 'url'=>array('index')),
	array('label'=>'Create Distribuciontiempo', 'url'=>array('create')),
	array('label'=>'View Distribuciontiempo', 'url'=>array('view', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Manage Distribuciontiempo', 'url'=>array('admin')),
);
?>

<h1>Update Distribuciontiempo <?php echo $model->cod_dp_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>