<?php
/* @var $this MotivoestudioController */
/* @var $model Motivoestudio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'motivoestudio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_mot_est'); ?>
		<?php echo $form->textField($model,'nom_mot_est',array('size'=>40,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nom_mot_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_mot_est'); ?>
		<?php echo $form->textArea($model,'des_mot_est',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_mot_est'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->