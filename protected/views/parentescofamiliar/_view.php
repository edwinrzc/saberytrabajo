<?php
/* @var $this ParentescofamiliarController */
/* @var $data Parentescofamiliar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_par_fam')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_par_fam), array('view', 'id'=>$data->cod_par_fam)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_par_fam')); ?>:</b>
	<?php echo CHtml::encode($data->nom_par_fam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_par_fam')); ?>:</b>
	<?php echo CHtml::encode($data->des_par_fam); ?>
	<br />


</div>