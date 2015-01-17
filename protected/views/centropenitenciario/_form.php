<?php
/* @var $this CentropenitenciarioController */
/* @var $model Centropenitenciario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'centropenitenciario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con: <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_cen_pen'); ?>
		<?php echo $form->textField($model,'nom_cen_pen',array('size'=>40,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nom_cen_pen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_edo'); ?>
		<?php $estado = new CDbCriteria;
			  $estado->select = 'cod_estado, estado';
       		  $estado->order = 'estado ASC';
        	  
       		  $sel[] = "";
        	  
       		  if(isset($data->cod_edo) && !empty($data->cod_edo))
			  {
        	  
       	 	 	$sel[$data->cod_edo] = array('selected'=>'selected');
        	  	 
       		  }
		?>
		<?php
             echo $form->dropDownList($model,'cod_edo',CHtml::listData(Estadal::model()->findAll($estado),'cod_estado','estado'),
                       array('options'=>$sel,'prompt' => 'Seleccione un Estado...', 'style'=>'width:280px;')
             );
       ?>
		<?php echo $form->error($model,'co_estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->