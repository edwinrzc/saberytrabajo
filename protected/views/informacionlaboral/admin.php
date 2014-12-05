<?php
/* @var $this InformacionlaboralController */
/* @var $model Informacionlaboral */

$this->breadcrumbs=array(
	'Informacionlaborals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Informacionlaboral', 'url'=>array('index')),
	array('label'=>'Create Informacionlaboral', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informacionlaboral-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Informacionlaborals</h1>

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
	'id'=>'informacionlaboral-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_dp_enc',
		'cod_ocu',
		'tra_act_inf_lab',
		'tip_ins_inf_lab',
		'fue_ing_inf_lab',
		'ing_per_inf_lab',
		/*
		'act_ext_inf_lab',
		'mon_act_ext_inf_lab',
		'tot_ing_per_inf_lab',
		'sec_tra_inf_lab',
		'esg_ali_inf_lab',
		'esg_med_inf_lab',
		'esg_vic_inf_lab',
		'esg_beb_alc_inf_lab',
		'esg_edu_inf_lab',
		'esg_rec_inf_lab',
		'esg_ser_bas_inf_lab',
		'esg_arr_inf_lab',
		'esg_jue_aza_inf_lab',
		'esg_fam_externo_inf_lab',
		'esg_cre_inf_lab',
		'esg_otr_inf_lab',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
