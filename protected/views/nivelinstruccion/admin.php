<?php
/* @var $this NivelinstruccionController */
/* @var $model Nivelinstruccion */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Nivel de Instruccion</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nivelinstruccion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_niv_ins',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
