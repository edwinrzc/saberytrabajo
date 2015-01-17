<?php
/* @var $this AsignacionviviendaController */
/* @var $model Asignacionvivienda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_asi_viv'); ?>
		<?php echo $form->textField($model,'cod_asi_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_viv_asi_viv'); ?>
		<?php echo $form->textField($model,'num_viv_asi_viv',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_pro'); ?>
		<?php echo $form->textField($model,'cod_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_dp_enc'); ?>
		<?php echo $form->textField($model,'cod_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_user'); ?>
		<?php echo $form->textField($model,'cod_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fec_reg_asi_viv'); ?>
		<?php echo $form->textField($model,'fec_reg_asi_viv'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->