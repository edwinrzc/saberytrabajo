<?php
/* @var $this OrganizacionsocialController */
/* @var $model Organizacionsocial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organizacionsocial-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_org_soc'); ?>
		<?php echo $form->textField($model,'nom_org_soc',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nom_org_soc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_org_soc'); ?>
		<?php echo $form->textArea($model,'des_org_soc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'des_org_soc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->