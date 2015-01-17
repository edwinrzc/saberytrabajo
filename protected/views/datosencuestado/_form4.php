<?php
/* @var $this InformacionlaboralController */
/* @var $model Informacionlaboral */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionlaboral-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
<div class="row">
	<table class="tabla-int" >
		<tr>
			<th colspan="3" >Informacion Laboral</th>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'cod_ocu'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'tra_act_inf_lab'); ?>
				<input type="hidden" name="action" value="IL" />
				<input type="hidden" name="Informacionlaboral[cod_dp_enc]" value="<?php echo $id;?>" />
			</td>
		</tr>		
		<tr>
			<td>
				<?php
	             $ocupacion = new CDbCriteria;
	             $ocupacion->order = 'nom_ocu ASC';
		       ?>
				<?php
		             echo $form->dropDownList($model,'cod_ocu',
							CHtml::listData(Ocupacion::model()->findAll($ocupacion),'cod_ocu','nom_ocu'),
		             						array('prompt' => 'Seleccione...','class'=>'slt_opc_campos', 'style'=>'width:280px;'
							)
					);
		       ?>
		       <?php echo $form->error($model,'cod_ocu'); ?>
			</td>
			<td colspan="2">
				<?php 
						$sel1 = array('');
						
						if(isset($model->tra_act_inf_lab) && !empty($model->tra_act_inf_lab))
						{
								
							$sel1[trim($model->tra_act_inf_lab)] = array('selected'=>'selected');
								
						}
							
						echo CHtml::dropDownList('Informacionlaboral[tra_act_inf_lab]', $model, 
		              	array('S' => 'Si', 'N' => 'No'),
						array('empty' => 'Seleccione...','options'=>$sel1, 'style'=>'width:280px;','class'=>'clear-error'));
				?>
				<?php echo $form->error($model,'tra_act_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'sec_tra_inf_lab'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->labelEx($model,'tip_ins_inf_lab'); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php 
						$sel2 = array('');
						
						if(isset($model->sec_tra_inf_lab) && !empty($model->sec_tra_inf_lab))
						{
								
							$sel2[trim($model->sec_tra_inf_lab)] = array('selected'=>'selected');
								
						}
						
						echo CHtml::dropDownList('Informacionlaboral[sec_tra_inf_lab]', $model, 
		              	array('F' => 'Formal', 'I' => 'Informal'),
						array('empty' => 'Seleccione...','options'=>$sel2, 'style'=>'width:280px;','class'=>'clear-error'));
				?>
		       <?php echo $form->error($model,'cod_ocu'); ?>
			</td>
			<td colspan="2">
				<?php 
						$sel3 = array('');
						
						if(isset($model->tip_ins_inf_lab) && !empty($model->tip_ins_inf_lab))
						{
								
							$sel3[trim($model->tip_ins_inf_lab)] = array('selected'=>'selected');
								
						}
						
						echo CHtml::dropDownList('Informacionlaboral[tip_ins_inf_lab]', $model, 
		              	array('I' => 'Independiente', 'P' => 'Publica','PV'=>'Privada'),
						array('empty' => 'Seleccione...','options'=>$sel3, 'style'=>'width:280px;','class'=>'clear-error'));
				?>
				<?php echo $form->error($model,'tra_act_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Fuente de Ingresos Personales
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'fue_ing_inf_lab'); ?>
			</td>
			<td colspan="2">
				<?php 
						$sel4 = array('');
						
						if(isset($model->fue_ing_inf_lab) && !empty($model->fue_ing_inf_lab))
						{
								
							$resu = explode(',', $model->fue_ing_inf_lab);
							foreach ($resu as $val)
							{
								$sel4[trim($val)] = array('selected'=>'selected');
							}
								
						}
						
						echo CHtml::dropDownList('Informacionlaboral[fue_ing_inf_lab]', $model, 
		              	array('HP' => 'Honorarios Profesionales', 'P' => 'Pension del IVSS','S'=>'Salarios',
		              		  'II' => 'Ingresos Independientes','R'=>'Rentas'
				),
						array('style'=>'width:280px;height:	120px;','options'=>$sel4, 'multiple' => 'multiple','class'=>'clear-error'));
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'ing_per_inf_lab'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->textField($model,'ing_per_inf_lab',array('size'=>'40')); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'act_ext_inf_lab'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->textField($model,'act_ext_inf_lab',array('size'=>40,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'act_ext_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'mon_act_ext_inf_lab'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->textField($model,'mon_act_ext_inf_lab',array('size'=>'40')); ?>
				<?php echo $form->error($model,'mon_act_ext_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tot_ing_per_inf_lab'); ?>
			</td>
			<td colspan="2">
				<?php echo $form->textField($model,'tot_ing_per_inf_lab',array('size'=>'40')); ?>
				<?php echo $form->error($model,'tot_ing_per_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" >
				<table>
					
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Esgresos Personales
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'esg_ali_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'esg_med_inf_lab'); ?>				
				
			</td>
			<td>
				<?php echo $form->labelEx($model,'esg_vic_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%" >
				<?php echo $form->textField($model,'esg_ali_inf_lab'); ?>
				<?php echo $form->error($model,'esg_ali_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'esg_med_inf_lab'); ?>
				<?php echo $form->error($model,'esg_med_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'esg_vic_inf_lab'); ?>
				<?php echo $form->error($model,'esg_vic_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'esg_beb_alc_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'esg_edu_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'esg_rec_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td width="50%" >
				<?php echo $form->textField($model,'esg_beb_alc_inf_lab'); ?>
				<?php echo $form->error($model,'esg_beb_alc_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'esg_edu_inf_lab'); ?>
				<?php echo $form->error($model,'esg_edu_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'esg_rec_inf_lab'); ?>
				<?php echo $form->error($model,'esg_rec_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'esg_ser_bas_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'esg_arr_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'esg_jue_aza_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->textField($model,'esg_ser_bas_inf_lab'); ?>
				<?php echo $form->error($model,'esg_ser_bas_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'esg_arr_inf_lab'); ?>
				<?php echo $form->error($model,'esg_arr_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'esg_jue_aza_inf_lab'); ?>
				<?php echo $form->error($model,'esg_jue_aza_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'esg_fam_externo_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'esg_cre_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'esg_otr_inf_lab'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->textField($model,'esg_fam_externo_inf_lab'); ?>
				<?php echo $form->error($model,'esg_fam_externo_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'esg_cre_inf_lab'); ?>
				<?php echo $form->error($model,'esg_cre_inf_lab'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'esg_otr_inf_lab'); ?>
				<?php echo $form->error($model,'esg_otr_inf_lab'); ?>
			</td>
		</tr>				
	</table>
<div class="form">
	<table>
		<tr>
			<td colspan="2">
				Distribucion del Tiempo (Lun a Vie)
			</td>
		</tr>
		<tr>
			<td width="50%">
				<table>					
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_tra_reg_dis_tie'); ?>
							<input type="hidden" name="Distribuciontiempo[cod_dp_enc]" value="<?php echo $id;?>" />
							<input type="hidden" name="Distribuciontiempo[tip_dis_tie]" value="LV" />
						</td>
						<td>
							<?php echo $form->textField($model1,'hor_tra_reg_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
							<?php echo $form->error($model1,'hor_tra_reg_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_rec_dis_tie'); ?>
						</td>
						<td>
							<?php echo $form->textField($model1,'hor_rec_dis_tie',array('size'=>4,'maxlength'=>4)); ?>
							<?php echo $form->error($model1,'hor_rec_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_dep_dis_tie'); ?>
						</td>
						<td>
							<?php echo $form->textField($model1,'hor_dep_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
							<?php echo $form->error($model1,'hor_dep_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_jue_aza_dis_tie'); ?>
						</td>
						<td>
							<?php echo $form->textField($model1,'hor_jue_aza_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
							<?php echo $form->error($model1,'hor_jue_aza_dis_tie'); ?>
						</td>
					</tr>
				</table>
			</td>
			<td colspan="2" width="50%">
				<table>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_tv_dis_tie'); ?>							
						</td>
						<td>
							<?php echo $form->textField($model1,'hor_tv_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
							<?php echo $form->error($model1,'hor_tv_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_lec_dis_tie'); ?>
						</td>
						<td>
							<?php echo $form->textField($model1,'hor_lec_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
							<?php echo $form->error($model1,'hor_lec_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_com_fam_dis_tie'); ?>
						</td>
						<td>
							<?php echo $form->textField($model1,'hor_com_fam_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
							<?php echo $form->error($model1,'hor_com_fam_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_otr_act_dis_tie'); ?>
						</td>
						<td>
							<?php echo $form->textField($model1,'hor_otr_act_dis_tie',array('size'=>5,'maxlength'=>5)); ?>
							<?php echo $form->error($model1,'hor_otr_act_dis_tie'); ?>
						</td>
					</tr>
				</table>				
			</td>
		</tr>
	</table>
</div><!-- form -->

<div class="form">
	<table>
		<tr>
			<td colspan="2">
				Distribucion del Tiempo (Sab a Dom)
			</td>
		</tr>
		<tr>
			<td width="50%">
				<table>					
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_tra_reg_dis_tie'); ?>
							<input type="hidden" name="Distribuciontiempo2[cod_dp_enc]" value="<?php echo $id;?>" />
							<input type="hidden" name="Distribuciontiempo2[tip_dis_tie]" value="SD" />
						</td>
						<td>
							<input id="Distribuciontiempo2_hor_tra_reg_dis_tie" type="text" name="Distribuciontiempo2[hor_tra_reg_dis_tie]" maxlength="5" size="5">
							<?php echo $form->error($model1,'hor_tra_reg_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_rec_dis_tie'); ?>
						</td>
						<td>
							<input id="Distribuciontiempo2_hor_rec_dis_tie" type="text" name="Distribuciontiempo2[hor_rec_dis_tie]" maxlength="5" size="5">
							<?php echo $form->error($model1,'hor_rec_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_dep_dis_tie'); ?>
						</td>
						<td>
							<input id="Distribuciontiempo2_hor_dep_dis_tie" type="text" name="Distribuciontiempo2[hor_dep_dis_tie]" maxlength="5" size="5">
							<?php echo $form->error($model1,'hor_dep_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_jue_aza_dis_tie'); ?>
						</td>
						<td>
							<input id="Distribuciontiempo2_hor_jue_aza_dis_tie" type="text" name="Distribuciontiempo2[hor_jue_aza_dis_tie]" maxlength="5" size="5">
							<?php echo $form->error($model1,'hor_jue_aza_dis_tie'); ?>
						</td>
					</tr>
				</table>
			</td>
			<td colspan="2" width="50%">
				<table>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_tv_dis_tie'); ?>
						</td>
						<td>
							<input id="Distribuciontiempo2_hor_tv_dis_tie" type="text" name="Distribuciontiempo2[hor_tv_dis_tie]" maxlength="5" size="5">
							<?php echo $form->error($model1,'hor_tv_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_lec_dis_tie'); ?>
						</td>
						<td>
							<input id="Distribuciontiempo2_hor_lec_dis_tie" type="text" name="Distribuciontiempo2[hor_lec_dis_tie]" maxlength="5" size="5">
							<?php echo $form->error($model1,'hor_lec_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_com_fam_dis_tie'); ?>
						</td>
						<td>
							<input id="Distribuciontiempo2_hor_com_fam_dis_tie" type="text" name="Distribuciontiempo2[hor_com_fam_dis_tie]" maxlength="5" size="5">
							<?php echo $form->error($model1,'hor_com_fam_dis_tie'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $form->labelEx($model1,'hor_otr_act_dis_tie'); ?>
						</td>
						<td>
							<input id="Distribuciontiempo2_hor_otr_act_dis_tie" type="text" name="Distribuciontiempo2[hor_otr_act_dis_tie]" maxlength="5" size="5">
							<?php echo $form->error($model1,'hor_otr_act_dis_tie'); ?>
						</td>
					</tr>
				</table>				
			</td>
		</tr>
	</table>

</div><!-- form -->

</div>
<div class="row buttons">
	<?php echo CHtml::Button($model->isNewRecord ? 'Registrar' : 'Guardar',array('id'=>'btn-info-laboral', 'class'=>'small blue nice button radius')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->