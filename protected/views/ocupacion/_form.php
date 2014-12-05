<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ocupacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_ocu'); ?>
		<?php echo $form->textField($model,'nom_ocu',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nom_ocu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_ocu'); ?>
		<?php echo $form->textArea($model,'des_ocu',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_ocu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->