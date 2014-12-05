<?php
/* @var $this InformacionlaboralController */
/* @var $model Informacionlaboral */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionlaboral-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_dp_enc'); ?>
		<?php echo $form->textField($model,'cod_dp_enc'); ?>
		<?php echo $form->error($model,'cod_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_ocu'); ?>
		<?php echo $form->textField($model,'cod_ocu'); ?>
		<?php echo $form->error($model,'cod_ocu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tra_act_inf_lab'); ?>
		<?php echo $form->textField($model,'tra_act_inf_lab',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tra_act_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tip_ins_inf_lab'); ?>
		<?php echo $form->textField($model,'tip_ins_inf_lab',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tip_ins_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fue_ing_inf_lab'); ?>
		<?php echo $form->textField($model,'fue_ing_inf_lab'); ?>
		<?php echo $form->error($model,'fue_ing_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ing_per_inf_lab'); ?>
		<?php echo $form->textField($model,'ing_per_inf_lab'); ?>
		<?php echo $form->error($model,'ing_per_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'act_ext_inf_lab'); ?>
		<?php echo $form->textField($model,'act_ext_inf_lab',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'act_ext_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mon_act_ext_inf_lab'); ?>
		<?php echo $form->textField($model,'mon_act_ext_inf_lab'); ?>
		<?php echo $form->error($model,'mon_act_ext_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tot_ing_per_inf_lab'); ?>
		<?php echo $form->textField($model,'tot_ing_per_inf_lab'); ?>
		<?php echo $form->error($model,'tot_ing_per_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_tra_inf_lab'); ?>
		<?php echo $form->textField($model,'sec_tra_inf_lab',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sec_tra_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_ali_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_ali_inf_lab'); ?>
		<?php echo $form->error($model,'esg_ali_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_med_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_med_inf_lab'); ?>
		<?php echo $form->error($model,'esg_med_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_vic_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_vic_inf_lab'); ?>
		<?php echo $form->error($model,'esg_vic_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_beb_alc_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_beb_alc_inf_lab'); ?>
		<?php echo $form->error($model,'esg_beb_alc_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_edu_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_edu_inf_lab'); ?>
		<?php echo $form->error($model,'esg_edu_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_rec_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_rec_inf_lab'); ?>
		<?php echo $form->error($model,'esg_rec_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_ser_bas_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_ser_bas_inf_lab'); ?>
		<?php echo $form->error($model,'esg_ser_bas_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_arr_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_arr_inf_lab'); ?>
		<?php echo $form->error($model,'esg_arr_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_jue_aza_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_jue_aza_inf_lab'); ?>
		<?php echo $form->error($model,'esg_jue_aza_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_fam_externo_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_fam_externo_inf_lab'); ?>
		<?php echo $form->error($model,'esg_fam_externo_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_cre_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_cre_inf_lab'); ?>
		<?php echo $form->error($model,'esg_cre_inf_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esg_otr_inf_lab'); ?>
		<?php echo $form->textField($model,'esg_otr_inf_lab'); ?>
		<?php echo $form->error($model,'esg_otr_inf_lab'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->