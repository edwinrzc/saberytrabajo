<?php
/* @var $this CentropenitenciarioController */
/* @var $model Centropenitenciario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_cen_pen'); ?>
		<?php echo $form->textField($model,'cod_cen_pen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_cen_pen'); ?>
		<?php echo $form->textField($model,'nom_cen_pen',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_edo'); ?>
		<?php echo $form->textField($model,'cod_edo'); ?>
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