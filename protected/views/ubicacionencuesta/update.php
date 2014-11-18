<?php
/* @var $this UbicacionencuestaController */
/* @var $model UbicacionEncuesta */

$this->breadcrumbs=array(
	'Ubicacion Encuestas'=>array('index'),
	$model->cod_ubi_enc=>array('view','id'=>$model->cod_ubi_enc),
	'Update',
);

$this->menu=array(
	array('label'=>'List UbicacionEncuesta', 'url'=>array('index')),
	array('label'=>'Create UbicacionEncuesta', 'url'=>array('create')),
	array('label'=>'View UbicacionEncuesta', 'url'=>array('view', 'id'=>$model->cod_ubi_enc)),
	array('label'=>'Manage UbicacionEncuesta', 'url'=>array('admin')),
);
?>

<h1>Update UbicacionEncuesta <?php echo $model->cod_ubi_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>