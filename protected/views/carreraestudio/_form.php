<?php
/* @var $this CarreraestudioController */
/* @var $model Carreraestudio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carreraestudio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_car_est'); ?>
		<?php echo $form->textField($model,'nom_car_est',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nom_car_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_car_est'); ?>
		<?php echo $form->textArea($model,'des_car_est',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_car_est'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->