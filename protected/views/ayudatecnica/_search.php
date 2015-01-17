<?php
/* @var $this AyudatecnicaController */
/* @var $model Ayudatecnica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_ayu_tec'); ?>
		<?php echo $form->textField($model,'cod_ayu_tec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_ayu_tec'); ?>
		<?php echo $form->textField($model,'nom_ayu_tec',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_ayu_tec'); ?>
		<?php echo $form->textArea($model,'des_ayu_tec',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->