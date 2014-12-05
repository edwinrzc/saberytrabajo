<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */

$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	$model->cod_ocu,
);

$this->menu=array(
	array('label'=>'List Ocupacion', 'url'=>array('index')),
	array('label'=>'Create Ocupacion', 'url'=>array('create')),
	array('label'=>'Update Ocupacion', 'url'=>array('update', 'id'=>$model->cod_ocu)),
	array('label'=>'Delete Ocupacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_ocu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ocupacion', 'url'=>array('admin')),
);
?>

<h1>View Ocupacion #<?php echo $model->cod_ocu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_ocu',
		'nom_ocu',
		'des_ocu',
	),
)); ?>
