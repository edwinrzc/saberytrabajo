<?php
/* @var $this NacionalidadesController */
/* @var $model Nacionalidades */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Nacionalidades</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nacionalidades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_nac_enc',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
