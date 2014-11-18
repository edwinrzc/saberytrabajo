<?php
/* @var $this CarreraestudioController */
/* @var $model Carreraestudio */


$this->menu=array(
	array('label'=>'List Carreraestudio', 'url'=>array('index')),
	array('label'=>'Create Carreraestudio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Carrera de Estudio</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'carreraestudio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_car_est',
		'nom_car_est',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
