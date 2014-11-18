<?php
/* @var $this EdificiosController */
/* @var $model Edificios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'edificios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_edif'); ?>
		<?php echo $form->textField($model,'nom_edif',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nom_edif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dir_edif'); ?>
		<?php echo $form->textArea($model,'dir_edif',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dir_edif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_apto_edif'); ?>
		<?php echo $form->textField($model,'num_apto_edif'); ?>
		<?php echo $form->error($model,'num_apto_edif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_comun_edif'); ?>
		<?php echo $form->checkBox($model,'area_comun_edif', array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'area_comun_edif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->