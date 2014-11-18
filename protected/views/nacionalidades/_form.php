<?php
/* @var $this NacionalidadesController */
/* @var $model Nacionalidades */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nacionalidades-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_nac_enc'); ?>
		<?php echo $form->textField($model,'nom_nac_enc',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nom_nac_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_nac_enc'); ?>
		<?php echo $form->textArea($model,'des_nac_enc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_nac_enc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->