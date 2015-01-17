<?php
/* @var $this AyudatecnicaController */
/* @var $model Ayudatecnica */

$this->menu=array(
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ayudatecnica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_ayu_tec',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
