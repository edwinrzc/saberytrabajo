<?php
/* @var $this SituacionpoliticaController */
/* @var $model Situacionpolitica */

$this->breadcrumbs=array(
	'Situacionpoliticas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Situacionpolitica', 'url'=>array('index')),
	array('label'=>'Create Situacionpolitica', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#situacionpolitica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Situacionpoliticas</h1>

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
	'id'=>'situacionpolitica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_dp_enc',
		'reg_ele_sit_pol',
		'par_pol_sit_pol',
		'cod_par_pol',
		'otr_par_sit_pol',
		'nom_cen_vot_sit_pol',
		/*
		'cod_par',
		'mie_mes_sit_pol',
		'tes_mes_sit_pol',
		'res_par_sit_pol',
		'ins_sit_pol',
		'des_res_sit_pol',
		'niv_dir_sit_pol',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
