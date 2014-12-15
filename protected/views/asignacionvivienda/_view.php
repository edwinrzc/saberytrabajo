<?php
/* @var $this AsignacionviviendaController */
/* @var $data Asignacionvivienda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_asi_viv')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_asi_viv), array('view', 'id'=>$data->cod_asi_viv)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_viv_asi_viv')); ?>:</b>
	<?php echo CHtml::encode($data->num_viv_asi_viv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_pro')); ?>:</b>
	<?php echo CHtml::encode($data->cod_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_dp_enc')); ?>:</b>
	<?php echo CHtml::encode($data->cod_dp_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_user')); ?>:</b>
	<?php echo CHtml::encode($data->cod_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fec_reg_asi_viv')); ?>:</b>
	<?php echo CHtml::encode($data->fec_reg_asi_viv); ?>
	<br />


</div>