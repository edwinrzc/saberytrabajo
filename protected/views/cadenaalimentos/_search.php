<?php
/* @var $this CadenaalimentosController */
/* @var $model Cadenaalimentos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_cad_ali'); ?>
		<?php echo $form->textField($model,'cod_cad_ali'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_cad_ali'); ?>
		<?php echo $form->textField($model,'nom_cad_ali',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_cad_ali'); ?>
		<?php echo $form->textArea($model,'des_cad_ali',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->