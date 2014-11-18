<?php
/* @var $this ComunidadindigenaController */
/* @var $model Comunidadindigena */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_com_ind)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar comunidad: <?php echo $model->nom_com_ind; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>