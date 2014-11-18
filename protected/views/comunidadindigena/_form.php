<?php
/* @var $this ComunidadindigenaController */
/* @var $model Comunidadindigena */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comunidadindigena-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_com_ind'); ?>
		<?php echo $form->textField($model,'nom_com_ind',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nom_com_ind'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_com_ind'); ?>
		<?php echo $form->textArea($model,'des_com_ind',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_com_ind'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->