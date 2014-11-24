<?php
/* @var $this SituacionpoliticaController */
/* @var $model Situacionpolitica */

$this->breadcrumbs=array(
	'Situacionpoliticas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Situacionpolitica', 'url'=>array('index')),
	array('label'=>'Manage Situacionpolitica', 'url'=>array('admin')),
);
?>

<h1>Create Situacionpolitica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>