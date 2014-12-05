<?php
/* @var $this DistribuciontiempoController */
/* @var $model Distribuciontiempo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_dp_enc'); ?>
		<?php echo $form->textField($model,'cod_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_dis_tie'); ?>
		<?php echo $form->textField($model,'tip_dis_tie',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_tra_reg_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_tra_reg_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_rec_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_rec_dis_tie',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_dep_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_dep_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_jue_aza_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_jue_aza_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_com_fam_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_com_fam_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_tv_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_tv_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_lec_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_lec_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_otr_act_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_otr_act_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->