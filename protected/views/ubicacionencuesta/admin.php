<?php
/* @var $this UbicacionencuestaController */
/* @var $model UbicacionEncuesta */

$this->breadcrumbs=array(
	'Ubicacion Encuestas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UbicacionEncuesta', 'url'=>array('index')),
	array('label'=>'Create UbicacionEncuesta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ubicacion-encuesta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ubicacion Encuestas</h1>

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
	'id'=>'ubicacion-encuesta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_ubi_enc',
		'cod_par',
		'dir_com_ubi_enc',
		'sec_ubi_enc',
		'pun_ref_ubi_enc',
		'fec_reg_ubi_enc',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
