<?php
/* @var $this CentropenitenciarioController */
/* @var $data Centropenitenciario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cen_pen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_cen_pen), array('view', 'id'=>$data->cod_cen_pen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_cen_pen')); ?>:</b>
	<?php echo CHtml::encode($data->nom_cen_pen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_edo')); ?>:</b>
	<?php echo CHtml::encode($data->cod_edo); ?>
	<br />



</div>