<?php
/* @var $this CondicionsaludController */
/* @var $model Condicionsalud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'condicionsalud-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php 
		$opciones = array('S'=>'','N'=>'disabled');
		echo $form->errorSummary($model); 
	?>
<div class="row">
	<table class="tabla-int" >
		<tr>
			<th colspan="3" >Condicion Salud</th>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'tie_tip_dis_con_sal'); ?>
				<input type="hidden" name="action" value="CS" />
				<input type="hidden" name="Condicionsalud[cod_dp_enc]" value="<?php echo $id;?>" />
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'tip_dis_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php 
						$sel1 = array('');
						
						if(isset($model->tie_tip_dis_con_sal) && !empty($model->tie_tip_dis_con_sal))
						{
								
							$sel1[trim($model->tie_tip_dis_con_sal)] = array('selected'=>'selected');
								
						}
						
						echo CHtml::dropDownList('Condicionsalud[tie_tip_dis_con_sal]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...',
								  'style'=>'width:220px;','options'=>$sel1,'class'=>'slt_opc_campos'));
					?>
				<?php echo $form->error($model,'tie_tip_dis_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php 
						$sel2 = array('');
						$disabled = 'disabled';
						if(isset($model->tip_dis_con_sal) && !empty($model->tip_dis_con_sal))
						{
								
							$sel2[trim($model->tip_dis_con_sal)] = array('selected'=>'selected');
							$disabled = '';
						}
						
						echo CHtml::dropDownList('Condicionsalud[tip_dis_con_sal]', $model, 
              				array('A' => 'Auditiva', 'M' => 'Motora',
								  'I' => 'Intelectual','V'=>'Visual'),
							array('empty' => 'Seleccione...','disabled'=>$disabled, 
								  'style'=>'width:220px;','options'=>$sel2,'class'=>'clear-error'));
					?>
				<?php echo $form->error($model,'tip_dis_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'tie_adi_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'tip_adi_con_sal'); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php 
						$sel3 = array('');
						
						if(isset($model->tie_adi_con_sal) && !empty($model->tie_adi_con_sal))
						{
								
							$sel3[trim($model->tie_adi_con_sal)] = array('selected'=>'selected');
								
						}
						
						echo CHtml::dropDownList('Condicionsalud[tie_adi_con_sal]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel3, 'style'=>'width:220px;','class'=>'slt_opc_campos'));
					?>
				<?php echo $form->error($model,'tie_adi_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php 
						$sel4 = array('');
						$disabled = 'disabled';
						if(isset($model->tip_adi_con_sal) && !empty($model->tip_adi_con_sal))
						{
								
							$sel4[trim($model->tip_adi_con_sal)] = array('selected'=>'selected');
							$disabled = '';
						}
						
						echo CHtml::dropDownList('Condicionsalud[tip_adi_con_sal]', $model, 
              				array('A' => 'Alcohol', 'CLL' => 'Cigarrillo',
								  'C' => 'Chimo','D'=>'Drogas',
								  'M'=>'Medicamentos','O'=>'Otro'),
							array('empty' => 'Seleccione...','disabled'=>$disabled,
								  'style'=>'width:220px;','options'=>$sel4,'class'=>'clear-error slt_opc_campos'));
					?>
				<?php echo $form->error($model,'tip_adi_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'otr_adi_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'pad_enf_con_sal'); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php 
					  $disabled = 'disabled';
					  if(!empty($model->otr_adi_con_sal))
					  {
					  	$disabled = '';
					  }
					  echo $form->textField($model,'otr_adi_con_sal',array('size'=>20,'maxlength'=>20,'disabled'=>$disabled,)); ?>
				<?php echo $form->error($model,'otr_adi_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php 
						$sel5 = array('');
						
						if(isset($model->pad_enf_con_sal) && !empty($model->pad_enf_con_sal))
						{
								
							$sel5[trim($model->pad_enf_con_sal)] = array('selected'=>'selected');
								
						}
						
						echo CHtml::dropDownList('Condicionsalud[pad_enf_con_sal]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel5, 'style'=>'width:220px;','class'=>'slt_opc_campos'));
					?>
				<?php echo $form->error($model,'pad_enf_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'rec_tra_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'tip_tra_con_sal'); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php 
						$sel6 = array('');
						$disabled = 'disabled';
						if(isset($model->rec_tra_con_sal) && !empty($model->rec_tra_con_sal))
						{
								
							$sel6[trim($model->rec_tra_con_sal)] = array('selected'=>'selected');
							$disabled = $opciones[$model->rec_tra_con_sal];
						}
						
						echo CHtml::dropDownList('Condicionsalud[rec_tra_con_sal]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','disabled'=>$disabled, 
								  'style'=>'width:220px;','options'=>$sel6,'class'=>'slt_opc_campos'));
					?>
				<?php echo $form->error($model,'rec_tra_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php 
						$sel7 = array('');
						$disabled = 'disabled';
						if(isset($model->tip_tra_con_sal) && !empty($model->tip_tra_con_sal))
						{
								
							$sel7[trim($model->tip_tra_con_sal)] = array('selected'=>'selected');
							$disabled = '';
						}
						
						echo CHtml::dropDownList('Condicionsalud[tip_tra_con_sal]', $model, 
              				array('T' => 'Temporal', 'P' => 'Permanente'),
							array('empty' => 'Seleccione...','disabled'=>$disabled, 
								  'style'=>'width:220px;','options'=>$sel7,'class'=>'clear-error'));
					?>
				<?php echo $form->error($model,'tip_tra_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'cod_enf'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'des_tra_con_sal'); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php
		             $enfermedad = new CDbCriteria;
		             $enfermedad->order = 'nom_enf ASC';
		             $disabled = 'disabled';
		             if(!empty($model->cod_enf))
					 {
					 	$disabled = '';
					 }
		       ?>
				<?php
		             echo $form->dropDownList($model,'cod_enf',
							CHtml::listData(Enfermedad::model()->findAll($enfermedad),'cod_enf','nom_enf'),
		             						array('prompt' => 'Seleccione...','class'=>'clear-error', 
												  'style'=>'width:280px;','disabled'=>$disabled,
							)
					);
		       ?>
				<?php echo $form->error($model,'cod_enf'); ?>
			</td>
			<td colspan="2">
				<?php 
					$disabled = 'disabled';
					if(!empty($model->des_tra_con_sal))
					{
						$disabled = '';
					}
					echo $form->textArea($model,'des_tra_con_sal',array('rows'=>3, 'cols'=>40,'disabled'=>$disabled,)); ?>
				<?php echo $form->error($model,'des_tra_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'otr_enf_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'otr_des_tra_con_sal'); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php 
					$disabled = 'disabled';
					if(!empty($model->otr_enf_con_sal))
					{
						$disabled = '';
					} 
					
					  echo $form->textField($model,'otr_enf_con_sal',array('size'=>40,'maxlength'=>80,'disabled'=>$disabled,)); ?>
				<?php echo $form->error($model,'otr_enf_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php 
						$disabled = 'disabled';
						if(!empty($model->otr_des_tra_con_sal))
						{
							$disabled = '';
						} 
					
					  echo $form->textArea($model,'otr_des_tra_con_sal',array('rows'=>3, 'cols'=>40,'disabled'=>$disabled,)); ?>
				<?php echo $form->error($model,'otr_des_tra_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'req_ayu_tec_con_sal'); ?>
			</td>
			<td colspan="2">
				<label for="Condicionsalud_ayuda_tecnica">¿Tipo de Ayuda Tecnica?</label>
			</td>
		</tr>		
		<tr>
			<td>
				<?php 
						$sel8 = array('');
						
						if(isset($model->req_ayu_tec_con_sal) && !empty($model->req_ayu_tec_con_sal))
						{
								
							$sel8[trim($model->req_ayu_tec_con_sal)] = array('selected'=>'selected');
								
						}
						
						echo CHtml::dropDownList('Condicionsalud[req_ayu_tec_con_sal]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel8, 'style'=>'width:220px;','class'=>'slt_opc_campos'));
				?>
				<?php echo $form->error($model,'req_ayu_tec_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php
					 $modelo = Ayudatecnica::model();
		             $ayuda = new CDbCriteria;
		             $ayuda->order = 'nom_ayu_tec ASC';
		             $disabled = 'disabled';
		             $sel22[] = "";
		             //print_r($model->requerida);die;
		             if(is_array($model->requerida) && count($model->requerida)>0){
		             
						$disabled = $opciones[$model->req_ayu_tec_con_sal];
		             	foreach ($model->requerida AS $key=>$value){
		             		$sel22[$value['cod_ayu_tec']] = array('selected'=>'selected');
		             	}
		             	 
		             }
		       ?>
				<?php
		             echo $form->dropDownList(Ayudarequerida::model(),'cod_ayu_tec',
							CHtml::listData($modelo->findAll($ayuda),'cod_ayu_tec','nom_ayu_tec'),
		             						array('class'=>'clear-error', 
												  'style'=>'width:280px;height:	120px;', 'multiple' => 'multiple','disabled'=>$disabled,
												  'options'=>$sel22,
							)
					);
		       ?>
				<?php echo $form->error($modelo,'cod_ayu_tec'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<table>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model,'fre_med_con_sal'); ?>
						</td>
						<td>
							<?php echo $form->labelEx($model,'rec_asi_med_con_sal'); ?>
						</td>
						<td>
							<?php echo $form->labelEx($model,'tip_asi_med_con_sal'); ?>
						</td>
					</tr>		
					<tr>
						<td>
							<?php 
									$sel9 = array('');
									
									if(isset($model->fre_med_con_sal) && !empty($model->fre_med_con_sal))
									{
											
										$sel9[trim($model->fre_med_con_sal)] = array('selected'=>'selected');
											
									}
									
									echo CHtml::dropDownList('Condicionsalud[fre_med_con_sal]', $model, 
			              				array('D' => 'Diario', 'S' => 'Semanal',
			              					  'M'=>'Mensual','T'=>'Trimestral',
											  'ST'=>'Semestral','A'=>'Anual'),
										array('empty' => 'Seleccione...','options'=>$sel9, 'style'=>'width:220px;','class'=>'clear-error'));
								?>
							<?php echo $form->error($model,'fre_med_con_sal'); ?>
						</td>
						<td>
							<?php 
									$sel10 = array('');
									
									if(isset($model->rec_asi_med_con_sal) && !empty($model->rec_asi_med_con_sal))
									{
											
										$sel10[trim($model->rec_asi_med_con_sal)] = array('selected'=>'selected');
											
									}
									
									echo CHtml::dropDownList('Condicionsalud[rec_asi_med_con_sal]', $model, 
			              				array('P' => 'Publica', 'PV' => 'Privada'),
										array('empty' => 'Seleccione...','options'=>$sel10, 'style'=>'width:220px;','class'=>'clear-error'));
								?>
							<?php echo $form->error($model,'rec_asi_med_con_sal'); ?>
						</td>
						<td>
							<?php 
									$sel11 = array('');
									
									if(isset($model->tip_asi_med_con_sal) && !empty($model->tip_asi_med_con_sal))
									{
											
										$sel11[trim($model->tip_asi_med_con_sal)] = array('selected'=>'selected');
											
									}
									
									echo CHtml::dropDownList('Condicionsalud[tip_asi_med_con_sal]', $model, 
			              				array('P' => 'Preventiva', 'C' => 'Curativa'),
										array('empty' => 'Seleccione...','options'=>$sel11, 'style'=>'width:220px;','class'=>'clear-error'));
								?>
							<?php echo $form->error($model,'tip_asi_med_con_sal'); ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<th colspan="3" >Alimentacion</th>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'alt_apr_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'pes_apro_con_sal'); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php echo $form->textField($model,'alt_apr_con_sal',array('size'=>3,'maxlength'=>4)); ?>
				<?php echo $form->error($model,'alt_apr_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->textField($model,'pes_apro_con_sal',array('size'=>3,'maxlength'=>3)); ?>
				<?php echo $form->error($model,'pes_apro_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<?php echo $form->labelEx($model,'num_com_dia_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'con_com_cas_con_sal'); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php echo $form->textField($model,'num_com_dia_con_sal',array('size'=>40,'maxlength'=>1)); ?>
				<?php echo $form->error($model,'num_com_dia_con_sal'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->textField($model,'con_com_cas_con_sal',array('size'=>40,'maxlength'=>3)); ?>
				<?php echo $form->error($model,'con_com_cas_con_sal'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<table>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model,'con_com_fue_cas_con_sal'); ?>
						</td>
						<td>
							<?php echo $form->labelEx($model,'cod_cad_ali'); ?>
						</td>
						<td>
							<?php echo $form->labelEx($model,'otr_cad_ali'); ?>
						</td>
					</tr>		
					<tr>
						<td>
							<?php echo $form->textField($model,'con_com_fue_cas_con_sal',array('size'=>3,'maxlength'=>3)); ?>
							<?php echo $form->error($model,'con_com_fue_cas_con_sal'); ?>
						</td>
						<td>
						   <?php
					             $cadena = new CDbCriteria;
					             $cadena->order = 'nom_cad_ali ASC';
					       ?>
							<?php
					             echo $form->dropDownList($model,'cod_cad_ali',
										CHtml::listData(Cadenaalimentos::model()->findAll($cadena),'cod_cad_ali','nom_cad_ali'),
					             						array('prompt' => 'Seleccione...','class'=>'slt_opc_campos', 'style'=>'width:280px;'
										)
								);
					       ?>
							<?php echo $form->error($model,'cod_cad_ali'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'otr_cad_ali',array('size'=>40,'maxlength'=>40)); ?>
							<?php echo $form->error($model,'otr_cad_ali'); ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<table>
					<tr>
						<td colspan="3" >Nº de Consumo Semanal (Nº de veces que come)</td>
					</tr>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model1,'car_roj_ali_sem'); ?>
							<input type="hidden" name="Alimentacionsemanal[cod_dp_enc]" value="<?php echo $id;?>" />
						</td>
						<td colspan="2">
							<?php echo $form->textField($model1,'car_roj_ali_sem',array('size'=>20,'maxlength'=>2)); ?>
							<?php echo $form->error($model1,'car_roj_ali_sem'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model1,'car_cor_ali_sem'); ?>
						</td>
						<td colspan="2">
							<?php echo $form->textField($model1,'car_cor_ali_sem',array('size'=>20,'maxlength'=>2)); ?>
							<?php echo $form->error($model1,'car_cor_ali_sem'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model1,'car_mar_ali_sem'); ?>
						</td>
						<td colspan="2">
							<?php echo $form->textField($model1,'car_mar_ali_sem',array('size'=>20,'maxlength'=>2)); ?>
							<?php echo $form->error($model1,'car_mar_ali_sem'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model1,'hor_ali_sem'); ?>
						</td>
						<td colspan="2">
							<?php echo $form->textField($model1,'hor_ali_sem',array('size'=>20,'maxlength'=>2)); ?>
							<?php echo $form->error($model1,'hor_ali_sem'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model1,'fru_ali_sem'); ?>
						</td>
						<td colspan="2">
							<?php echo $form->textField($model1,'fru_ali_sem',array('size'=>20,'maxlength'=>2)); ?>
							<?php echo $form->error($model1,'fru_ali_sem'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model1,'dul_ali_sem'); ?>
						</td>
						<td colspan="2">
							<?php echo $form->textField($model1,'dul_ali_sem',array('size'=>20,'maxlength'=>2)); ?>
							<?php echo $form->error($model1,'dul_ali_sem'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model1,'car_ali_sem'); ?>
						</td>
						<td colspan="2">
							<?php echo $form->textField($model1,'car_ali_sem',array('size'=>20,'maxlength'=>2)); ?>
							<?php echo $form->error($model1,'car_ali_sem'); ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
	<div class="row buttons">
		<?php echo CHtml::Button($model->isNewRecord ? 'Registrar' : 'Guardar',array('id'=>'btn-condicion-salud', 'class'=>'small blue nice button radius')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->