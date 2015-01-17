<?php
/* @var $this CadenaalimentosController */
/* @var $model Cadenaalimentos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cadenaalimentos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_cad_ali'); ?>
		<?php echo $form->textField($model,'nom_cad_ali',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nom_cad_ali'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_cad_ali'); ?>
		<?php echo $form->textArea($model,'des_cad_ali',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_cad_ali'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->