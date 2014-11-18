<?php
/* @var $this CentropenitenciarioController */
/* @var $model Centropenitenciario */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Centro Penitenciario</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'centropenitenciario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_cen_pen',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
