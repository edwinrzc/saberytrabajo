<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */

$this->breadcrumbs=array(
	'Encuestados'=>array('admin'),
	$model->cod_dp_enc=>array('view','id'=>$model->cod_dp_enc),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Encuestado', 'url'=>array('create')),
	array('label'=>'Ver Encuestado', 'url'=>array('view', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Datos Encuestado <?php echo $model->cod_dp_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>