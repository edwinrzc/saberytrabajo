<?php
/* @var $this CaracteristicaviviendaController */
/* @var $model Caracteristicavivienda */

$this->breadcrumbs=array(
	'Caracteristicaviviendas'=>array('index'),
	$model->cod_dp_enc,
);

$this->menu=array(
	array('label'=>'List Caracteristicavivienda', 'url'=>array('index')),
	array('label'=>'Create Caracteristicavivienda', 'url'=>array('create')),
	array('label'=>'Update Caracteristicavivienda', 'url'=>array('update', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Delete Caracteristicavivienda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_dp_enc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Caracteristicavivienda', 'url'=>array('admin')),
);
?>

<h1>View Caracteristicavivienda #<?php echo $model->cod_dp_enc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_dp_enc',
		'pre1_car_viv',
		'pre2_car_viv',
		'pre3_car_viv',
		'pre4_car_viv',
		'pre5_car_viv',
		'pre6_car_viv',
		'pre7_car_viv',
		'pre8_car_viv',
		'pre9_car_viv',
		'pre10_car_viv',
		'pre11_car_viv',
		'pre12_car_viv',
		'pre13_car_viv',
		'pre14_car_viv',
		'pre15_car_viv',
		'pre16_car_viv',
		'pre17_car_viv',
		'pre18_car_viv',
		'pre19_car_viv',
		'pre20_car_viv',
		'pre21_car_viv',
		'pre22_car_viv',
		'pre23_car_viv',
		'pre24_car_viv',
		'pre25_car_viv',
		'pre26_car_viv',
		'pre27_car_viv',
		'pre28_car_viv',
		'pre29_car_viv',
		'pre30_car_viv',
		'pre31_car_viv',
		'pre32_car_viv',
		'pre33_car_viv',
	),
)); ?>
