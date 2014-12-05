<?php
/* @var $this DistribuciontiempoController */
/* @var $data Distribuciontiempo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_dp_enc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_dp_enc), array('view', 'id'=>$data->cod_dp_enc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->tip_dis_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_tra_reg_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->hor_tra_reg_dis_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_rec_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->hor_rec_dis_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_dep_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->hor_dep_dis_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_jue_aza_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->hor_jue_aza_dis_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_com_fam_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->hor_com_fam_dis_tie); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_tv_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->hor_tv_dis_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_lec_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->hor_lec_dis_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_otr_act_dis_tie')); ?>:</b>
	<?php echo CHtml::encode($data->hor_otr_act_dis_tie); ?>
	<br />

	*/ ?>

</div>