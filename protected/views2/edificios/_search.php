<?php
/* @var $this EdificiosController */
/* @var $model Edificios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_edif'); ?>
		<?php echo $form->textField($model,'id_edif'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_edif'); ?>
		<?php echo $form->textField($model,'nom_edif',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dir_edif'); ?>
		<?php echo $form->textArea($model,'dir_edif',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_apto_edif'); ?>
		<?php echo $form->textField($model,'num_apto_edif'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_comun_edif'); ?>
		<?php echo $form->checkBox($model,'area_comun_edif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->