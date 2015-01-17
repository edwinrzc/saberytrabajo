<?php
/* @var $this UbicacionencuestaController */
/* @var $data UbicacionEncuesta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_ubi_enc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_ubi_enc), array('view', 'id'=>$data->cod_ubi_enc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_par')); ?>:</b>
	<?php echo CHtml::encode($data->cod_par); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_com_ubi_enc')); ?>:</b>
	<?php echo CHtml::encode($data->dir_com_ubi_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_ubi_enc')); ?>:</b>
	<?php echo CHtml::encode($data->sec_ubi_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pun_ref_ubi_enc')); ?>:</b>
	<?php echo CHtml::encode($data->pun_ref_ubi_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fec_reg_ubi_enc')); ?>:</b>
	<?php echo CHtml::encode($data->fec_reg_ubi_enc); ?>
	<br />


</div>