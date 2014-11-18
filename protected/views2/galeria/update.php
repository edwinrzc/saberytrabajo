<?php
/* @var $this GaleriaController */
/* @var $model Galeria */

$this->breadcrumbs=array(
	'Galerias'=>array('index'),
	$model->gal_id=>array('view','id'=>$model->gal_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Galeria', 'url'=>array('index')),
	array('label'=>'Create Galeria', 'url'=>array('create')),
	array('label'=>'View Galeria', 'url'=>array('view', 'id'=>$model->gal_id)),
	array('label'=>'Manage Galeria', 'url'=>array('admin')),
);
?>

<h1>Update Galeria <?php echo $model->gal_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>