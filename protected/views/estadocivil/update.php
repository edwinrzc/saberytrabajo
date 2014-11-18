<?php
/* @var $this EstadocivilController */
/* @var $model Estadocivil */

$this->breadcrumbs=array(
	'Estadocivils'=>array('index'),
	$model->cod_est_civ=>array('view','id'=>$model->cod_est_civ),
	'Update',
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_est_civ)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Estado civil <?php echo $model->nom_est_civ; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>