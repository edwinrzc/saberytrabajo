<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyecto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de Proyecto</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyecto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_pdvsa_pro',
		'nom_pro',
		'viv_asi_pro',
		'sec_pro',
		'est_pro',
		/*
		'dir_exa_pro',
		'pun_ref_pro',
		'viv_asi_pro',
		'obs_pro',
		'the_geom',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
