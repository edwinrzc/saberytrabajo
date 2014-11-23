<?php
/* @var $this DatosencuestadoController */
/* @var $data Datosencuestado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_dp_enc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_dp_enc), array('view', 'id'=>$data->cod_dp_enc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_par')); ?>:</b>
	<?php echo CHtml::encode($data->cod_par); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_com_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->dir_com_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->sec_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pun_ref_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->pun_ref_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pri_nom_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->pri_nom_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seg_nom_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->seg_nom_dp_enc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pri_ape_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->pri_ape_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seg_ape_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->seg_ape_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nac_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->nac_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ced_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->ced_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_nac_enc')); ?>:</b>
	<?php echo CHtml::encode($data->cod_nac_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sit_leg_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->sit_leg_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fec_nac_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->fec_nac_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lug_nac_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->lug_nac_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('par_nac_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->par_nac_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->sex_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('est_emb_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->est_emb_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sem_emb_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->sem_emb_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asi_ctrl_emb_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->asi_ctrl_emb_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_est_civ')); ?>:</b>
	<?php echo CHtml::encode($data->cod_est_civ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('es_ind_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->es_ind_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_com_ind')); ?>:</b>
	<?php echo CHtml::encode($data->cod_com_ind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->mail_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_hab_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->tel_hab_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_cel_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->tel_cel_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('est_act_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->est_act_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_ins_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->tip_ins_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_mot_est')); ?>:</b>
	<?php echo CHtml::encode($data->cod_mot_est); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_niv_ins')); ?>:</b>
	<?php echo CHtml::encode($data->cod_niv_ins); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_per_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->tip_per_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_est_per_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->cod_est_per_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fec_reg_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->fec_reg_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_car_est')); ?>:</b>
	<?php echo CHtml::encode($data->cod_car_est); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ult_gra_cur_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->ult_gra_cur_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tit_obt_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->tit_obt_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fam_pri_lib_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->fam_pri_lib_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_par_fam')); ?>:</b>
	<?php echo CHtml::encode($data->cod_par_fam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cen_pen')); ?>:</b>
	<?php echo CHtml::encode($data->cod_cen_pen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('org_soc_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->org_soc_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_org_soc')); ?>:</b>
	<?php echo CHtml::encode($data->cod_org_soc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mis_soc_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->mis_soc_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_mis_soc')); ?>:</b>
	<?php echo CHtml::encode($data->cod_mis_soc); ?>
	<br />

	*/ ?>

</div>