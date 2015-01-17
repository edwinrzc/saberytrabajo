<?php
/* @var $this AyudatecnicaController */
/* @var $data Ayudatecnica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_ayu_tec')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_ayu_tec), array('view', 'id'=>$data->cod_ayu_tec)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_ayu_tec')); ?>:</b>
	<?php echo CHtml::encode($data->nom_ayu_tec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_ayu_tec')); ?>:</b>
	<?php echo CHtml::encode($data->des_ayu_tec); ?>
	<br />


</div>