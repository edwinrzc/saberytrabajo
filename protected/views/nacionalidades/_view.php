<?php
/* @var $this NacionalidadesController */
/* @var $data Nacionalidades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_nac_enc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_nac_enc), array('view', 'id'=>$data->cod_nac_enc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_nac_enc')); ?>:</b>
	<?php echo CHtml::encode($data->nom_nac_enc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_nac_enc')); ?>:</b>
	<?php echo CHtml::encode($data->des_nac_enc); ?>
	<br />


</div>