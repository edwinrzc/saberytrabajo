<?php
/* @var $this CadenaalimentosController */
/* @var $data Cadenaalimentos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cad_ali')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_cad_ali), array('view', 'id'=>$data->cod_cad_ali)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_cad_ali')); ?>:</b>
	<?php echo CHtml::encode($data->nom_cad_ali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_cad_ali')); ?>:</b>
	<?php echo CHtml::encode($data->des_cad_ali); ?>
	<br />


</div>