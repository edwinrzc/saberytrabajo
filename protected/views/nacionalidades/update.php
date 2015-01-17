<?php
/* @var $this NacionalidadesController */
/* @var $model Nacionalidades */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_nac_enc)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Nacionalidad: <?php echo $model->nom_nac_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>