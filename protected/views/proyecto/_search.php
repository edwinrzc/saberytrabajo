<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_pro'); ?>
		<?php echo $form->textField($model,'cod_pro',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_pro'); ?>
		<?php echo $form->textField($model,'nom_pro',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_edo'); ?>
		<?php echo $form->textField($model,'cod_edo',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_mun'); ?>
		<?php echo $form->textField($model,'cod_mun',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_par'); ?>
		<?php echo $form->textField($model,'cod_par',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_pro'); ?>
		<?php echo $form->textField($model,'sec_pro',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dir_exa_pro'); ?>
		<?php echo $form->textField($model,'dir_exa_pro',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pun_ref_pro'); ?>
		<?php echo $form->textField($model,'pun_ref_pro',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viv_asi_pro'); ?>
		<?php echo $form->textField($model,'viv_asi_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs_pro'); ?>
		<?php echo $form->textArea($model,'obs_pro',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'the_geom'); ?>
		<?php echo $form->textField($model,'the_geom',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->