<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */

$this->menu=array(
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'enfermedad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_enf',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
