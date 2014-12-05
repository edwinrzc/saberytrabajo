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

	<?php echo $form->errorSummary($model); ?>
<div class="row">
	<table class="tabla-int" >
		<tr>
			<th colspan="3" >Situacion Politica</th>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'reg_ele_sit_pol'); ?>
				<input type="hidden" name="action" value="SP" />
				<input type="hidden" name="Situacionpolitica[cod_dp_enc]" value="<?php echo $id;?>" />
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'par_pol_sit_pol'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CHtml::dropDownList('Situacionpolitica[reg_ele_sit_pol]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...', 'style'=>'width:280px;','class'=>'clear-error slt_opc_campos'));
					?>
				<?php echo $form->error($model,'pre1_car_viv'); ?>
			</td>
			<td colspan="2">
				<?php echo CHtml::dropDownList('Situacionpolitica[par_pol_sit_pol]', $model, 
              			array('S' => 'Si', 'N' => 'No'),
						array('empty' => 'Seleccione...','disabled'=>'disabled', 'style'=>'width:280px;','class'=>'clear-error slt_opc_campos'));
				?>
				<?php echo $form->error($model,'pre2_car_viv'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'cod_par_pol'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'otr_par_sit_pol'); ?>
			</td>
		</tr>
		<tr>
			<td>			
				<?php
		             $parpol = new CDbCriteria;
		             $parpol->order = 'nom_par_pol ASC';
		       ?>
				<?php
		             echo $form->dropDownList($model,'cod_par_pol',
							CHtml::listData(Partidopolitico::model()->findAll($parpol),'cod_par_pol','nom_par_pol'),
		             						array('prompt' => 'Seleccione...','class'=>'slt_opc_campos', 'style'=>'width:280px;','disabled'=>'disabled'
							)
					);
		       ?>
				<?php echo $form->error($model,'cod_par_pol'); ?>				
			</td>
			<td colspan="2">
				<?php echo $form->textField($model,'otr_par_sit_pol',array('size'=>40,'maxlength'=>60,'disabled'=>'disabled')); ?>
				<?php echo $form->error($model,'otr_par_sit_pol'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'nom_cen_vot_sit_pol'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'cod_edo'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->textField($model,'nom_cen_vot_sit_pol',array('size'=>40,'maxlength'=>80,'disabled'=>'disabled')); ?>
				<?php echo $form->error($model,'nom_cen_vot_sit_pol'); ?>
			</td>
			<td colspan="2">
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
					
						 $model2= new Datosencuestado;
			             echo $form->dropDownList($model2,'cod_edo',CHtml::listData(Estadal::model()->findAll($estado),'cod_estado','estado'),
			                       array(
			                           'ajax' => array(
			                           'type' => 'POST',
			                           'url' => CController::createUrl('datosencuestado/municipios'),
			                           'update' => '#Datosencuestado_cod_mun'
			                       ),'options'=>$sel,'prompt' => 'Seleccione...', 'style'=>'width:280px;'
			                 )
			             );
			       ?>
					<?php echo $form->error($model2,'co_edo'); ?>
			</td>
		</tr>		
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'cod_mun'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'cod_par'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
		             $municipio = new CDbCriteria;
		             $municipio->select = 'ci_munici, municipio';
		             $municipio->order = 'municipio ASC';
		              
		             $sel[] = "";
		             
		             if(isset($data->cod_mun) && !empty($data->cod_mun))
		             {
		             	 
		             	$sel[$data->cod_mun] = array('selected'=>'selected');
		             	 
		             }
		       ?>
		       <?php
		             echo $form->dropDownList($model2,'cod_mun',CHtml::listData(array(''),'ci_munici','municipio'),
		                       array(
		                           'ajax' => array(
		                           'type' => 'POST',
		                           'url' => CController::createUrl('datosencuestado/parroquia'),
		                           'update' => '#Situacionpolitica_cod_par'
		                       ),'options'=>$sel,'prompt' => 'Seleccione...', 'style'=>'width:280px;'
		                   )
		             );
		       ?>
				<?php echo $form->error($model2,'cod_mun'); ?>
			</td>
			<td colspan="2">
				<?php
		             $parroquia = new CDbCriteria;
		             $parroquia->select = 'ci_parroq, parroquia';
		             $parroquia->order = 'parroquia ASC';
		       ?>
		       <?php
		             echo $form->dropDownList($model,'cod_par',CHtml::listData(array(''),'ci_parroq','parroquia'),
		             						array('prompt' => 'Seleccione una Parroquia...', 'style'=>'width:280px;'
							)
					);
		       ?>
				<?php echo $form->error($model,'cod_par'); ?>
			</td>
		</tr>				
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'mie_mes_sit_pol'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'tes_mes_sit_pol'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo CHtml::dropDownList('Situacionpolitica[mie_mes_sit_pol]', $model, 
		              	array('S' => 'Si', 'N' => 'No'),
						array('empty' => 'Seleccione...','disabled'=>'disabled', 'style'=>'width:280px;','class'=>'clear-error'));
				?>
				<?php echo $form->error($model,'mie_mes_sit_pol'); ?>
			</td>
			<td colspan="2">
				<?php echo CHtml::dropDownList('Situacionpolitica[tes_mes_sit_pol]', $model, 
		              	array('S' => 'Si', 'N' => 'No'),
						array('empty' => 'Seleccione...','disabled'=>'disabled', 'style'=>'width:280px;','class'=>'clear-error'));
				?>
				<?php echo $form->error($model,'tes_mes_sit_pol'); ?>
			</td>
		</tr>				
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'res_par_sit_pol'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'ins_sit_pol'); ?>
			</td>
		</tr>						
		<tr>
			<td width="50%">
				<?php echo CHtml::dropDownList('Situacionpolitica[res_par_sit_pol]', $model, 
		              	array('S' => 'Si', 'N' => 'No'),
						array('empty' => 'Seleccione...','disabled'=>'disabled', 'style'=>'width:280px;','class'=>'clear-error'));
				?>
				<?php echo $form->error($model,'res_par_sit_pol'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->textField($model,'ins_sit_pol',array('size'=>40,'maxlength'=>60,'disabled'=>'disabled')); ?>
				<?php echo $form->error($model,'ins_sit_pol'); ?>
			</td>
		</tr>				
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'des_res_sit_pol'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'niv_dir_sit_pol'); ?>
			</td>
		</tr>				
		<tr>
			<td width="50%">
				<?php echo $form->textField($model,'des_res_sit_pol',array('size'=>40,'maxlength'=>60,'disabled'=>'disabled','class'=>'clear-error')); ?>
				<?php echo $form->error($model,'des_res_sit_pol'); ?>
			</td>
			<td colspan="2">
				<?php echo CHtml::dropDownList('Situacionpolitica[niv_dir_sit_pol]', $model, 
		              	array('N' => 'Nacional', 'E' => 'Estadal',
		              		  'M'=>'Municipal','P'=>'Parroquial'
				),
						array('empty' => 'Seleccione...','disabled'=>'disabled', 'style'=>'width:280px;','class'=>'clear-error'));
				?>
				<?php echo $form->error($model,'niv_dir_sit_pol'); ?>
			</td>
		</tr>			
	</table>
</div>
	<div class="row buttons">
		<?php echo CHtml::Button($model->isNewRecord ? 'Registrar' : 'Guardar',array('id'=>'btn-situacion-politica', 'class'=>'small blue nice button radius')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->