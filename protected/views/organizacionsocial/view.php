<?php
/* @var $this OrganizacionsocialController */
/* @var $model Organizacionsocial */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_org_soc)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Organizacion: <?php echo $model->nom_org_soc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_org_soc',
		'nom_org_soc',
		'des_org_soc',
	),
)); ?>
