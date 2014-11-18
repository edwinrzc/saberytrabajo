<?php
/* @var $this EstadocivilController */
/* @var $model Estadocivil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadocivil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_est_civ'); ?>
		<?php echo $form->textField($model,'nom_est_civ',array('size'=>40,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nom_est_civ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_est_civ'); ?>
		<?php echo $form->textArea($model,'des_est_civ',array('rows'=>6, 'cols'=>40)); ?>
		<?php echo $form->error($model,'des_est_civ'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->