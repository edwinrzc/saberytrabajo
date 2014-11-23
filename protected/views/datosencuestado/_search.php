<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_dp_enc'); ?>
		<?php echo $form->textField($model,'cod_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_par'); ?>
		<?php echo $form->textField($model,'cod_par',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dir_com_dp_enc'); ?>
		<?php echo $form->textField($model,'dir_com_dp_enc',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_dp_enc'); ?>
		<?php echo $form->textField($model,'sec_dp_enc',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pun_ref_dp_enc'); ?>
		<?php echo $form->textField($model,'pun_ref_dp_enc',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pri_nom_dp_enc'); ?>
		<?php echo $form->textField($model,'pri_nom_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seg_nom_dp_enc'); ?>
		<?php echo $form->textField($model,'seg_nom_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pri_ape_dp_enc'); ?>
		<?php echo $form->textField($model,'pri_ape_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seg_ape_dp_enc'); ?>
		<?php echo $form->textField($model,'seg_ape_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nac_dp_enc'); ?>
		<?php echo $form->textField($model,'nac_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ced_dp_enc'); ?>
		<?php echo $form->textField($model,'ced_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_nac_enc'); ?>
		<?php echo $form->textField($model,'cod_nac_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sit_leg_dp_enc'); ?>
		<?php echo $form->textField($model,'sit_leg_dp_enc',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fec_nac_dp_enc'); ?>
		<?php echo $form->textField($model,'fec_nac_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lug_nac_dp_enc'); ?>
		<?php echo $form->textField($model,'lug_nac_dp_enc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'par_nac_dp_enc'); ?>
		<?php echo $form->textField($model,'par_nac_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex_dp_enc'); ?>
		<?php echo $form->textField($model,'sex_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'est_emb_dp_enc'); ?>
		<?php echo $form->textField($model,'est_emb_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sem_emb_dp_enc'); ?>
		<?php echo $form->textField($model,'sem_emb_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asi_ctrl_emb_dp_enc'); ?>
		<?php echo $form->textField($model,'asi_ctrl_emb_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_est_civ'); ?>
		<?php echo $form->textField($model,'cod_est_civ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'es_ind_dp_enc'); ?>
		<?php echo $form->textField($model,'es_ind_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_com_ind'); ?>
		<?php echo $form->textField($model,'cod_com_ind'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mail_dp_enc'); ?>
		<?php echo $form->textField($model,'mail_dp_enc',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_hab_dp_enc'); ?>
		<?php echo $form->textField($model,'tel_hab_dp_enc',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_cel_dp_enc'); ?>
		<?php echo $form->textField($model,'tel_cel_dp_enc',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'est_act_dp_enc'); ?>
		<?php echo $form->textField($model,'est_act_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_ins_dp_enc'); ?>
		<?php echo $form->textField($model,'tip_ins_dp_enc',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_mot_est'); ?>
		<?php echo $form->textField($model,'cod_mot_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_niv_ins'); ?>
		<?php echo $form->textField($model,'cod_niv_ins'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_per_dp_enc'); ?>
		<?php echo $form->textField($model,'tip_per_dp_enc',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_est_per_dp_enc'); ?>
		<?php echo $form->textField($model,'cod_est_per_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fec_reg_dp_enc'); ?>
		<?php echo $form->textField($model,'fec_reg_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_car_est'); ?>
		<?php echo $form->textField($model,'cod_car_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ult_gra_cur_dp_enc'); ?>
		<?php echo $form->textField($model,'ult_gra_cur_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tit_obt_dp_enc'); ?>
		<?php echo $form->textField($model,'tit_obt_dp_enc',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fam_pri_lib_dp_enc'); ?>
		<?php echo $form->textField($model,'fam_pri_lib_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_par_fam'); ?>
		<?php echo $form->textField($model,'cod_par_fam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_cen_pen'); ?>
		<?php echo $form->textField($model,'cod_cen_pen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'org_soc_dp_enc'); ?>
		<?php echo $form->textField($model,'org_soc_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_org_soc'); ?>
		<?php echo $form->textField($model,'cod_org_soc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mis_soc_dp_enc'); ?>
		<?php echo $form->textField($model,'mis_soc_dp_enc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_mis_soc'); ?>
		<?php echo $form->textField($model,'cod_mis_soc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->