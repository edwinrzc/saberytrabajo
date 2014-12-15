<?php
/* @var $this CadenaalimentosController */
/* @var $model Cadenaalimentos */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_cad_ali)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cadena: <?php echo $model->nom_cad_ali; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>