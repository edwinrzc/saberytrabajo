<?php
/* @var $this AyudatecnicaController */
/* @var $model Ayudatecnica */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_ayu_tec)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ayuda: <?php echo $model->nom_ayu_tec; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>