<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */


$this->menu=array(
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_pro)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Proyecto <?php echo $model->cod_pdvsa_pro; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>