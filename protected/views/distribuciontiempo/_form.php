<?php
/* @var $this DistribuciontiempoController */
/* @var $model Distribuciontiempo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'distribuciontiempo-form',
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
		<?php echo $form->labelEx($model,'tip_dis_tie'); ?>
		<?php echo $form->textField($model,'tip_dis_tie',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tip_dis_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_tra_reg_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_tra_reg_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hor_tra_reg_dis_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_rec_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_rec_dis_tie',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'hor_rec_dis_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_dep_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_dep_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hor_dep_dis_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_jue_aza_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_jue_aza_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hor_jue_aza_dis_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_com_fam_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_com_fam_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hor_com_fam_dis_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_tv_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_tv_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hor_tv_dis_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_lec_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_lec_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hor_lec_dis_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_otr_act_dis_tie'); ?>
		<?php echo $form->textField($model,'hor_otr_act_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hor_otr_act_dis_tie'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->