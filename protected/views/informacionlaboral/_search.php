<?php
/* @var $this InformacionlaboralController */
/* @var $model Informacionlaboral */
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
		<?php echo $form->label($model,'cod_ocu'); ?>
		<?php echo $form->textField($model,'cod_ocu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tra_act_inf_lab'); ?>
		<?php echo $form->textField($model,'tra_act_inf_lab',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_ins_inf_lab'); ?>
		<?php echo $form->textField($model,'tip_ins_inf_lab',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fue_ing_inf_lab'); ?>
		<?php echo $form->textField($model,'fue_ing_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ing_per_inf_lab'); ?>
		<?php echo $form->textField($model,'ing_per_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_ext_inf_lab'); ?>
		<?php echo $form->textField($model,'act_ext_inf_lab',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mon_act_ext_inf_lab'); ?>
		<?php echo $form->textField($model,'mon_act_ext_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tot_ing_per_inf_lab'); ?>
		<?php echo $form->textField($model,'tot_ing_per_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_tra_inf_lab'); ?>
		<?php echo $form->textField($model,'sec_tra_inf_lab',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_ali_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_ali_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_med_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_med_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_vic_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_vic_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_beb_alc_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_beb_alc_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_edu_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_edu_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_rec_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_rec_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_ser_bas_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_ser_bas_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_arr_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_arr_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_jue_aza_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_jue_aza_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_fam_externo_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_fam_externo_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_cre_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_cre_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esg_otr_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_otr_inf_lab'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->