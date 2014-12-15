<?php
/* @var $this EnfermedadController */
/* @var $data Enfermedad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_enf')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_enf), array('view', 'id'=>$data->cod_enf)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_enf')); ?>:</b>
	<?php echo CHtml::encode($data->nom_enf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_enf')); ?>:</b>
	<?php echo CHtml::encode($data->des_enf); ?>
	<br />


</div>