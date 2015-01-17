<?php
/* @var $this PosesionesviviendaController */
/* @var $model Posesionesvivienda */

$this->breadcrumbs=array(
	'Posesionesviviendas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Posesionesvivienda', 'url'=>array('index')),
	array('label'=>'Create Posesionesvivienda', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#posesionesvivienda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Posesionesviviendas</h1>

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
	'id'=>'posesionesvivienda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_dp_enc',
		'can_coc_pos_viv',
		'can_lav_pos_viv',
		'can_nev_pos_viv',
		'can_sec_pos_viv',
		'can_air_aco_pos_viv',
		/*
		'can_cam_ind_pos_viv',
		'can_cam_mat_pos_viv',
		'can_lit_pos_viv',
		'can_col_ind_pos_viv',
		'can_col_mat_pos_viv',
		'can_jue_com_pos_viv',
		'can_jue_rec_pos_viv',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
