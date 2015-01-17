<?php
/* @var $this PartidopoliticoController */
/* @var $model Partidopolitico */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Partidos Politicos</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'partidopolitico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_par_pol',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
