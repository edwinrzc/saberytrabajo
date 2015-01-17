<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enfermedad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_enf'); ?>
		<?php echo $form->textField($model,'nom_enf',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nom_enf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_enf'); ?>
		<?php echo $form->textArea($model,'des_enf',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_enf'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->