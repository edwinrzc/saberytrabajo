<?php
/* @var $this EdificiosController */
/* @var $data Edificios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_edif')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nom_edif), array('view', 'id'=>$data->nom_edif)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_edif')); ?>:</b>
	<?php echo CHtml::encode($data->id_edif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_edif')); ?>:</b>
	<?php echo CHtml::encode($data->dir_edif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_apto_edif')); ?>:</b>
	<?php echo CHtml::encode($data->num_apto_edif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_comun_edif')); ?>:</b>
	<?php echo CHtml::encode($data->area_comun_edif); ?>
	<br />


</div>