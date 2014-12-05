<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_ocu'); ?>
		<?php echo $form->textField($model,'cod_ocu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_ocu'); ?>
		<?php echo $form->textField($model,'nom_ocu',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_ocu'); ?>
		<?php echo $form->textArea($model,'des_ocu',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->