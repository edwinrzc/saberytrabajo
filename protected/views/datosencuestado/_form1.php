<?php
/* @var $this CaracteristicaviviendaController */
/* @var $model Caracteristicavivienda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caracteristicavivienda-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		
			
				
		<fieldset><LEGEND align="left">Características de la Vivienda</LEGEND>	
			<div class="row">
					<input type="hidden" name="action" value="DV" />
					<input type="hidden" name="Caracteristicavivienda[cod_dp_enc]" value="<?php echo $id;?>" />
				<div class="span4">
					<?php echo $form->labelEx($model,'pre1_car_viv'); ?>
					<?php 
							$sel1 = array('');
							
							if(isset($model->pre1_car_viv) && !empty($model->pre1_car_viv))
							{
									
								$sel1[trim($model->pre1_car_viv)] = array('selected'=>'selected');
									
							}
					
							echo CHtml::dropDownList('Caracteristicavivienda[pre1_car_viv]', $model, 
              				array('APTO' => 'Aparatamento', 'C' => 'Casa',
								  'QTA' => 'Quinta','RC'=>'Rancho',
								  'RG'=>'Refugio','O'=>'Otro'),
							array('empty' => 'Seleccione...','options'=>$sel1, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre1_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre2_car_viv'); ?>
					<?php 
							$sel2 = array('');
							
							if(isset($model->pre2_car_viv) && !empty($model->pre2_car_viv))
							{
									
								$sel2[trim($model->pre2_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre2_car_viv]', $model, 
              				array('ADA' => 'Alquilada', 'ATO' => 'Alojamiento',
								  'CTO' => 'Comodato','CJE'=>'Conserje',
								  'CDO'=>'Cuidando','IDA'=>'Invadida',
								  'PSE'=>'Pagandose','PDA'=>'Prestada',
								  'PIA'=>'Propia'),
							array('empty' => 'Seleccione...','options'=>$sel2, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre2_car_viv'); ?>
				
				</div>
			</div>
			
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre3_car_viv'); ?>
					<?php 
							$sel3 = array('');
							
							if(isset($model->pre3_car_viv) && !empty($model->pre3_car_viv))
							{
									
								$sel3[trim($model->pre3_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre3_car_viv]', $model, 
              				array('PIO' => 'Propio', 'EM' => 'Ejido-Municipal'),
							array('empty' => 'Seleccione...','options'=>$sel3, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre3_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre4_car_viv'); ?>
					<?php 
							$sel4 = array('');
							
							if(isset($model->pre4_car_viv) && !empty($model->pre4_car_viv))
							{
									
								$sel4[trim($model->pre4_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre4_car_viv]', $model, 
              				array('UDA' => 'Urbanizada', 'NUDA' => 'No Urbanizada',
								  'RAL' => 'Rural'),
							array('empty' => 'Seleccione...','options'=>$sel4, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre4_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre5_car_viv'); ?>
					<?php 
							$sel5 = array('');
							
							if(isset($model->pre5_car_viv) && !empty($model->pre5_car_viv))
							{
									
								$sel5[trim($model->pre5_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre5_car_viv]', $model, 
              				array('CO' => 'Cerro', 'CA' => 'Colina',
								  'LA' => 'Loma','ODB'=>'Orilla de Barranco',
								  'ODR'=>'Orilla de rio','ODQ'=>'Orilla de Quebrada'),
							array('empty' => 'Seleccione...','options'=>$sel5, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre5_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre6_car_viv'); ?>
					<?php 
							$sel6 = array('');
							
							if(isset($model->pre6_car_viv) && !empty($model->pre6_car_viv))
							{
									
								$sel6[trim($model->pre6_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre6_car_viv]', $model, 
              				array('DDLC' => 'Directamente de la calle', 'PSPOE' => 'Por senderos, Picas o Escalinatas',
								  'ATDOVP'=>'Por otras viviendas, pasillos'),
							array('empty' => 'Seleccione...','options'=>$sel6, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre6_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre7_car_viv'); ?>
					<?php 
							$sel7 = array('');
							
							if(isset($model->pre7_car_viv) && !empty($model->pre7_car_viv))
							{
									
								$sel7[trim($model->pre7_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre7_car_viv]', $model, 
              				array('ATBF' => 'Adobe, Tapia o Bahareque frisado','ATBSF' =>'Adobe, Tapia o Bahareque sin frisado',
								  'BLFC' => 'Bloque o Ladrillo frisado (Acabado) concreto ','BLSF'=>'Bloque o Ladrillo sin frisar (No acabado)',
								  'MAFFVS'=>'Madera, fibra de vidrio y similares','OCPTCZLS'=>'Otros'),
							array('empty' => 'Seleccione...','options'=>$sel7, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre7_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre8_car_viv'); ?>
					<?php 
							$sel8 = array('');
							
							if(isset($model->pre8_car_viv) && !empty($model->pre8_car_viv))
							{
									
								$sel8[trim($model->pre8_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre8_car_viv]', $model, 
              				array('AS' => 'Asbesto y similares', 'LMZS' => 'Laminas Metalicas (Zinc o similares)',
								  'TLA' => 'Tajali - Lamina Asfaltica','TM'=>'Teja o Madera',
								  'PBA'=>'Platabanda','OPTS'=>'Otros (Palma, Tablas y Similares)'),
							array('empty' => 'Seleccione...','options'=>$sel8, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre8_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre9_car_viv'); ?>
					<?php 
							$sel9 = array('');
							
							if(isset($model->pre9_car_viv) && !empty($model->pre9_car_viv))
							{
									
								$sel9[trim($model->pre9_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre9_car_viv]', $model, 
              				array('CLT' => 'Ceramica, Ladrillo, Terracota', 'MAYS' => 'Madera, Alfombra y similares',
								  'CPOV' => 'Cemento Pulido o Viniles','CSP'=>'Cemento sin Pulir',
								  'T'=>'Tierra'),
							array('empty' => 'Seleccione...','options'=>$sel9, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre9_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre10_car_viv'); ?>
					<?php 
							$sel10 = array('');
							
							if(isset($model->pre10_car_viv) && !empty($model->pre10_car_viv))
							{
									
								$sel10[trim($model->pre10_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre10_car_viv]', $model, 
              				array('PCSELH' => 'Pareja conyugal sola en la habitacion', 'PCPMDUA' => 'Pareja con personas menores de un año',
								  'PCPMDUAA' => 'Pareja con personas mayores de un año','PSDEUH'=>'Persona sola durmiendo en una habitacion',
								  'MDTPDEUH'=>'Menos de tres personas durmiendo en una habitacion','TPOMDEUMH'=>'Tres personas o mas durmiendo en una misma habitacion'),
							array('empty' => 'Seleccione...','options'=>$sel10, 'style'=>'width:330px;','class'=>'clear-error'));
					?>
					<?php echo $form->error($model,'pre10_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre11_car_viv'); ?>
					<?php echo $form->textField($model,'pre11_car_viv',array('size'=>40,'maxlength'=>1,'class'=>'clear-error')); ?>
					<?php echo $form->error($model,'pre11_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre12_car_viv'); ?>
					<?php echo $form->textField($model,'pre12_car_viv',array('size'=>40,'maxlength'=>2,'class'=>'clear-error')); ?>
					<?php echo $form->error($model,'pre12_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre13_car_viv'); ?>
					<?php 
							$sel13 = array('');
							
							if(isset($model->pre13_car_viv) && !empty($model->pre13_car_viv))
							{
									
								$sel13[trim($model->pre13_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre13_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel13, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre13_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre14_car_viv'); ?>
					<?php 
							$sel14 = array('');
							
							if(isset($model->pre14_car_viv) && !empty($model->pre14_car_viv))
							{
									
								$sel14[trim($model->pre14_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre14_car_viv]', $model, 
              				array('AOT' => 'Acueducto o Tuberia', 'CC' => 'Camion Cisterna',
              					  'PPOV'=>'Pila Publica o Vecinos','OM'=>'Otros Medios'),
							array('empty' => 'Seleccione...','options'=>$sel14, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre14_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre15_car_viv'); ?>
					<?php 
							$sel15 = array('');
							
							if(isset($model->pre15_car_viv) && !empty($model->pre15_car_viv))
							{
									
								$sel15[trim($model->pre15_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre15_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel15, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre15_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre16_car_viv'); ?>
					<?php 
							$sel16 = array('');
							
							if(isset($model->pre16_car_viv) && !empty($model->pre16_car_viv))
							{
									
								$sel16[trim($model->pre16_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre16_car_viv]', $model, 
              				array('TQ' => 'Tanques', 'RP' =>'Recipientes Plasticos',
              					  'TORM'=>'Tobos o Recipientes Metalicos','RDVV'=>'Recipientes de Vidrio / Vasijas'),
							array('empty' => 'Seleccione...','options'=>$sel16, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre16_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre17_car_viv'); ?>
					<?php 
							$sel17 = array('');
							
							if(isset($model->pre17_car_viv) && !empty($model->pre17_car_viv))
							{
									
								$sel17[trim($model->pre17_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre17_car_viv]', $model, 
              				array('BCPDYL' => 'Bano con Poceta, Ducha y Lavamanos', 'BCP' =>'Bano con Poceta',
              					  'BCPYL'=>'Bano con Poceta y Lavamanos','EDHOL'=>'Escusado de Hoyo o Letrina',
								  'BCPYD'=>'Bano con Poceta y Ducha','NTPOE'=>'No tiene Poceta o Escusado'),
							array('empty' => 'Seleccione...','options'=>$sel17, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre17_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre18_car_viv'); ?>
					<?php 
							$sel18 = array('');
							
							if(isset($model->pre18_car_viv) && !empty($model->pre18_car_viv))
							{
									
								$sel18[trim($model->pre18_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre18_car_viv]', $model, 
              				array('BDDLV' => 'Bano Dentro de la Vivienda', 'BFDLV' =>'Bano Fuera de la Vivienda',
              					  'LFDLV'=>'Letrina Fuera de la Vivienda'),
							array('empty' => 'Seleccione...','options'=>$sel18, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre18_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre19_car_viv'); ?>
					<?php 
							$sel19 = array('');
							
							if(isset($model->pre19_car_viv) && !empty($model->pre19_car_viv))
							{
									
								$sel19[trim($model->pre19_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre19_car_viv]', $model, 
              				array('DDLVUC' => 'Dentro de la Vivienda una Cloaca', 'RQ' =>'Rios Quebradas',
              					  'FDLVPS'=>'Fuera de la Vivienda 2 pozos Septicos'),
							array('empty' => 'Seleccione...','options'=>$sel19, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre19_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre20_car_viv'); ?>
					<?php 
							$sel20 = array('');
							
							if(isset($model->pre20_car_viv) && !empty($model->pre20_car_viv))
							{
									
								$sel20[trim($model->pre20_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre20_car_viv]', $model, 
              				array('C' => 'Cloacas', 'PS' =>'Pozo Septico',
              					  'ALC'=>'A la Calle','RQ'=>'Rios Quebradas',
								  'P'=>'Patio'),
							array('empty' => 'Seleccione...','options'=>$sel20, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre20_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre21_car_viv'); ?>
					<?php 
							$sel21 = array('');
							
							if(isset($model->pre21_car_viv) && !empty($model->pre21_car_viv))
							{
									
								$sel21[trim($model->pre21_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre21_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel21, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre21_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre22_car_viv'); ?>
					<?php 
							$sel22 = array('');
							
							if(isset($model->pre22_car_viv) && !empty($model->pre22_car_viv))
							{
									
								$sel22[trim($model->pre22_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre22_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel22, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre22_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre23_car_viv'); ?>
					<?php 
							$sel23 = array('');
							
							if(isset($model->pre23_car_viv) && !empty($model->pre23_car_viv))
							{
									
								$sel23[trim($model->pre23_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre23_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...','options'=>$sel23, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre23_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre33_car_viv'); ?>
					<?php 
							$sel33 = array('');
							
							if(isset($model->pre33_car_viv) && !empty($model->pre33_car_viv))
							{
									
								$sel33[trim($model->pre33_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre33_car_viv]', $model, 
              				array('DQ' => 'Desechos Quimicos', 'VS' =>'Vibraciones',
              					  'OF'=>'Olores Fuertes','VOS'=>'Vertederos',
								  'SF'=>'Sonidos Fuertes','H'=>'Humo',
								  'AS'=>'Aguas Servidas','O'=>'Otro'),
							array('empty' => 'Seleccione...','options'=>$sel33, 'style'=>'width:330px;'));
					?>
					<?php echo $form->error($model,'pre33_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre32_car_viv',array('style'=>'float:left;')); ?>
					<?php 
							$sel32 = array('');
							
							if(isset($model->pre32_car_viv) && !empty($model->pre32_car_viv))
							{
									
								$sel32[trim($model->pre32_car_viv)] = array('selected'=>'selected');
									
							}
							
							echo CHtml::dropDownList('Caracteristicavivienda[pre32_car_viv]', $model, 
              				array('AP' =>'A Pie', 'AB' =>'Autobus',
              					  'JP'=>'Jeep','B'=>'Bicicleta',
								  'MT'=>'Moto','VP'=>'Vehiculo Particular',
								  'O'=>'Otro'),
							array('empty' => 'Seleccione...','options'=>$sel32, 'style'=>'width:330px;float:left;'));
					?>
					<?php echo $form->error($model,'pre32_car_viv'); ?>
				</div>
			</div>
		</fieldset>
		
		
		<fieldset><LEGEND align="left">Acceso a Centros Educativos (Distancia Apr&oacute;ximada en Kil&oacute;metros)</LEGEND>			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre24_car_viv'); ?>
					<?php echo $form->textField($model,'pre24_car_viv',array('size'=>15,'maxlength'=>3)); ?>
					<?php echo $form->error($model,'pre24_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre25_car_viv'); ?>
					<?php echo $form->textField($model,'pre25_car_viv',array('size'=>15,'maxlength'=>3)); ?>
					<?php echo $form->error($model,'pre25_car_viv'); ?>		
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre26_car_viv'); ?>
					<?php echo $form->textField($model,'pre26_car_viv',array('size'=>15,'maxlength'=>3)); ?>
					<?php echo $form->error($model,'pre26_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre27_car_viv'); ?>
					<?php echo $form->textField($model,'pre27_car_viv',array('size'=>15,'maxlength'=>3)); ?>
					<?php echo $form->error($model,'pre27_car_viv'); ?>
				</div>
			</div>
			
			
			
				
		</fieldset>
						
								
		<fieldset><LEGEND align="left">Acceso a Centros de Salud (Distancia Apr&oacute;ximada en Kil&oacute;metros)</LEGEND>	
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre28_car_viv'); ?>
					<?php echo $form->textField($model,'pre28_car_viv',array('size'=>15,'maxlength'=>3)); ?>
					<?php echo $form->error($model,'pre28_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre29_car_viv'); ?>
					<?php echo $form->textField($model,'pre29_car_viv',array('size'=>15,'maxlength'=>3)); ?>
					<?php echo $form->error($model,'pre29_car_viv'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="span4">
					<?php echo $form->labelEx($model,'pre30_car_viv'); ?>
					<?php echo $form->textField($model,'pre30_car_viv',array('size'=>15,'maxlength'=>3)); ?>
					<?php echo $form->error($model,'pre30_car_viv'); ?>
				</div>
				<div class="span4">
					<?php echo $form->labelEx($model,'pre31_car_viv'); ?>
					<?php echo $form->textField($model,'pre31_car_viv',array('size'=>15,'maxlength'=>3)); ?>
					<?php echo $form->error($model,'pre31_car_viv'); ?>
				</div>
			</div>
		</fieldset>				
	</div>
	<div class="row buttons">
		<?php echo CHtml::Button($model->isNewRecord ? 'Registrar' : 'Guardar',array('id'=>'btn-datos-vivienda', 'class'=>'small blue nice button radius')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->