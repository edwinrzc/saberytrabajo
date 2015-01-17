<?php
/* @var $this ProyectoController */
/* @var $data Proyecto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_pro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_pro), array('view', 'id'=>$data->cod_pro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_pro')); ?>:</b>
	<?php echo CHtml::encode($data->nom_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_edo')); ?>:</b>
	<?php echo CHtml::encode($data->cod_edo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_mun')); ?>:</b>
	<?php echo CHtml::encode($data->cod_mun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_par')); ?>:</b>
	<?php echo CHtml::encode($data->cod_par); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_pro')); ?>:</b>
	<?php echo CHtml::encode($data->sec_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_exa_pro')); ?>:</b>
	<?php echo CHtml::encode($data->dir_exa_pro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pun_ref_pro')); ?>:</b>
	<?php echo CHtml::encode($data->pun_ref_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viv_asi_pro')); ?>:</b>
	<?php echo CHtml::encode($data->viv_asi_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obs_pro')); ?>:</b>
	<?php echo CHtml::encode($data->obs_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('the_geom')); ?>:</b>
	<?php echo CHtml::encode($data->the_geom); ?>
	<br />

	*/ ?>

</div>