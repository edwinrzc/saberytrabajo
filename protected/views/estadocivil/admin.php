<?php
/* @var $this EstadocivilController */
/* @var $model Estadocivil */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Estado Civil</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estadocivil-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_est_civ',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
