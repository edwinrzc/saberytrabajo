<?php
/* @var $this PartidopoliticoController */
/* @var $model Partidopolitico */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_par_pol)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Partido: <?php echo $model->nom_par_pol; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>