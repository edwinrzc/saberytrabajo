<?php
/* @var $this CarreraestudioController */
/* @var $model Carreraestudio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_car_est'); ?>
		<?php echo $form->textField($model,'cod_car_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_car_est'); ?>
		<?php echo $form->textField($model,'nom_car_est',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_car_est'); ?>
		<?php echo $form->textArea($model,'des_car_est',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'est_reg'); ?>
		<?php echo $form->textField($model,'est_reg',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->