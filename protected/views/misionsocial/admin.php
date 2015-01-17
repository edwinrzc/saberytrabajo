<?php
/* @var $this MisionsocialController */
/* @var $model Misionsocial */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador de Misiones</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'misionsocial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_mis_soc',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
