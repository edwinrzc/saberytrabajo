<?php
/* @var $this AsignacionviviendaController */
/* @var $model Asignacionvivienda */
/* @var $form CActiveForm */
?>
<style type="text/css">
<!--
.tabla-int {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
   text-align: center;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}

th {
   background: #FC4747;
}
.td-int
{
	background: #eee;
}
-->
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asignacionvivienda-form',
	'enableAjaxValidation'=>false,
)); ?>

<div class="row">
	<table class="tabla-int" >
		<tr>
			<th colspan="3" >Asignacion Vivienda</th>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'num_viv_asi_viv'); ?>
				<input type="hidden" name="Asignacionvivienda[cod_user]" value="<?php echo Yii::app()->user->hasState('nom_usu');?>" />
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'cod_pro'); ?>
			</td>
		</tr>
		<tr>			
			<td width="50%">
				<?php echo $form->textField($model,'num_viv_asi_viv',array('size'=>20,'maxlength'=>10)); ?>
				<?php echo $form->error($model,'num_viv_asi_viv'); ?>
			</td>
			<td colspan="2">
				<?php
			             $proyecto = new CDbCriteria;
			             $proyecto->order = 'nom_pro ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_pro',
								CHtml::listData(Proyecto::model()->findAll($proyecto),'cod_pro','nom_pro'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:180px;'
								)
						);
			       ?>
				<?php echo $form->error($model,'cod_pro'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'cod_dp_enc'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'cod_user'); ?>
			</td>
		</tr>
		<tr>			
			<td width="50%">
				<?php
						$value='';
			            if ($model->cod_dp_enc!='')
						{
							$datos = Datosencuestado::model()->findByPk($model->cod_dp_enc);
							$value= $datos->ced_dp_enc;//$model->jefe->ced_dp_enc;
						}
						
						echo $form->hiddenField($model, 'cod_dp_enc');
						$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
						'name'=>'cod_dp_enc',
						'model'=>$model,
						'value'=>$value,
						'sourceUrl'=>$this->createUrl('Listarjefefamiliar'),
						'options'=>array(
							'minLength'=>'3',
							'showAnim'=>'fold',
							'select' => 'js:function(event, ui)
							{ jQuery("#Asignacionvivienda_cod_dp_enc").val(ui.item["id"]); }',
							'search'=> 'js:function(event, ui)
							{ jQuery("#Asignacionvivienda_cod_dp_enc").val(0); }'
						),
						));
			       ?>
				<?php echo $form->error($model,'cod_dp_enc'); ?>
			</td>
			<td colspan="2">
				<input type="text" readonly="readonly" name="cod_user" value="<?php echo Yii::app()->user->nom_usu;?>" />
			</td>
		</tr>
	</table>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->