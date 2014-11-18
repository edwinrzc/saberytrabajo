<?php
/* @var $this UbicacionencuestaController */
/* @var $model UbicacionEncuesta */

$this->breadcrumbs=array(
	'Ubicacion Encuestas'=>array('index'),
	$model->cod_ubi_enc,
);

$this->menu=array(
	array('label'=>'List UbicacionEncuesta', 'url'=>array('index')),
	array('label'=>'Create UbicacionEncuesta', 'url'=>array('create')),
	array('label'=>'Update UbicacionEncuesta', 'url'=>array('update', 'id'=>$model->cod_ubi_enc)),
	array('label'=>'Delete UbicacionEncuesta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_ubi_enc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UbicacionEncuesta', 'url'=>array('admin')),
);
?>

<h1>View UbicacionEncuesta #<?php echo $model->cod_ubi_enc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_ubi_enc',
		'cod_par',
		'dir_com_ubi_enc',
		'sec_ubi_enc',
		'pun_ref_ubi_enc',
		'fec_reg_ubi_enc',
	),
)); ?>
