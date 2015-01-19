<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */
/* @var $form CActiveForm */

?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'datosencuestado-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
		
	<div class="row grid-view">
		<table class="items" >
			<tr>
				<th colspan="3" >Datos Personales</th>
			</tr>
			<?php 
			if($tipo == 'GF'):
			?>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'cod_jef_fam_dp_enc'); ?>					
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'cod_par_jef_fam_dp_enc'); ?>					
				</td>
			</tr>
			<tr>
				<td>
					<?php
			            if ($model->cod_jef_fam_dp_enc!='')
						{
							$value=$model->jefe->ced_dp_enc;
						}
						else {
							$value='';
						}
						
						echo $form->hiddenField($model, 'cod_jef_fam_dp_enc');
						$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
						'name'=>'cod_jef_fam_dp_enc',
						'model'=>$model,
						'value'=>$value,
						'sourceUrl'=>$this->createUrl('Listarjefefamiliar'),
						'options'=>array(
							'minLength'=>'3',
							'showAnim'=>'fold',
							'select' => 'js:function(event, ui)
							{ jQuery("#Datosencuestado_cod_jef_fam_dp_enc").val(ui.item["id"]); }',
							'search'=> 'js:function(event, ui)
							{ jQuery("#Datosencuestado_cod_jef_fam_dp_enc").val(0); }'
						),
						));
			       ?>
				</td>
				<td colspan="2">
					<?php
			             $parentesco = new CDbCriteria;
			             $parentesco->order = 'nom_par_fam ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_par_jef_fam_dp_enc',
								CHtml::listData(Parentescofamiliar::model()->findAll($parentesco),'cod_par_fam','nom_par_fam'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:130px;'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_par_jef_fam_dp_enc'); ?>
				</td>
			</tr>
			<?php 
			endif;
			?>
			<tr>
				<td width="50%">
					<?php echo $form->labelEx($model,'cod_edo'); ?>
					<input type="hidden" name="action" value="DP" />
					<input type="hidden" name="Datosencuestado[tip_per_dp_enc]" value="<?php echo $tipo;?>" />
				</td>
				<td colspan="2"><?php echo $form->labelEx($model,'cod_mun'); ?></td>
			</tr>
			<tr>
				<td>
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
			                       array(
			                           'ajax' => array(
			                           'type' => 'POST',
			                           'url' => CController::createUrl('datosencuestado/municipios'),
			                           'update' => '#Datosencuestado_cod_mun'
			                       ),'options'=>$sel,'prompt' => 'Seleccione...', 'style'=>'width:220px;'
			                 )
			             );
			       ?>
					<?php echo $form->error($model,'co_estado'); ?>
				</td>
				<td colspan="2">
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
			             echo $form->dropDownList($model,'cod_mun',CHtml::listData(array(''),'ci_munici','municipio'),
			                       array(
			                           'ajax' => array(
			                           'type' => 'POST',
			                           'url' => CController::createUrl('datosencuestado/parroquia'),
			                           'update' => '#Datosencuestado_cod_par'
			                       ),'options'=>$sel,'prompt' => 'Seleccione...', 'style'=>'width:220px;'
			                   )
			             );
			       ?>
					<?php echo $form->error($model,'cod_mun'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'cod_par'); ?>					
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'dir_com_dp_enc'); ?>					
				</td>
			</tr>
			<tr>
				<td>
					<?php
			             $parroquia = new CDbCriteria;
			             $parroquia->select = 'ci_parroq, parroquia';
			             $parroquia->order = 'parroquia ASC';
			       ?>
			       <?php
			             echo $form->dropDownList($model,'cod_par',CHtml::listData(array(''),'ci_parroq','parroquia'),
			             						array('prompt' => 'Seleccione una Parroquia...', 'style'=>'width:220px;'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_par'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'dir_com_dp_enc',array('size'=>40,'maxlength'=>150)); ?>
					<?php echo $form->error($model,'dir_com_dp_enc'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'sec_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pun_ref_dp_enc'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->textField($model,'sec_dp_enc',array('size'=>40,'maxlength'=>80)); ?>
					<?php echo $form->error($model,'sec_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pun_ref_dp_enc',array('size'=>40,'maxlength'=>80)); ?>
					<?php echo $form->error($model,'pun_ref_dp_enc'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pri_nom_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'seg_nom_dp_enc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->textField($model,'pri_nom_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'pri_nom_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'seg_nom_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'seg_nom_dp_enc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pri_ape_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'seg_ape_dp_enc'); ?>
				</td>
			</tr>						
			<tr>
				<td>
					<?php echo $form->textField($model,'pri_ape_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'pri_ape_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'seg_ape_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'seg_ape_dp_enc'); ?>
				</td>
			</tr>						
			<tr>
				<td>
					<?php echo $form->labelEx($model,'ced_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'cod_nac_enc'); ?>
				</td>
			</tr>						
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[nac_dp_enc]', $model, 
              				array('V' => 'V', 'E' => 'E'));
					?>
					<?php echo $form->textField($model,'ced_dp_enc',array('style'=>'width:160px;')); ?>
					<?php echo $form->error($model,'ced_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php
			             $naciona = new CDbCriteria;
			             $naciona->order = 'nom_nac_enc ASC';
			       ?>
			       <?php
			             echo $form->dropDownList($model,'cod_nac_enc',CHtml::listData(Nacionalidades::model()->findAll($naciona),'cod_nac_enc','nom_nac_enc'),
			             						array('prompt' => 'Seleccione la nacionalidad...', 'style'=>'width:220px;'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_nac_enc'); ?>	
				</td>
			</tr>						
			<tr>
				<td>
					<?php echo $form->labelEx($model,'sit_leg_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'fec_nac_dp_enc'); ?>
				</td>
			</tr>						
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[sit_leg_dp_enc]', $model, 
              				array('N' => 'Nacionalizado', 'R' => 'Residenciado'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'sit_leg_dp_enc'); ?>
				</td>
				<td colspan="2">
					
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'language'=>'es',
					    'name'=>'Datosencuestado[fec_nac_dp_enc]',
						'value'=>$model->fec_nac_dp_enc,
					    // additional javascript options for the date picker plugin
					    'htmlOptions'=>array(
							'class'=>'shadowdatepicker', 'style'=>'width:210px;',
							'readonly' => "readonly",
					    ),
					    'options'=>array(
					        'showAnim'=>'fold',
							'dateFormat' => 'yy-mm-dd', // save to db format
							//'changeYear' => 'true',
							'showAnim'=>'slide',
							'changeYear' => 'true',
							'dateFormat' => 'yy-mm-dd', // save to db format
							'altField' => '#fec_pla_ins',
							'class'=>'desa-opcio',
							//'minDate' => '1940-04-1',
							'maxDate' => '+y',
							'altField' => '#self_pointing_id',
							
					    ),
					    
					));
					?>
					<?php echo $form->error($model,'fec_nac_dp_enc'); ?>
				</td>
			</tr>						
			<tr>
				<td>
					<?php echo $form->labelEx($model,'lug_nac_dp_enc'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'par_nac_dp_enc'); ?>
				</td>				
				<td>
					<?php echo $form->labelEx($model,'sex_dp_enc'); ?>
				</td>
			</tr>						
			<tr>
				<td>
					<?php echo $form->textField($model,'lug_nac_dp_enc',array('size'=>40,'maxlength'=>50)); ?>
					<?php echo $form->error($model,'lug_nac_dp_enc'); ?>
				</td>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[par_nac_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','style'=>'width:110px;'));
					?>
					<?php echo $form->error($model,'par_nac_dp_enc'); ?>
				</td>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[sex_dp_enc]', $model, 
              				array('M' => 'Masculino', 'F' => 'Femenino'),
							array('empty' => 'Seleccione...','style'=>'width:110px;'));
					?>
					<?php echo $form->error($model,'sex_dp_enc'); ?>
				</td>
			</tr>						
			<tr style="display: none;" class="tr_depende_sexo" >
				<td>
					<?php echo $form->labelEx($model,'est_emb_dp_enc'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'sem_emb_dp_enc'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'asi_ctrl_emb_dp_enc'); ?>
				</td>
			</tr>						
			<tr style="display: none;" class="tr_depende_sexo">
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[est_emb_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos'));
					?>
					<?php echo $form->error($model,'est_emb_dp_enc'); ?>
				</td>
				<td>
					<?php echo $form->textField($model,'sem_emb_dp_enc',array('disabled'=>'disabled')); ?>
					<?php echo $form->error($model,'sem_emb_dp_enc'); ?>
				</td>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[asi_ctrl_emb_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','disabled'=>'disabled'));
					?>
					<?php echo $form->error($model,'asi_ctrl_emb_dp_enc'); ?>
				</td>
			</tr>						
			<tr>
				<td>
					<?php echo $form->labelEx($model,'cod_est_civ'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'es_ind_dp_enc'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'cod_com_ind'); ?>
				</td>
			</tr>						
			<tr>
				<td width:20px>
					<?php
			             $estadicivil = new CDbCriteria;
			             $estadicivil->order = 'nom_est_civ ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_est_civ',CHtml::listData(Estadocivil::model()->findAll($estadicivil),'cod_est_civ','nom_est_civ'),
			             						array('prompt' => 'Estado civil...', 'style'=>'width:220px;'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_est_civ'); ?>
				</td>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[es_ind_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:110px;'));
					?>
					<?php echo $form->error($model,'es_ind_dp_enc'); ?>
				</td>
				<td>					
					<?php
			             $estadicivil = new CDbCriteria;
			             $estadicivil->order = 'nom_com_ind ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_com_ind',CHtml::listData(Comunidadindigena::model()->findAll($estadicivil),'cod_com_ind','nom_com_ind'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:110px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_com_ind'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'mail_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'tel_hab_dp_enc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->textField($model,'mail_dp_enc',array('size'=>40,'maxlength'=>100)); ?>
					<?php echo $form->error($model,'mail_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'tel_hab_dp_enc',array('size'=>40,'maxlength'=>16)); ?>
					<?php echo $form->error($model,'tel_hab_dp_enc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'tel_cel_dp_enc'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'est_act_dp_enc'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'tip_ins_dp_enc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->textField($model,'tel_cel_dp_enc',array('size'=>40,'maxlength'=>16)); ?>
					<?php echo $form->error($model,'tel_cel_dp_enc'); ?>
				</td>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[est_act_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:110px;'));
					?>
					<?php echo $form->error($model,'est_act_dp_enc'); ?>
				</td>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[tip_ins_dp_enc]', $model, 
              				array('P' => 'Publica', 'PV' => 'Privada'),
							array('empty' => 'Seleccione...','disabled'=>'disabled','style'=>'width:110px;'));
					?>
					<?php echo $form->error($model,'tip_ins_dp_enc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'cod_mot_est'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'cod_niv_ins'); ?>
				</td>				
				<td>
					<?php echo $form->labelEx($model,'cod_car_est'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php
			             $motivo = new CDbCriteria;
			             $motivo->order = 'nom_mot_est ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_mot_est',CHtml::listData(Motivoestudio::model()->findAll($motivo),'cod_mot_est','nom_mot_est'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:220px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_mot_est'); ?>
				</td>
				<td>
					<?php
			             $nivel = new CDbCriteria;
			             $nivel->order = 'nom_niv_ins ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_niv_ins',CHtml::listData(Nivelinstruccion::model()->findAll($nivel),'cod_niv_ins','nom_niv_ins'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:110px;','class'=>'slt_opc_campos'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_niv_ins'); ?>
				</td>
				<td>
					<?php
			             $nivel = new CDbCriteria;
			             $nivel->order = 'nom_car_est ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_car_est',CHtml::listData(Carreraestudio::model()->findAll($nivel),'cod_car_est','nom_car_est'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:110px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_car_est'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'ult_gra_cur_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'tit_obt_dp_enc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->textField($model,'ult_gra_cur_dp_enc'); ?>
					<?php echo $form->error($model,'ult_gra_cur_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'tit_obt_dp_enc',array('size'=>40,'maxlength'=>60)); ?>
					<?php echo $form->error($model,'tit_obt_dp_enc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'fam_pri_lib_dp_enc'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'cod_par_fam'); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'cod_cen_pen'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[fam_pri_lib_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'fam_pri_lib_dp_enc'); ?>
				</td>
				<td>
					<?php
			             $parentesco = new CDbCriteria;
			             $parentesco->order = 'nom_par_fam ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_par_fam',
								CHtml::listData(Parentescofamiliar::model()->findAll($parentesco),'cod_par_fam','nom_par_fam'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:110px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_par_fam'); ?>
				</td>
				<td>
					<?php
			             $centro = new CDbCriteria;
			             $centro->order = 'nom_cen_pen ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_cen_pen',
								CHtml::listData(Centropenitenciario::model()->findAll($centro),'cod_cen_pen','nom_cen_pen'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:110px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_cen_pen'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'org_soc_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'cod_org_soc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[org_soc_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'org_soc_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php
			             $organiza = new CDbCriteria;
			             $organiza->order = 'nom_org_soc ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_org_soc',
								CHtml::listData(Organizacionsocial::model()->findAll($organiza),'cod_org_soc','nom_org_soc'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:110px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_org_soc'); ?>
				</td>
			</tr>	<tr>
				<td>
					<?php echo $form->labelEx($model,'mis_soc_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'cod_mis_soc'); ?>
				</td>
			</tr>			
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Datosencuestado[mis_soc_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'mis_soc_dp_enc'); ?>
				</td>
				<td colspan="2">
					<?php
			             $mision = new CDbCriteria;
			             $mision->order = 'nom_mis_soc ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_mis_soc',
								CHtml::listData(Misionsocial::model()->findAll($mision),'cod_mis_soc','nom_mis_soc'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:110px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_mis_soc'); ?>
				</td>
			</tr>						
		</table>
	</div>

	<!-- div class="row">
		<?php echo $form->labelEx($model,'tip_per_dp_enc'); ?>
		<?php echo $form->textField($model,'tip_per_dp_enc',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tip_per_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_est_per_dp_enc'); ?>
		<?php echo $form->textField($model,'cod_est_per_dp_enc'); ?>
		<?php echo $form->error($model,'cod_est_per_dp_enc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fec_reg_dp_enc'); ?>
		<?php echo $form->textField($model,'fec_reg_dp_enc'); ?>
		<?php echo $form->error($model,'fec_reg_dp_enc'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Registrar',array('id'=>'btn-datos-personales', 'class'=>'small blue nice button radius')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->