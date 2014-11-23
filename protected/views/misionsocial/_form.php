<?php
/* @var $this MisionsocialController */
/* @var $model Misionsocial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'misionsocial-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_mis_soc'); ?>
		<?php echo $form->textField($model,'nom_mis_soc',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'nom_mis_soc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_mis_soc'); ?>
		<?php echo $form->textArea($model,'des_mis_soc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_mis_soc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->