<?php
/* @var $this GaleriaController */
/* @var $model Galeria */

$this->breadcrumbs=array(
	'Galerias'=>array('index'),
	$model->gal_id,
);

$this->menu=array(
	array('label'=>'List Galeria', 'url'=>array('index')),
	array('label'=>'Create Galeria', 'url'=>array('create')),
	array('label'=>'Update Galeria', 'url'=>array('update', 'id'=>$model->gal_id)),
	array('label'=>'Delete Galeria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->gal_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Galeria', 'url'=>array('admin')),
);
?>

<h1>View Galeria #<?php echo $model->gal_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gal_id',
		'gal_nom',
		'gal_img_json',
		'gal_fec_reg',
	),
)); ?>
