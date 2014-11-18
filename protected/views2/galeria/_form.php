<?php
/* @var $this GaleriaController */
/* @var $model Galeria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'galeria-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gal_nom'); ?>
		<?php echo $form->textField($model,'gal_nom',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'gal_nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gal_img_json'); ?>
		<?php echo $form->textArea($model,'gal_img_json',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gal_img_json'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gal_fec_reg'); ?>
		<?php echo $form->textField($model,'gal_fec_reg'); ?>
		<?php echo $form->error($model,'gal_fec_reg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->