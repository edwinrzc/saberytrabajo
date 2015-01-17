<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
);


?>

<h1>Administrador de Proyecto</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyecto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_pdvsa_pro',
		'nom_pro',
		'num_tot_viv_pro',
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
			'htmlOptions'=>array('class'=>'myCssClass','style'=>'width:80px'),
			'template'=>'{view}{update}{delete}{print}',
			'buttons'=>array(
			//<------ BOTONES ------->//	
			
			'print' => array( //bot�n para la acci�n nueva
		    'label'=>'Imprimir Asignacion', // titulo del enlace del bot�n nuevo
		    'imageUrl'=>Yii::app()->request->baseUrl.'/images/printer.png', //ruta icono para el bot�n
		    //'url'=>'#', //url de la acci�n nueva
		    'url'=>"CHtml::normalizeUrl(array('pdf', 'cod_pro'=>\$data->cod_pro))",
			'options'=>array('target'=>'_blank'),
		    ),

		),
		),
	),
)); ?>
