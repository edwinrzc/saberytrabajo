<?php
/* @var $this MisionsocialController */
/* @var $data Misionsocial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_mis_soc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_mis_soc), array('view', 'id'=>$data->cod_mis_soc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_mis_soc')); ?>:</b>
	<?php echo CHtml::encode($data->nom_mis_soc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_mis_soc')); ?>:</b>
	<?php echo CHtml::encode($data->des_mis_soc); ?>
	<br />


</div>