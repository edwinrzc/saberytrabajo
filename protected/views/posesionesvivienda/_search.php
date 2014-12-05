<?php
/* @var $this PosesionesviviendaController */
/* @var $model Posesionesvivienda */
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
		<?php echo $form->label($model,'can_coc_pos_viv'); ?>
		<?php echo $form->textField($model,'can_coc_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_lav_pos_viv'); ?>
		<?php echo $form->textField($model,'can_lav_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_nev_pos_viv'); ?>
		<?php echo $form->textField($model,'can_nev_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_sec_pos_viv'); ?>
		<?php echo $form->textField($model,'can_sec_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_air_aco_pos_viv'); ?>
		<?php echo $form->textField($model,'can_air_aco_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_cam_ind_pos_viv'); ?>
		<?php echo $form->textField($model,'can_cam_ind_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_cam_mat_pos_viv'); ?>
		<?php echo $form->textField($model,'can_cam_mat_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_lit_pos_viv'); ?>
		<?php echo $form->textField($model,'can_lit_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_col_ind_pos_viv'); ?>
		<?php echo $form->textField($model,'can_col_ind_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_col_mat_pos_viv'); ?>
		<?php echo $form->textField($model,'can_col_mat_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_jue_com_pos_viv'); ?>
		<?php echo $form->textField($model,'can_jue_com_pos_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_jue_rec_pos_viv'); ?>
		<?php echo $form->textField($model,'can_jue_rec_pos_viv'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->