<?php
/* @var $this SituacionpoliticaController */
/* @var $model Situacionpolitica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'situacionpolitica-form',
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
		<?php echo $form->labelEx($model,'reg_ele_sit_pol'); ?>
		<?php echo $form->textField($model,'reg_ele_sit_pol',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'reg_ele_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'par_pol_sit_pol'); ?>
		<?php echo $form->textField($model,'par_pol_sit_pol',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'par_pol_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_par_pol'); ?>
		<?php echo $form->textField($model,'cod_par_pol'); ?>
		<?php echo $form->error($model,'cod_par_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otr_par_sit_pol'); ?>
		<?php echo $form->textField($model,'otr_par_sit_pol',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'otr_par_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_cen_vot_sit_pol'); ?>
		<?php echo $form->textField($model,'nom_cen_vot_sit_pol',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nom_cen_vot_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_par'); ?>
		<?php echo $form->textField($model,'cod_par',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cod_par'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mie_mes_sit_pol'); ?>
		<?php echo $form->textField($model,'mie_mes_sit_pol',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'mie_mes_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tes_mes_sit_pol'); ?>
		<?php echo $form->textField($model,'tes_mes_sit_pol',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tes_mes_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'res_par_sit_pol'); ?>
		<?php echo $form->textField($model,'res_par_sit_pol',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'res_par_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ins_sit_pol'); ?>
		<?php echo $form->textField($model,'ins_sit_pol',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'ins_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_res_sit_pol'); ?>
		<?php echo $form->textField($model,'des_res_sit_pol',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'des_res_sit_pol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'niv_dir_sit_pol'); ?>
		<?php echo $form->textField($model,'niv_dir_sit_pol',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'niv_dir_sit_pol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->