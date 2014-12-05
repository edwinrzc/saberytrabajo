<?php
/* @var $this InformacionlaboralController */
/* @var $data Informacionlaboral */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_dp_enc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_dp_enc), array('view', 'id'=>$data->cod_dp_enc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_ocu')); ?>:</b>
	<?php echo CHtml::encode($data->cod_ocu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tra_act_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->tra_act_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_ins_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->tip_ins_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fue_ing_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->fue_ing_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ing_per_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->ing_per_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('act_ext_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->act_ext_inf_lab); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mon_act_ext_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->mon_act_ext_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tot_ing_per_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->tot_ing_per_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_tra_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->sec_tra_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_ali_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_ali_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_med_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_med_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_vic_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_vic_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_beb_alc_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_beb_alc_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_edu_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_edu_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_rec_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_rec_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_ser_bas_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_ser_bas_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_arr_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_arr_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_jue_aza_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_jue_aza_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_fam_externo_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_fam_externo_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_cre_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_cre_inf_lab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esg_otr_inf_lab')); ?>:</b>
	<?php echo CHtml::encode($data->esg_otr_inf_lab); ?>
	<br />

	*/ ?>

</div>