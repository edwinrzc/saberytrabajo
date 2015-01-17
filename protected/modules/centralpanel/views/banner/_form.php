<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banner-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_ban'); ?>
		<?php echo $form->textField($model,'nom_ban',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_ban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_ban'); ?>
		<?php echo $form->textField($model,'sec_ban'); ?>
		<?php echo $form->error($model,'sec_ban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_ban'); ?>
		<?php echo $form->textField($model,'url_ban',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'url_ban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_ban'); ?>
		<?php echo $form->fileField($model, 'imagen'); ?>
		<?php echo $form->error($model,'img_ban'); ?>
	</div>
	
	<?php if(!$model->isNewRecord){ //mostramos la imagen?>
    <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/uploads/".$model->img_ban,"img_ban",array("width"=>200, 'title'=>$model->img_ban)); ?>
    </div>
    <?php } ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->