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

	<?php 
	
		echo $form->errorSummary($model); 
		$opciones = array('S'=>'','N'=>'Disabled','F'=>'','M'=>'none');
	?>
<div class="row">

	<fieldset><LEGEND align="left">SITUACIÓN POLÍTICA</LEGEND>			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'reg_ele_sit_pol'); ?>
					<input type="hidden" name="action" value="SP" />
					<input type="hidden" name="Situacionpolitica[cod_dp_enc]" value="<?php echo $id;?>" />
					<?php 
								$sel1 = array('');
								
								if(isset($model->reg_ele_sit_pol) && !empty($model->reg_ele_sit_pol))
								{
										
									$sel1[trim($model->reg_ele_sit_pol)] = array('selected'=>'selected');
										
								}
								
								echo CHtml::dropDownList('Situacionpolitica[reg_ele_sit_pol]', $model, 
	              				array('S' => 'Si', 'N' => 'No'),
								array('empty' => 'Seleccione...','options'=>$sel1, 'style'=>'width:220px;','class'=>'clear-error slt_opc_campos'));
						?>
					<?php echo $form->error($model,'pre1_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'par_pol_sit_pol'); ?>
					<?php 
							$sel2 = array('');
							$disabled = '';
							if(isset($model->par_pol_sit_pol) && !empty($model->par_pol_sit_pol))
							{
									
								$sel2[trim($model->par_pol_sit_pol)] = array('selected'=>'selected');
								$disabled = $opciones['S'];
									
							}
								
							echo CHtml::dropDownList('Situacionpolitica[par_pol_sit_pol]', $model, 
	              			array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel2,'disabled'=>$disabled, 'style'=>'width:220px;','class'=>'clear-error slt_opc_campos'));
					?>
					<?php echo $form->error($model,'pre2_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'cod_par_pol'); ?>
					<?php
			             $parpol = new CDbCriteria;
			             $parpol->order = 'nom_par_pol ASC';
			             $disabled = 'disabled';
			             if(!empty($model->cod_par_pol))
						 {
						 	$disabled = '';
						 }
			        ?>
					<?php
			             echo $form->dropDownList($model,'cod_par_pol',
								CHtml::listData(Partidopolitico::model()->findAll($parpol),'cod_par_pol','nom_par_pol'),
			             						array('prompt' => 'Seleccione...','class'=>'slt_opc_campos', 'style'=>'width:220px;','disabled'=>$disabled,
								)
						);
			        ?>
					<?php echo $form->error($model,'cod_par_pol'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'otr_par_sit_pol'); ?>
					<?php 
							$disabled = 'disabled';
							if(!empty($model->otr_par_sit_pol))
							{
								$disabled = '';
							}
							
						  echo $form->textField($model,'otr_par_sit_pol',array('size'=>40,'maxlength'=>60,'disabled'=>$disabled,)); ?>
					<?php echo $form->error($model,'otr_par_sit_pol'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'nom_cen_vot_sit_pol'); ?>
					<?php 
							$disabled = 'disabled';
							if(!empty($model->nom_cen_vot_sit_pol))
							{
								$disabled = '';
							}
							
							echo $form->textField($model,'nom_cen_vot_sit_pol',
							array('size'=>40,'maxlength'=>80,'disabled'=>$disabled,)); ?>
					<?php echo $form->error($model,'nom_cen_vot_sit_pol'); ?>
				</div>
				<div class="span4">
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
						
							 $model2= new Datosencuestado;
				             echo $form->dropDownList($model2,'cod_edo',CHtml::listData(Estadal::model()->findAll($estado),'cod_estado','estado'),
				                       array(
				                           'ajax' => array(
				                           'type' => 'POST',
				                           'url' => CController::createUrl('datosencuestado/municipios'),
				                           'update' => '#Datosencuestado_cod_mun'
				                       ),'options'=>$sel,'prompt' => 'Seleccione...', 'style'=>'width:220px;'
				                 )
				             );
				       ?>
					   <?php echo $form->error($model2,'co_edo'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
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
			             echo $form->dropDownList($model2,'cod_mun',CHtml::listData(array(''),'ci_munici','municipio'),
			                       array(
			                           'ajax' => array(
			                           'type' => 'POST',
			                           'url' => CController::createUrl('datosencuestado/parroquia'),
			                           'update' => '#Situacionpolitica_cod_par'
			                       ),'options'=>$sel,'prompt' => 'Seleccione...', 'style'=>'width:220px;'
			                   )
			             );
			       ?>
					<?php echo $form->error($model2,'cod_mun'); ?>
				</div>
				<div class="span4">
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
				<div class="span4">
					<?php echo $form->labelEx($model,'mie_mes_sit_pol'); ?>
					<?php 
							$sel3 = array('');
							$disabled = '';
							if(isset($model->mie_mes_sit_pol) && !empty($model->mie_mes_sit_pol))
							{
								$disabled = $opciones['S'];
								$sel3[trim($model->mie_mes_sit_pol)] = array('selected'=>'selected');
									
							}
								
							echo CHtml::dropDownList('Situacionpolitica[mie_mes_sit_pol]', $model, 
			              	array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel3,'disabled'=>$disabled, 'style'=>'width:220px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'mie_mes_sit_pol'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'tes_mes_sit_pol'); ?>
					<?php 
						$sel4 = array('');
						$disabled = 'disabled';
						if(isset($model->tes_mes_sit_pol) && !empty($model->tes_mes_sit_pol))
						{
								
							$sel4[trim($model->tes_mes_sit_pol)] = array('selected'=>'selected');
							$disabled = '';
						}
							
						echo CHtml::dropDownList('Situacionpolitica[tes_mes_sit_pol]', $model, 
		              	array('S' => 'Si', 'N' => 'No'),
						array('empty' => 'Seleccione...','options'=>$sel4,'disabled'=>$disabled, 'style'=>'width:220px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'tes_mes_sit_pol'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'res_par_sit_pol'); ?>
					<?php 
						$sel5 = array('');
						$disabled = 'disabled';
						if(isset($model->res_par_sit_pol) && !empty($model->res_par_sit_pol))
						{
								
							$sel5[trim($model->res_par_sit_pol)] = array('selected'=>'selected');
							$disabled = $opciones[$model->res_par_sit_pol];
								
						}
							
						echo CHtml::dropDownList('Situacionpolitica[res_par_sit_pol]', $model, 
		              	array('S' => 'Si', 'N' => 'No'),
						array('empty' => 'Seleccione...','options'=>$sel5,'disabled'=>$disabled, 'style'=>'width:220px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'res_par_sit_pol'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'ins_sit_pol'); ?>
					<?php echo $form->textField($model,'ins_sit_pol',array('size'=>40,'maxlength'=>60,'disabled'=>$disabled,)); ?>
					<?php echo $form->error($model,'ins_sit_pol'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'des_res_sit_pol'); ?>
					<?php 
						$disabled = 'disabled';
						if(!empty($model->des_res_sit_pol))
						{
							$disabled = '';
						}
						echo $form->textField($model,'des_res_sit_pol',array('size'=>40,'maxlength'=>60,'disabled'=>$disabled,'class'=>'clear-error')); ?>
					<?php echo $form->error($model,'des_res_sit_pol'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'niv_dir_sit_pol'); ?>
					<?php 
						$sel6 = array('');
						$disabled = 'disabled';
						if(isset($model->niv_dir_sit_pol) && !empty($model->niv_dir_sit_pol))
						{
								
							$sel6[trim($model->niv_dir_sit_pol)] = array('selected'=>'selected');
							$disabled = '';
						}
							
						echo CHtml::dropDownList('Situacionpolitica[niv_dir_sit_pol]', $model, 
		              	array('N' => 'Nacional', 'E' => 'Estadal',
		              		  'M'=>'Municipal','P'=>'Parroquial'
					),
						array('empty' => 'Seleccione...','options'=>$sel6,'disabled'=>$disabled, 'style'=>'width:220px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'niv_dir_sit_pol'); ?>
				</div>
			</div>
	</fieldset>	
			
</div>
	<div class="row buttons">
		<?php echo CHtml::Button($model->isNewRecord ? 'Registrar' : 'Guardar',array('id'=>'btn-situacion-politica', 'class'=>'small blue nice button radius')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->