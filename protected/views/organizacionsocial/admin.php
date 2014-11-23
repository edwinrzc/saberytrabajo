<?php
/* @var $this OrganizacionsocialController */
/* @var $model Organizacionsocial */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador de Organizacion social</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'organizacionsocial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_org_soc',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
