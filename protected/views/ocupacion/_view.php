<?php
/* @var $this OcupacionController */
/* @var $data Ocupacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_ocu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_ocu), array('view', 'id'=>$data->cod_ocu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_ocu')); ?>:</b>
	<?php echo CHtml::encode($data->nom_ocu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_ocu')); ?>:</b>
	<?php echo CHtml::encode($data->des_ocu); ?>
	<br />


</div>