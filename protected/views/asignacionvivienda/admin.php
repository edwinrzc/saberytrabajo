<?php
/* @var $this AsignacionviviendaController */
/* @var $model Asignacionvivienda */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Asignar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

");
?>

<h1>Asignacion de Vivienda</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'asignacionvivienda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'num_viv_asi_viv',
		array(
				'name'=>'cod_pro',
				'value'=>'$data->proyecto->nom_pro',
				'filter'=>CHtml::listData(Proyecto::model()->findAll(),'cod_pro','nom_pro'),
		),
		array(
				'name'=>'cod_dp_enc',
				'value'=>'$data->persona->ced_dp_enc',
				'filter'=>CHtml::listData(Datosencuestado::model()->findAll(),'cod_dp_enc','ced_dp_enc'),
		),
		//'cod_user',
		'fec_reg_asi_viv',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
