<?php
/* @var $this UbicacionencuestaController */
/* @var $model UbicacionEncuesta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ubicacion-encuesta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_par'); ?>
		<?php echo $form->textField($model,'cod_par',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cod_par'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dir_com_ubi_enc'); ?>
		<?php echo $form->textField($model,'dir_com_ubi_enc',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'dir_com_ubi_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_ubi_enc'); ?>
		<?php echo $form->textField($model,'sec_ubi_enc',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'sec_ubi_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pun_ref_ubi_enc'); ?>
		<?php echo $form->textField($model,'pun_ref_ubi_enc',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'pun_ref_ubi_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fec_reg_ubi_enc'); ?>
		<?php echo $form->textField($model,'fec_reg_ubi_enc'); ?>
		<?php echo $form->error($model,'fec_reg_ubi_enc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->