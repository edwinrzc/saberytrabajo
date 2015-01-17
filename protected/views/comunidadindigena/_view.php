<?php
/* @var $this ComunidadindigenaController */
/* @var $data Comunidadindigena */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_com_ind')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_com_ind), array('view', 'id'=>$data->cod_com_ind)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_com_ind')); ?>:</b>
	<?php echo CHtml::encode($data->nom_com_ind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_com_ind')); ?>:</b>
	<?php echo CHtml::encode($data->des_com_ind); ?>
	<br />


</div>