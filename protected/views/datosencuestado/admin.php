<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */



Yii::app()->clientScript->registerScript('search', "

");
?>
<div class="span-23">
<h1>Administrador de Datos Familiares</h1>

<div class="row">
	<div class="span-2">
		<a href="<?php echo Yii::app()->createUrl("/datosencuestado/jefefamiliar")?>">
			<img title="Agregar Jefe Familiar" height="50px" src="<?php echo Yii::app()->request->baseUrl.'/images/jefe2.jpg'; ?>">
		</a>
	</div>
	<div class="span-2">
		<a href="<?php echo Yii::app()->createUrl("/datosencuestado/agregarfamiliar")?>">
			<img title="Agregar Grupo Familiar" height="50px" src="<?php echo Yii::app()->request->baseUrl.'/images/grupo.jpg'; ?>">
		</a>
	</div>	
</div>
<br><br>
<br>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'datosencuestado-grid',
	'dataProvider'=>$model->search(0),
	'filter'=>$model,
	'columns'=>array(
		'cod_par',
		'dir_com_dp_enc',
		//'sec_dp_enc',
		'pun_ref_dp_enc',
		'pri_nom_dp_enc',
		'pri_ape_dp_enc',
		'ced_dp_enc',
		'gru_fam_dp_enc',
		array(
				'name'=>'cod_nac_enc',
				'value'=>'$data->nacionalidad->nom_nac_enc',
				'filter'=>CHtml::listData(Nacionalidades::model()->findAll(),'cod_nac_enc','nom_nac_enc'),
		),
		'sex_dp_enc',
		/*
		'seg_nom_dp_enc',
		'pri_ape_dp_enc',
		'seg_ape_dp_enc',
		'nac_dp_enc',
		'ced_dp_enc',
		'cod_nac_enc',
		'sit_leg_dp_enc',
		'fec_nac_dp_enc',
		'lug_nac_dp_enc',
		'par_nac_dp_enc',
		'sex_dp_enc',
		'est_emb_dp_enc',
		'sem_emb_dp_enc',
		'asi_ctrl_emb_dp_enc',
		'cod_est_civ',
		'es_ind_dp_enc',
		'cod_com_ind',
		'mail_dp_enc',
		'tel_hab_dp_enc',
		'tel_cel_dp_enc',
		'est_act_dp_enc',
		'tip_ins_dp_enc',
		'cod_mot_est',
		'cod_niv_ins',
		'tip_per_dp_enc',
		'cod_est_per_dp_enc',
		'fec_reg_dp_enc',
		'cod_car_est',
		'ult_gra_cur_dp_enc',
		'tit_obt_dp_enc',
		'fam_pri_lib_dp_enc',
		'cod_par_fam',
		'cod_cen_pen',
		'org_soc_dp_enc',
		'cod_org_soc',
		'mis_soc_dp_enc',
		'cod_mis_soc',
		*/
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('class'=>'myCssClass','style'=>'width:80px'),
			'template'=>'{view}{update}{delete}{print}{grupo}',
			'buttons'=>array(
			//<------ BOTONES ------->//	
			
			'print' => array( //botón para la acción nueva
		    'label'=>'Imprimir Asignación', // titulo del enlace del botón nuevo
		    'imageUrl'=>Yii::app()->request->baseUrl.'/images/printer.png', //ruta icono para el botón
		    //'url'=>'#', //url de la acción nueva
		    //'url'=>"CHtml::normalizeUrl(array('pdf', 'cod_dp_enc'=>\$data->cod_dp_enc))",
					'url'=>'Yii::app()->createUrl("/datosencuestado/pdf", array("cod_dp_enc"=>"$data->cod_dp_enc"))',
			'options'=>array('target'=>'_blank'),
		    ),
			'grupo' => array( //botón para la acción nueva
			'label'=>'Imprimir Asignación', // titulo del enlace del botón nuevo
			'imageUrl'=>Yii::app()->request->baseUrl.'/images/group.png', //ruta icono para el botón
			//'url'=>'#', //url de la acción nueva
			'url'=>'Yii::app()->createUrl("/datosencuestado/grupofamiliar", array("id"=>"$data->cod_dp_enc"))',
			//'options'=>array('style'=>'width:80px;'),
			),


		),
		),
	),
)); ?>

</div>
