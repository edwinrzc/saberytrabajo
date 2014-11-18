<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
/* @var $form CActiveForm */

$data = $model->isNewRecord ? array('lon_pro'=>'','lat_pro'=>'') : $model->longitdLatitud($model->cod_pro);
?>
<style type="text/css">
<!--
.tabla-int {
   width: 280px;
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
	'id'=>'proyecto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	<fieldset><LEGEND align="left">Ficha del Proyecto</LEGEND>
		<div class="row">
			<div class="row1">
				<?php echo $form->labelEx($model,'cod_pdvsa_pro'); ?>
				<?php echo $form->textField($model,'cod_pdvsa_pro',array('size'=>40,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'cod_pdvsa_pro'); ?>
			</div>
			<div class="row1" >
				<?php echo $form->labelEx($model,'nom_pro'); ?>
				<?php echo $form->textField($model,'nom_pro',array('size'=>40,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'nom_pro'); ?>
			</div>		
		</div>
	
		<div class="row">
			<div class="row1">
				<?php echo $form->labelEx($model,'est_pro'); 
				  
					$sel_1 = "";
					$sel_2 = "";
					 
					if(isset($data->est_pro) && !empty($data->est_pro))
					{
						 
						switch($data->est_pro)
						{
							case 'A':
								$sel_1 = "selected='selected'";
							break;
							case 'P':
								$sel_2 = "selected='selected'";
							break;
						}
						 
					}
				?>
					<select id="Proyecto_est_pro" name="Proyecto[est_pro]" style="width:280px;">
						<option>Selccione un Status</option>
						<option value="A" <?php echo $sel_1;?> >Activo</option>
						<option value="P" <?php echo $sel_2;?> >Paralizado</option>
					</select>
				<?php echo $form->error($model,'est_pro'); ?>
			</div>
			<div class="row1">
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
		                           'url' => CController::createUrl('proyecto/municipios'),
		                           'update' => '#Proyecto_cod_mun'
		                       ),'options'=>$sel,'prompt' => 'Seleccione un Estado...', 'style'=>'width:280px;'
		                 )
		             );
		       ?>
				<?php echo $form->error($model,'co_estado'); ?>
			</div>
		</div>
		<div class="row">
			<div class="row1" >
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
		             echo $form->dropDownList($model,'cod_mun',CHtml::listData(Municipal::model()->findAll($municipio),'ci_munici','municipio'),
		                       array(
		                           'ajax' => array(
		                           'type' => 'POST',
		                           'url' => CController::createUrl('proyecto/parroquia'),
		                           'update' => '#Proyecto_cod_par'
		                       ),'options'=>$sel,'prompt' => 'Seleccione un Municipio...', 'style'=>'width:280px;'
		                   )
		             );
		       ?>
				<?php echo $form->error($model,'cod_mun'); ?>
			</div>
			<div class="row1" >
				<?php echo $form->labelEx($model,'cod_par'); ?>
				<?php
		             $parroquia = new CDbCriteria;
		             $parroquia->select = 'ci_parroq, parroquia';
		             $parroquia->order = 'parroquia ASC';
		       ?>
		       <?php
		             echo $form->dropDownList($model,'cod_par',CHtml::listData(Parroquial::model()->findAll($parroquia),'ci_parroq','parroquia'),
		             						array('prompt' => 'Seleccione una Parroquia...', 'style'=>'width:280px;'
							)
					);
		       ?>
				<?php echo $form->error($model,'cod_par'); ?>
			</div>			
		</div>
		<div class="row">
			<div class="row1" >
				<?php echo $form->labelEx($model,'sec_pro'); ?>
				<?php echo $form->textField($model,'sec_pro',array('size'=>40,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'sec_pro'); ?>
			</div>
			<div class="row1" >
				<?php echo $form->labelEx($model,'dir_exa_pro'); ?>
				<?php echo $form->textField($model,'dir_exa_pro',array('size'=>40,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'dir_exa_pro'); ?>
			</div>		
		</div>
		<div class="row">
			<div class="row1" >
				<?php echo $form->labelEx($model,'pun_ref_pro'); ?>
				<?php echo $form->textField($model,'pun_ref_pro',array('size'=>40,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'pun_ref_pro'); ?>
			</div>
			<div class="row1" >
				<?php echo $form->labelEx($model,'viv_asi_pro'); ?>
				<?php echo $form->textField($model,'viv_asi_pro',array('size'=>40,'maxlength'=>2)); ?>
				<?php echo $form->error($model,'viv_asi_pro'); ?>
			</div>		
		</div>
		<div class="row">
			<div class="row1" >
				<?php echo $form->labelEx($model,'lat_pro'); ?>
				<?php 
				$this->widget('CMaskedTextField', array(
					'model' => $model,
					'attribute' => 'lat_pro',
					'mask' => '99.999999',
					'htmlOptions' => array('size' => 40)
				));
				 ?>
				<?php echo $form->error($model,'lat_pro'); ?>
			</div>
			<div class="row1" >
				<?php echo $form->labelEx($model,'lon_pro'); ?>
				<?php 
				$this->widget('CMaskedTextField', array(
					'model' => $model,
					'value'=> $data['lon_pro'],
					'attribute' => 'lon_pro',
					'mask' => '-99.999999',
					'htmlOptions' => array('size' => 40)
				));
				 ?>
				<?php echo $form->error($model,'lon_pro'); ?>
			</div>		
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'obs_pro'); ?>
			<?php echo $form->textArea($model,'obs_pro',array('rows'=>6, 'cols'=>91)); ?>
			<?php echo $form->error($model,'obs_pro'); ?>
		</div>
	</fieldset>
	<fieldset><LEGEND align="left">Viviendas del Proyecto</LEGEND>	
		<div class="row">
			<div class="row1" >
				<table class="tabla-int" >
					<tr>
						<th colspan="2" >Tipo de Construccion</th>
					</tr>
					<tr>
						<td width="50%" class="td-int" >Tipo Vivienda</td>
						<td class="td-int" >N Vivienda</td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'num_viv_ais_pro'); ?></td>
						<td>
							<?php echo $form->textField($model,'num_viv_ais_pro',array('size'=>10,'maxlength'=>2)); ?>
							<?php echo $form->error($model,'num_viv_ais_pro'); ?>
						</td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'num_viv_con_pro'); ?></td>
						<td>
							<?php echo $form->textField($model,'num_viv_con_pro',array('size'=>10,'maxlength'=>2)); ?>
							<?php echo $form->error($model,'num_viv_con_pro'); ?>
						</td>
					</tr>
				</table>
			</div>
			<div class="row1" >
				<table class="tabla-int" >
					<tr>
						<th colspan="2" >Modalidad Constructiva</th>
					</tr>
					<tr>
						<td width="50%" class="td-int" >Tipo de Estructura</td>
						<td class="td-int" >N Vivienda</td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'num_viv_est_met_pro'); ?></td>
						<td>
							<?php echo $form->textField($model,'num_viv_est_met_pro',array('size'=>10,'maxlength'=>2)); ?>
							<?php echo $form->error($model,'num_viv_est_met_pro'); ?>
						</td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'num_viv_est_tra_pro'); ?></td>
						<td>
							<?php echo $form->textField($model,'num_viv_est_tra_pro',array('size'=>10,'maxlength'=>2)); ?>
							<?php echo $form->error($model,'num_viv_est_tra_pro'); ?>
						</td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'num_viv_est_mix_pro'); ?></td>
						<td>
							<?php echo $form->textField($model,'num_viv_est_mix_pro',array('size'=>10,'maxlength'=>2)); ?>
							<?php echo $form->error($model,'num_viv_est_mix_pro'); ?>
						</td>
					</tr>
				</table>
			</div>		
		</div>
	</fieldset>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->