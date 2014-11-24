<?php
/* @var $this SituacionpoliticaController */
/* @var $data Situacionpolitica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_dp_enc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_dp_enc), array('view', 'id'=>$data->cod_dp_enc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_ele_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->reg_ele_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('par_pol_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->par_pol_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_par_pol')); ?>:</b>
	<?php echo CHtml::encode($data->cod_par_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otr_par_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->otr_par_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_cen_vot_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->nom_cen_vot_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_par')); ?>:</b>
	<?php echo CHtml::encode($data->cod_par); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mie_mes_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->mie_mes_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tes_mes_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->tes_mes_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('res_par_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->res_par_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ins_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->ins_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_res_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->des_res_sit_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niv_dir_sit_pol')); ?>:</b>
	<?php echo CHtml::encode($data->niv_dir_sit_pol); ?>
	<br />

	*/ ?>

</div>