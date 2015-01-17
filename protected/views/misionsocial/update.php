<?php
/* @var $this MisionsocialController */
/* @var $model Misionsocial */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_mis_soc)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Mision <?php echo $model->nom_mis_soc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>