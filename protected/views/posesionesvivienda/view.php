<?php
/* @var $this PosesionesviviendaController */
/* @var $model Posesionesvivienda */

$this->breadcrumbs=array(
	'Posesionesviviendas'=>array('index'),
	$model->cod_dp_enc,
);

$this->menu=array(
	array('label'=>'List Posesionesvivienda', 'url'=>array('index')),
	array('label'=>'Create Posesionesvivienda', 'url'=>array('create')),
	array('label'=>'Update Posesionesvivienda', 'url'=>array('update', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Delete Posesionesvivienda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_dp_enc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Posesionesvivienda', 'url'=>array('admin')),
);
?>

<h1>View Posesionesvivienda #<?php echo $model->cod_dp_enc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_dp_enc',
		'can_coc_pos_viv',
		'can_lav_pos_viv',
		'can_nev_pos_viv',
		'can_sec_pos_viv',
		'can_air_aco_pos_viv',
		'can_cam_ind_pos_viv',
		'can_cam_mat_pos_viv',
		'can_lit_pos_viv',
		'can_col_ind_pos_viv',
		'can_col_mat_pos_viv',
		'can_jue_com_pos_viv',
		'can_jue_rec_pos_viv',
	),
)); ?>
