<?php
/* @var $this PartidopoliticoController */
/* @var $data Partidopolitico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_par_pol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_par_pol), array('view', 'id'=>$data->cod_par_pol)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_par_pol')); ?>:</b>
	<?php echo CHtml::encode($data->nom_par_pol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_par_pol')); ?>:</b>
	<?php echo CHtml::encode($data->des_par_pol); ?>
	<br />


</div>