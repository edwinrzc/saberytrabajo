<?php
/* @var $this PartidopoliticoController */
/* @var $model Partidopolitico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partidopolitico-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_par_pol'); ?>
		<?php echo $form->textField($model,'nom_par_pol',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nom_par_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_par_pol'); ?>
		<?php echo $form->textArea($model,'des_par_pol',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_par_pol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->