<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */

$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	$model->cod_ocu=>array('view','id'=>$model->cod_ocu),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ocupacion', 'url'=>array('index')),
	array('label'=>'Create Ocupacion', 'url'=>array('create')),
	array('label'=>'View Ocupacion', 'url'=>array('view', 'id'=>$model->cod_ocu)),
	array('label'=>'Manage Ocupacion', 'url'=>array('admin')),
);
?>

<h1>Update Ocupacion <?php echo $model->cod_ocu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>