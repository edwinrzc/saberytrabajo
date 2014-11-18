<?php
/* @var $this GaleriaController */
/* @var $model Galeria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'gal_id'); ?>
		<?php echo $form->textField($model,'gal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gal_nom'); ?>
		<?php echo $form->textField($model,'gal_nom',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gal_img_json'); ?>
		<?php echo $form->textArea($model,'gal_img_json',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gal_fec_reg'); ?>
		<?php echo $form->textField($model,'gal_fec_reg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->