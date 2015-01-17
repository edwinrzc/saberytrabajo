<?php
/* @var $this AyudatecnicaController */
/* @var $model Ayudatecnica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ayudatecnica-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_ayu_tec'); ?>
		<?php echo $form->textField($model,'nom_ayu_tec',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nom_ayu_tec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_ayu_tec'); ?>
		<?php echo $form->textArea($model,'des_ayu_tec',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_ayu_tec'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->