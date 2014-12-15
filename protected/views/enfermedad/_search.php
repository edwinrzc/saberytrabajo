<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_enf'); ?>
		<?php echo $form->textField($model,'cod_enf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_enf'); ?>
		<?php echo $form->textField($model,'nom_enf',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_enf'); ?>
		<?php echo $form->textArea($model,'des_enf',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->