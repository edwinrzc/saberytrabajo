<?php
/* @var $this BannerController */
/* @var $data Banner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_ban')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_ban), array('view', 'id'=>$data->cod_ban)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_ban')); ?>:</b>
	<?php echo CHtml::encode($data->nom_ban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_ban')); ?>:</b>
	<?php echo CHtml::encode($data->sec_ban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_ban')); ?>:</b>
	<?php echo CHtml::encode($data->url_ban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_ban')); ?>:</b>
	<?php echo CHtml::encode($data->img_ban); ?>
	<br />


</div>