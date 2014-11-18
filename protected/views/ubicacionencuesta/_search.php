<?php
/* @var $this UbicacionencuestaController */
/* @var $model UbicacionEncuesta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_ubi_enc'); ?>
		<?php echo $form->textField($model,'cod_ubi_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_par'); ?>
		<?php echo $form->textField($model,'cod_par',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dir_com_ubi_enc'); ?>
		<?php echo $form->textField($model,'dir_com_ubi_enc',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_ubi_enc'); ?>
		<?php echo $form->textField($model,'sec_ubi_enc',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pun_ref_ubi_enc'); ?>
		<?php echo $form->textField($model,'pun_ref_ubi_enc',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fec_reg_ubi_enc'); ?>
		<?php echo $form->textField($model,'fec_reg_ubi_enc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->