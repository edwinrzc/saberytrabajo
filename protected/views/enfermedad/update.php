<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_enf)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Enfermedad: <?php echo $model->nom_enf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>