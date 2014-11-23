<?php
/* @var $this ParentescofamiliarController */
/* @var $model Parentescofamiliar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parentescofamiliar-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_par_fam'); ?>
		<?php echo $form->textField($model,'nom_par_fam',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nom_par_fam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_par_fam'); ?>
		<?php echo $form->textArea($model,'des_par_fam',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_par_fam'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->