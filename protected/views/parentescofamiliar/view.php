<?php
/* @var $this ParentescofamiliarController */
/* @var $model Parentescofamiliar */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cod_par_fam)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Parentesco: <?php echo $model->nom_par_fam; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_par_fam',
		'nom_par_fam',
		'des_par_fam',
	),
)); ?>
