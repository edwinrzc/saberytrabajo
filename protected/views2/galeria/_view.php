<?php
/* @var $this GaleriaController */
/* @var $data Galeria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gal_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gal_id), array('view', 'id'=>$data->gal_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gal_nom')); ?>:</b>
	<?php echo CHtml::encode($data->gal_nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gal_img_json')); ?>:</b>
	<?php echo CHtml::encode($data->gal_img_json); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gal_fec_reg')); ?>:</b>
	<?php echo CHtml::encode($data->gal_fec_reg); ?>
	<br />


</div>