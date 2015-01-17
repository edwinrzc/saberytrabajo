<?php
/* @var $this OrganizacionsocialController */
/* @var $data Organizacionsocial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_org_soc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_org_soc), array('view', 'id'=>$data->cod_org_soc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_org_soc')); ?>:</b>
	<?php echo CHtml::encode($data->nom_org_soc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_org_soc')); ?>:</b>
	<?php echo CHtml::encode($data->des_org_soc); ?>
	<br />


</div>