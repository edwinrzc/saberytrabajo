<?php
/* @var $this EstadocivilController */
/* @var $data Estadocivil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_est_civ')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_est_civ), array('view', 'id'=>$data->cod_est_civ)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_est_civ')); ?>:</b>
	<?php echo CHtml::encode($data->nom_est_civ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_est_civ')); ?>:</b>
	<?php echo CHtml::encode($data->des_est_civ); ?>
	<br />


</div>