<?php
/* @var $this InformacionlaboralController */
/* @var $model Informacionlaboral */

$this->breadcrumbs=array(
	'Informacionlaborals'=>array('index'),
	$model->cod_dp_enc,
);

$this->menu=array(
	array('label'=>'List Informacionlaboral', 'url'=>array('index')),
	array('label'=>'Create Informacionlaboral', 'url'=>array('create')),
	array('label'=>'Update Informacionlaboral', 'url'=>array('update', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Delete Informacionlaboral', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_dp_enc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Informacionlaboral', 'url'=>array('admin')),
);
?>

<h1>View Informacionlaboral #<?php echo $model->cod_dp_enc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_dp_enc',
		'cod_ocu',
		'tra_act_inf_lab',
		'tip_ins_inf_lab',
		'fue_ing_inf_lab',
		'ing_per_inf_lab',
		'act_ext_inf_lab',
		'mon_act_ext_inf_lab',
		'tot_ing_per_inf_lab',
		'sec_tra_inf_lab',
		'esg_ali_inf_lab',
		'esg_med_inf_lab',
		'esg_vic_inf_lab',
		'esg_beb_alc_inf_lab',
		'esg_edu_inf_lab',
		'esg_rec_inf_lab',
		'esg_ser_bas_inf_lab',
		'esg_arr_inf_lab',
		'esg_jue_aza_inf_lab',
		'esg_fam_externo_inf_lab',
		'esg_cre_inf_lab',
		'esg_otr_inf_lab',
	),
)); ?>
