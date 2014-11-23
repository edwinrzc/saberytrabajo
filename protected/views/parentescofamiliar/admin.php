<?php
/* @var $this ParentescofamiliarController */
/* @var $model Parentescofamiliar */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Administrador Parentesco Familiar</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'parentescofamiliar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_par_fam',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
