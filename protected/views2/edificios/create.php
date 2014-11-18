<?php
/* @var $this EdificiosController */
/* @var $model Edificios */

$this->breadcrumbs=array(
	'Edificioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Edificios', 'url'=>array('index')),
	array('label'=>'Manage Edificios', 'url'=>array('admin')),
);
?>

<h1>Create Edificios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>