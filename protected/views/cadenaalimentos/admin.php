<?php
/* @var $this CadenaalimentosController */
/* @var $model Cadenaalimentos */


$this->menu=array(
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador de las Cadenas de Alimentos</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cadenaalimentos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_cad_ali',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
