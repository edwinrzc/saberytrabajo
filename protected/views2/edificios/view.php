<?php
/* @var $this EdificiosController */
/* @var $model Edificios */

$this->breadcrumbs=array(
	'Edificioses'=>array('index'),
	$model->nom_edif,
);

$this->menu=array(
	array('label'=>'List Edificios', 'url'=>array('index')),
	array('label'=>'Create Edificios', 'url'=>array('create')),
	array('label'=>'Update Edificios', 'url'=>array('update', 'id'=>$model->nom_edif)),
	array('label'=>'Delete Edificios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nom_edif),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Edificios', 'url'=>array('admin')),
);
?>

<h1>View Edificios #<?php echo $model->nom_edif; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_edif',
		'nom_edif',
		'dir_edif',
		'num_apto_edif',
		'area_comun_edif',
	),
)); ?>
