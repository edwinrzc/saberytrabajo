<?php
/* @var $this NivelinstruccionController */
/* @var $data Nivelinstruccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_niv_ins')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_niv_ins), array('view', 'id'=>$data->cod_niv_ins)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_niv_ins')); ?>:</b>
	<?php echo CHtml::encode($data->nom_niv_ins); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_niv_ins')); ?>:</b>
	<?php echo CHtml::encode($data->des_niv_ins); ?>
	<br />


</div>