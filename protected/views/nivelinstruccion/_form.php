<?php
/* @var $this NivelinstruccionController */
/* @var $model Nivelinstruccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nivelinstruccion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_niv_ins'); ?>
		<?php echo $form->textField($model,'nom_niv_ins',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nom_niv_ins'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_niv_ins'); ?>
		<?php echo $form->textArea($model,'des_niv_ins',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_niv_ins'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->