<?php
/* @var $this CaracteristicaviviendaController */
/* @var $model Caracteristicavivienda */

$this->breadcrumbs=array(
	'Caracteristicaviviendas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Caracteristicavivienda', 'url'=>array('index')),
	array('label'=>'Create Caracteristicavivienda', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#caracteristicavivienda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Caracteristicaviviendas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'caracteristicavivienda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_dp_enc',
		'pre1_car_viv',
		'pre2_car_viv',
		'pre3_car_viv',
		'pre4_car_viv',
		'pre5_car_viv',
		/*
		'pre6_car_viv',
		'pre7_car_viv',
		'pre8_car_viv',
		'pre9_car_viv',
		'pre10_car_viv',
		'pre11_car_viv',
		'pre12_car_viv',
		'pre13_car_viv',
		'pre14_car_viv',
		'pre15_car_viv',
		'pre16_car_viv',
		'pre17_car_viv',
		'pre18_car_viv',
		'pre19_car_viv',
		'pre20_car_viv',
		'pre21_car_viv',
		'pre22_car_viv',
		'pre23_car_viv',
		'pre24_car_viv',
		'pre25_car_viv',
		'pre26_car_viv',
		'pre27_car_viv',
		'pre28_car_viv',
		'pre29_car_viv',
		'pre30_car_viv',
		'pre31_car_viv',
		'pre32_car_viv',
		'pre33_car_viv',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
