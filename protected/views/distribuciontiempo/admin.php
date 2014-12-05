<?php
/* @var $this DistribuciontiempoController */
/* @var $model Distribuciontiempo */

$this->breadcrumbs=array(
	'Distribuciontiempos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Distribuciontiempo', 'url'=>array('index')),
	array('label'=>'Create Distribuciontiempo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#distribuciontiempo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Distribuciontiempos</h1>

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
	'id'=>'distribuciontiempo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_dp_enc',
		'tip_dis_tie',
		'hor_tra_reg_dis_tie',
		'hor_rec_dis_tie',
		'hor_dep_dis_tie',
		'hor_jue_aza_dis_tie',
		/*
		'hor_com_fam_dis_tie',
		'hor_tv_dis_tie',
		'hor_lec_dis_tie',
		'hor_otr_act_dis_tie',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
