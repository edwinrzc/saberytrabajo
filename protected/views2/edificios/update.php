<?php
/* @var $this EdificiosController */
/* @var $model Edificios */

$this->breadcrumbs=array(
	'Edificioses'=>array('index'),
	$model->nom_edif=>array('view','id'=>$model->nom_edif),
	'Update',
);

$this->menu=array(
	array('label'=>'List Edificios', 'url'=>array('index')),
	array('label'=>'Create Edificios', 'url'=>array('create')),
	array('label'=>'View Edificios', 'url'=>array('view', 'id'=>$model->nom_edif)),
	array('label'=>'Manage Edificios', 'url'=>array('admin')),
);
?>

<h1>Update Edificios <?php echo $model->nom_edif; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>