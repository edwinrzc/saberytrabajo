<?php
/* @var $this PosesionesviviendaController */
/* @var $data Posesionesvivienda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_dp_enc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_dp_enc), array('view', 'id'=>$data->cod_dp_enc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_coc_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_coc_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_lav_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_lav_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_nev_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_nev_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_sec_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_sec_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_air_aco_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_air_aco_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_cam_ind_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_cam_ind_pos_viv); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('can_cam_mat_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_cam_mat_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_lit_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_lit_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_col_ind_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_col_ind_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_col_mat_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_col_mat_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_jue_com_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_jue_com_pos_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_jue_rec_pos_viv')); ?>:</b>
	<?php echo CHtml::encode($data->can_jue_rec_pos_viv); ?>
	<br />

	*/ ?>

</div>