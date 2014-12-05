<?php
/* @var $this DistribuciontiempoController */
/* @var $model Distribuciontiempo */

$this->breadcrumbs=array(
	'Distribuciontiempos'=>array('index'),
	$model->cod_dp_enc,
);

$this->menu=array(
	array('label'=>'List Distribuciontiempo', 'url'=>array('index')),
	array('label'=>'Create Distribuciontiempo', 'url'=>array('create')),
	array('label'=>'Update Distribuciontiempo', 'url'=>array('update', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Delete Distribuciontiempo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_dp_enc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Distribuciontiempo', 'url'=>array('admin')),
);
?>

<h1>View Distribuciontiempo #<?php echo $model->cod_dp_enc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_dp_enc',
		'tip_dis_tie',
		'hor_tra_reg_dis_tie',
		'hor_rec_dis_tie',
		'hor_dep_dis_tie',
		'hor_jue_aza_dis_tie',
		'hor_com_fam_dis_tie',
		'hor_tv_dis_tie',
		'hor_lec_dis_tie',
		'hor_otr_act_dis_tie',
	),
)); ?>
