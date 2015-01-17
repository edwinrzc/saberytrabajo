<?php
/* @var $this MotivoestudioController */
/* @var $model Motivoestudio */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Motivo de Estudio</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'motivoestudio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_mot_est',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
