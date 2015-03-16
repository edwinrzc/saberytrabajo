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
		
				<input type="hidden" name="action" value="DP" />
				<input type="hidden" name="Datosencuestado[tip_per_dp_enc]" value="<?php echo $tipo;?>" />
			
			<?php 
			if($tipo == 'GF'):
			?>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'cod_jef_fam_dp_enc'); ?>		
					<?php
					$value='';
						if ($model->cod_jef_fam_dp_enc!='' && isset($model->jefe->ced_dp_enc))
						{
							$value=$model->jefe->ced_dp_enc;
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
							{
							jQuery("#Datosencuestado_cod_jef_fam_dp_enc").val(ui.item["id"]);
							jQuery("#Datosencuestado_cod_par").val(ui.item["codpar"]);
							}',
							'search'=> 'js:function(event, ui)
							{ jQuery("#Datosencuestado_cod_jef_fam_dp_enc").val(0); }'
						),
						));
			        ?>
					<input type="hidden" id="Datosencuestado_cod_par" name="Datosencuestado[cod_par]" value="" />			
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'cod_par_jef_fam_dp_enc'); ?>					
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
			
					
				</div>
			</div>
			<?php 
			endif;
			if($tipo != 'GF'):
			?>
			
		<fieldset><LEGEND align="left">UBICACI&Oacute;N GEOGR&Aacute;FICA</LEGEND>	
			<div class="row">
				<div class="span3">
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
				</div>
				
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_mun'); ?>
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
				</div>
				
				<div class="span3">
				<?php echo $form->labelEx($model,'cod_par'); ?>		
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
				</div>
			</div>
			
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'dir_com_dp_enc'); ?>	
					<?php echo $form->textField($model,'dir_com_dp_enc',array('size'=>40,'maxlength'=>150)); ?>
					<?php echo $form->error($model,'dir_com_dp_enc'); ?>		
				</div>	
				<div class="span3">
					<?php echo $form->labelEx($model,'sec_dp_enc'); ?>
					<?php echo $form->textField($model,'sec_dp_enc',array('size'=>40,'maxlength'=>80)); ?>
					<?php echo $form->error($model,'sec_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'pun_ref_dp_enc'); ?>
					<?php echo $form->textField($model,'pun_ref_dp_enc',array('size'=>40,'maxlength'=>80)); ?>
					<?php echo $form->error($model,'pun_ref_dp_enc'); ?>
				</div>
			</div>
		</fieldset>	
			<?php
			endif;
			?>
		<br>
		
		<fieldset><LEGEND align="left">DATOS PERSONALES</LEGEND>	
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'ced_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[nac_dp_enc]', $model, 
              				array('V' => 'V', 'E' => 'E'),
							array('class'=>'slt_opc_campos'));
					?>
					<?php echo $form->textField($model,'ced_dp_enc',array('style'=>'width:160px;')); ?>
					<?php echo $form->error($model,'ced_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'pri_nom_dp_enc'); ?>
					<?php echo $form->textField($model,'pri_nom_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'pri_nom_dp_enc'); ?>
				</div>
				<div class="span3">	
					<?php echo $form->labelEx($model,'seg_nom_dp_enc'); ?>
					<?php echo $form->textField($model,'seg_nom_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'seg_nom_dp_enc'); ?>
				</div>
				
			</div>
			
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'pri_ape_dp_enc'); ?>
					<?php echo $form->textField($model,'pri_ape_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'pri_ape_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'seg_ape_dp_enc'); ?>
					<?php echo $form->textField($model,'seg_ape_dp_enc',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'seg_ape_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'fec_nac_dp_enc'); ?>
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
				</div>
			</div>
			
			<div class="row">
				<div class="span3">	
					<?php echo $form->labelEx($model,'cod_nac_enc'); ?>
					<?php
			             $naciona = new CDbCriteria;
			             $naciona->order = 'nom_nac_enc ASC';
			       ?>
			       <?php
			             echo $form->dropDownList($model,'cod_nac_enc',CHtml::listData(Nacionalidades::model()->findAll($naciona),'cod_nac_enc','nom_nac_enc'),
			             						array('prompt' => 'Seleccione la nacionalidad...', 'style'=>'width:220px;', 'disabled'=>'disabled'
								)
						);
			       ?>
				   <?php echo $form->error($model,'cod_nac_enc'); ?>
				</div>
				<div class="span3">	
					<?php echo $form->labelEx($model,'sit_leg_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[sit_leg_dp_enc]', $model, 
              				array('N' => 'Nacionalizado', 'R' => 'Residenciado'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;', 'disabled'=>'disabled'));
					?>
					<?php echo $form->error($model,'sit_leg_dp_enc'); ?>
				</div>
				<div class="span3">	
					<?php echo $form->labelEx($model,'lug_nac_dp_enc'); ?>
					<?php echo $form->textField($model,'lug_nac_dp_enc',array('size'=>40,'maxlength'=>50)); ?>
					<?php echo $form->error($model,'lug_nac_dp_enc'); ?>
				</div>
			</div>		
			
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'mail_dp_enc'); ?>
					<?php echo $form->textField($model,'mail_dp_enc',array('size'=>40,'maxlength'=>100)); ?>
					<?php echo $form->error($model,'mail_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'tel_hab_dp_enc'); ?>
					<?php $this->widget('CMaskedTextField', array(
						'model' => $model,
						'attribute' => 'tel_hab_dp_enc',
						'mask' => '(9999)-9999999',
						//'charMap'=>array('a'=>'[V E G J P N]', '9'=>'[0 1 2 3 4 5 6 7 8 9]'),
						'htmlOptions'  => array('size' => 20, 'placeholder'=>'Télefono de Habitación')
						));
					?>
					<?php echo $form->error($model,'tel_hab_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'tel_cel_dp_enc'); ?>
					<?php $this->widget('CMaskedTextField', array(
						'model' => $model,
						'attribute' => 'tel_cel_dp_enc',
						'mask' => '(9999)-9999999',
						//'charMap'=>array('a'=>'[V E G J P N]', '9'=>'[0 1 2 3 4 5 6 7 8 9]'),
						'htmlOptions'  => array('size' => 20, 'placeholder'=>'Télefono Celular')
						));
					?>
					<?php echo $form->error($model,'tel_cel_dp_enc'); ?>
				</div>
			</div>
				
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'par_nac_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[par_nac_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'par_nac_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_est_civ'); ?>
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
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'sex_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[sex_dp_enc]', $model, 
              				array('M' => 'Masculino', 'F' => 'Femenino'),
							array('empty' => 'Seleccione...','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'sex_dp_enc'); ?>
				</div>
			</div>
			
			<div style="display: none;" class="row tr_depende_sexo">
				<div class="span3">
					<?php echo $form->labelEx($model,'est_emb_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[est_emb_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'est_emb_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'sem_emb_dp_enc'); ?>
					<?php echo $form->textField($model,'sem_emb_dp_enc',array('disabled'=>'disabled')); ?>
					<?php echo $form->error($model,'sem_emb_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'asi_ctrl_emb_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[asi_ctrl_emb_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','disabled'=>'disabled','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'asi_ctrl_emb_dp_enc'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'est_act_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[est_act_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'est_act_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'tip_ins_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[tip_ins_dp_enc]', $model, 
              				array('P' => 'Publica', 'PV' => 'Privada'),
							array('empty' => 'Seleccione...','disabled'=>'disabled','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'tip_ins_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_mot_est'); ?>
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
				</div>
			</div>		
			
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_niv_ins'); ?>
					<?php
			             $nivel = new CDbCriteria;
			             $nivel->order = 'nom_niv_ins ASC';
			        ?>
					<?php
			             echo $form->dropDownList($model,'cod_niv_ins',CHtml::listData(Nivelinstruccion::model()->findAll($nivel),'cod_niv_ins','nom_niv_ins'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:220px;','class'=>'slt_opc_campos'
								)
						);
			        ?>
					<?php echo $form->error($model,'cod_niv_ins'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_car_est'); ?>
					<?php
			             $nivel = new CDbCriteria;
			             $nivel->order = 'nom_car_est ASC';
			        ?>
					<?php
			             echo $form->dropDownList($model,'cod_car_est',CHtml::listData(Carreraestudio::model()->findAll($nivel),'cod_car_est','nom_car_est'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:220px;','disabled'=>'disabled'
								)
						);
			        ?>
					<?php echo $form->error($model,'cod_car_est'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'ult_gra_cur_dp_enc'); ?>
					<?php echo $form->textField($model,'ult_gra_cur_dp_enc'); ?>
					<?php echo $form->error($model,'ult_gra_cur_dp_enc'); ?>
				</div>
			</div>
		</fieldset>
		
		<fieldset><LEGEND align="left">DATOS SOCIALES</LEGEND>		
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'es_ind_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[es_ind_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'es_ind_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_com_ind'); ?>			
					<?php
			             $estadicivil = new CDbCriteria;
			             $estadicivil->order = 'nom_com_ind ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_com_ind',CHtml::listData(Comunidadindigena::model()->findAll($estadicivil),'cod_com_ind','nom_com_ind'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:220px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_com_ind'); ?>
				</div>
				<div class="span3">
				
				</div>
			</div>	
			
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'fam_pri_lib_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[fam_pri_lib_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'fam_pri_lib_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_par_fam'); ?>
					<?php
			             $parentesco = new CDbCriteria;
			             $parentesco->order = 'nom_par_fam ASC';
			        ?>
					<?php
			             echo $form->dropDownList($model,'cod_par_fam',
								CHtml::listData(Parentescofamiliar::model()->findAll($parentesco),'cod_par_fam','nom_par_fam'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:220px;','disabled'=>'disabled'
								)
						);
			        ?>
					<?php echo $form->error($model,'cod_par_fam'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_cen_pen'); ?>
					<?php
			             $centro = new CDbCriteria;
			             $centro->order = 'nom_cen_pen ASC';
			        ?>
					<?php
			             echo $form->dropDownList($model,'cod_cen_pen',
								CHtml::listData(Centropenitenciario::model()->findAll($centro),'cod_cen_pen','nom_cen_pen'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:220px;','disabled'=>'disabled'
								)
						);
			        ?>
					<?php echo $form->error($model,'cod_cen_pen'); ?>
				</div>
			</div>	
			
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'org_soc_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[org_soc_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'org_soc_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_org_soc'); ?>
					<?php
			             $organiza = new CDbCriteria;
			             $organiza->order = 'nom_org_soc ASC';
			        ?>
					<?php
			             echo $form->dropDownList($model,'cod_org_soc',
								CHtml::listData(Organizacionsocial::model()->findAll($organiza),'cod_org_soc','nom_org_soc'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:220px;','disabled'=>'disabled'
								)
						);
			        ?>
					<?php echo $form->error($model,'cod_org_soc'); ?>
				</div>
				<div class="span3">
				
				</div>
			</div>	
				
			<div class="row">
				<div class="span3">
					<?php echo $form->labelEx($model,'mis_soc_dp_enc'); ?>
					<?php echo CHtml::dropDownList('Datosencuestado[mis_soc_dp_enc]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','class'=>'slt_opc_campos','style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'mis_soc_dp_enc'); ?>
				</div>
				<div class="span3">
					<?php echo $form->labelEx($model,'cod_mis_soc'); ?>
					<?php
			             $mision = new CDbCriteria;
			             $mision->order = 'nom_mis_soc ASC';
			       ?>
					<?php
			             echo $form->dropDownList($model,'cod_mis_soc',
								CHtml::listData(Misionsocial::model()->findAll($mision),'cod_mis_soc','nom_mis_soc'),
			             						array('prompt' => 'Seleccione...', 'style'=>'width:220px;','disabled'=>'disabled'
								)
						);
			       ?>
					<?php echo $form->error($model,'cod_mis_soc'); ?>
				</div>
				<div class="span3">
				
				</div>
			</div>			
		</fieldset>	
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