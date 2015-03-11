<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */

$this->breadcrumbs=array(
	'Encuestados'=>array('admin'),
	$model->cod_dp_enc,
);

$this->menu=array(
	array('label'=>'Crear Encuestado', 'url'=>array('create')),
	array('label'=>'Actualizar Encuestado', 'url'=>array('update', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Ver Datos Encuestado #<?php echo $model->cod_dp_enc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_dp_enc',
		'cod_par',
		'dir_com_dp_enc',
		'sec_dp_enc',
		'pun_ref_dp_enc',
		'pri_nom_dp_enc',
		'seg_nom_dp_enc',
		'pri_ape_dp_enc',
		'seg_ape_dp_enc',
		'nac_dp_enc',
		'ced_dp_enc',
		'cod_nac_enc',
		'sit_leg_dp_enc',
		'fec_nac_dp_enc',
		'lug_nac_dp_enc',
		'par_nac_dp_enc',
		'sex_dp_enc',
		'est_emb_dp_enc',
		'sem_emb_dp_enc',
		'asi_ctrl_emb_dp_enc',
		'cod_est_civ',
		'es_ind_dp_enc',
		'cod_com_ind',
		'mail_dp_enc',
		'tel_hab_dp_enc',
		'tel_cel_dp_enc',
		'est_act_dp_enc',
		'tip_ins_dp_enc',
		'cod_mot_est',
		'cod_niv_ins',
		'tip_per_dp_enc',
		'cod_est_per_dp_enc',
		'fec_reg_dp_enc',
		'cod_car_est',
		'ult_gra_cur_dp_enc',
		'tit_obt_dp_enc',
		'fam_pri_lib_dp_enc',
		'cod_par_fam',
		'cod_cen_pen',
		'org_soc_dp_enc',
		'cod_org_soc',
		'mis_soc_dp_enc',
		'cod_mis_soc',
	),
)); ?>
