<?php
/* @var $this CarreraestudioController */
/* @var $data Carreraestudio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_car_est')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_car_est), array('view', 'id'=>$data->cod_car_est)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_car_est')); ?>:</b>
	<?php echo CHtml::encode($data->nom_car_est); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_car_est')); ?>:</b>
	<?php echo CHtml::encode($data->des_car_est); ?>
	<br />



</div>