<?php
/* @var $this CentropenitenciarioController */
/* @var $model Centropenitenciario */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_cen_pen)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Centro <?php echo $model->nom_cen_pen; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>