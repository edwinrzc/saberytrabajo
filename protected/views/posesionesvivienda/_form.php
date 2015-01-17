<?php
/* @var $this PosesionesviviendaController */
/* @var $model Posesionesvivienda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posesionesvivienda-form',
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
		<?php echo $form->labelEx($model,'can_coc_pos_viv'); ?>
		<?php echo $form->textField($model,'can_coc_pos_viv'); ?>
		<?php echo $form->error($model,'can_coc_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_lav_pos_viv'); ?>
		<?php echo $form->textField($model,'can_lav_pos_viv'); ?>
		<?php echo $form->error($model,'can_lav_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_nev_pos_viv'); ?>
		<?php echo $form->textField($model,'can_nev_pos_viv'); ?>
		<?php echo $form->error($model,'can_nev_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_sec_pos_viv'); ?>
		<?php echo $form->textField($model,'can_sec_pos_viv'); ?>
		<?php echo $form->error($model,'can_sec_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_air_aco_pos_viv'); ?>
		<?php echo $form->textField($model,'can_air_aco_pos_viv'); ?>
		<?php echo $form->error($model,'can_air_aco_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_cam_ind_pos_viv'); ?>
		<?php echo $form->textField($model,'can_cam_ind_pos_viv'); ?>
		<?php echo $form->error($model,'can_cam_ind_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_cam_mat_pos_viv'); ?>
		<?php echo $form->textField($model,'can_cam_mat_pos_viv'); ?>
		<?php echo $form->error($model,'can_cam_mat_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_lit_pos_viv'); ?>
		<?php echo $form->textField($model,'can_lit_pos_viv'); ?>
		<?php echo $form->error($model,'can_lit_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_col_ind_pos_viv'); ?>
		<?php echo $form->textField($model,'can_col_ind_pos_viv'); ?>
		<?php echo $form->error($model,'can_col_ind_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_col_mat_pos_viv'); ?>
		<?php echo $form->textField($model,'can_col_mat_pos_viv'); ?>
		<?php echo $form->error($model,'can_col_mat_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_jue_com_pos_viv'); ?>
		<?php echo $form->textField($model,'can_jue_com_pos_viv'); ?>
		<?php echo $form->error($model,'can_jue_com_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_jue_rec_pos_viv'); ?>
		<?php echo $form->textField($model,'can_jue_rec_pos_viv'); ?>
		<?php echo $form->error($model,'can_jue_rec_pos_viv'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->