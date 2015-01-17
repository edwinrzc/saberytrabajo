<?php
/* @var $this MotivoestudioController */
/* @var $data Motivoestudio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_mot_est')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_mot_est), array('view', 'id'=>$data->cod_mot_est)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_mot_est')); ?>:</b>
	<?php echo CHtml::encode($data->nom_mot_est); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_mot_est')); ?>:</b>
	<?php echo CHtml::encode($data->des_mot_est); ?>
	<br />


</div>