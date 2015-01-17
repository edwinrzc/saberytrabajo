<?php
/* @var $this NivelinstruccionController */
/* @var $model Nivelinstruccion */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_niv_ins)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Nivel: <?php echo $model->nom_niv_ins; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>