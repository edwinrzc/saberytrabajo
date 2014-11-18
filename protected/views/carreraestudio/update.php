<?php
/* @var $this CarreraestudioController */
/* @var $model Carreraestudio */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_car_est)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Carrera <?php echo $model->nom_car_est; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>