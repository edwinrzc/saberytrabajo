<?php
/* @var $this SituacionpoliticaController */
/* @var $model Situacionpolitica */

$this->breadcrumbs=array(
	'Situacionpoliticas'=>array('index'),
	$model->cod_dp_enc,
);

$this->menu=array(
	array('label'=>'List Situacionpolitica', 'url'=>array('index')),
	array('label'=>'Create Situacionpolitica', 'url'=>array('create')),
	array('label'=>'Update Situacionpolitica', 'url'=>array('update', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Delete Situacionpolitica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_dp_enc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Situacionpolitica', 'url'=>array('admin')),
);
?>

<h1>View Situacionpolitica #<?php echo $model->cod_dp_enc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_dp_enc',
		'reg_ele_sit_pol',
		'par_pol_sit_pol',
		'cod_par_pol',
		'otr_par_sit_pol',
		'nom_cen_vot_sit_pol',
		'cod_par',
		'mie_mes_sit_pol',
		'tes_mes_sit_pol',
		'res_par_sit_pol',
		'ins_sit_pol',
		'des_res_sit_pol',
		'niv_dir_sit_pol',
	),
)); ?>
