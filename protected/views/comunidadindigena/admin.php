<?php
/* @var $this ComunidadindigenaController */
/* @var $model Comunidadindigena */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Comunidad Indigena</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comunidadindigena-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_com_ind',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
