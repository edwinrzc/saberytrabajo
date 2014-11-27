<?php
/* @var $this CaracteristicaviviendaController */
/* @var $model Caracteristicavivienda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caracteristicavivienda-form',
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
		<?php echo $form->labelEx($model,'pre1_car_viv'); ?>
		<?php echo $form->textField($model,'pre1_car_viv',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'pre1_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre2_car_viv'); ?>
		<?php echo $form->textField($model,'pre2_car_viv',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pre2_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre3_car_viv'); ?>
		<?php echo $form->textField($model,'pre3_car_viv',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pre3_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre4_car_viv'); ?>
		<?php echo $form->textField($model,'pre4_car_viv',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pre4_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre5_car_viv'); ?>
		<?php echo $form->textField($model,'pre5_car_viv',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pre5_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre6_car_viv'); ?>
		<?php echo $form->textField($model,'pre6_car_viv',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'pre6_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre7_car_viv'); ?>
		<?php echo $form->textField($model,'pre7_car_viv',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pre7_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre8_car_viv'); ?>
		<?php echo $form->textField($model,'pre8_car_viv',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'pre8_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre9_car_viv'); ?>
		<?php echo $form->textField($model,'pre9_car_viv',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pre9_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre10_car_viv'); ?>
		<?php echo $form->textField($model,'pre10_car_viv',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'pre10_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre11_car_viv'); ?>
		<?php echo $form->textField($model,'pre11_car_viv',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'pre11_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre12_car_viv'); ?>
		<?php echo $form->textField($model,'pre12_car_viv',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'pre12_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre13_car_viv'); ?>
		<?php echo $form->textField($model,'pre13_car_viv',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'pre13_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre14_car_viv'); ?>
		<?php echo $form->textField($model,'pre14_car_viv',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'pre14_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre15_car_viv'); ?>
		<?php echo $form->textField($model,'pre15_car_viv',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'pre15_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre16_car_viv'); ?>
		<?php echo $form->textField($model,'pre16_car_viv',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'pre16_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre17_car_viv'); ?>
		<?php echo $form->textField($model,'pre17_car_viv',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'pre17_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre18_car_viv'); ?>
		<?php echo $form->textField($model,'pre18_car_viv',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'pre18_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre19_car_viv'); ?>
		<?php echo $form->textField($model,'pre19_car_viv',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'pre19_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre20_car_viv'); ?>
		<?php echo $form->textField($model,'pre20_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre20_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre21_car_viv'); ?>
		<?php echo $form->textField($model,'pre21_car_viv',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'pre21_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre22_car_viv'); ?>
		<?php echo $form->textField($model,'pre22_car_viv',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'pre22_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre23_car_viv'); ?>
		<?php echo $form->textField($model,'pre23_car_viv',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'pre23_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre24_car_viv'); ?>
		<?php echo $form->textField($model,'pre24_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre24_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre25_car_viv'); ?>
		<?php echo $form->textField($model,'pre25_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre25_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre26_car_viv'); ?>
		<?php echo $form->textField($model,'pre26_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre26_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre27_car_viv'); ?>
		<?php echo $form->textField($model,'pre27_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre27_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre28_car_viv'); ?>
		<?php echo $form->textField($model,'pre28_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre28_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre29_car_viv'); ?>
		<?php echo $form->textField($model,'pre29_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre29_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre30_car_viv'); ?>
		<?php echo $form->textField($model,'pre30_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre30_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre31_car_viv'); ?>
		<?php echo $form->textField($model,'pre31_car_viv',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pre31_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre32_car_viv'); ?>
		<?php echo $form->textField($model,'pre32_car_viv',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pre32_car_viv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre33_car_viv'); ?>
		<?php echo $form->textField($model,'pre33_car_viv',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pre33_car_viv'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->