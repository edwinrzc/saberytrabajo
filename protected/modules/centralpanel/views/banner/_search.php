<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_ban'); ?>
		<?php echo $form->textField($model,'cod_ban'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_ban'); ?>
		<?php echo $form->textField($model,'nom_ban',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_ban'); ?>
		<?php echo $form->textField($model,'sec_ban'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_ban'); ?>
		<?php echo $form->textField($model,'url_ban',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_ban'); ?>
		<?php echo $form->textField($model,'img_ban',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->