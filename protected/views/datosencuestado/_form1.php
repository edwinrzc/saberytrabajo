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
		<table class="tabla-int" >
			<tr>
				<th colspan="3" >Características de la Vivienda</th>
			</tr>
			<tr>
				<td width="50%">
					<?php echo $form->labelEx($model,'pre1_car_viv'); ?>
					<input type="hidden" name="action" value="DP" />
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre2_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre1_car_viv]', $model, 
              				array('APTO' => 'Aparatamento', 'C' => 'Casa',
								  'QTA' => 'Quinta','RC'=>'Rancho',
								  'RG'=>'Refugio','O'=>'Otro'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre1_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre2_car_viv]', $model, 
              				array('ADA' => 'Alquilada', 'ATO' => 'Alojamiento',
								  'CTO' => 'Comodato','CJE'=>'Conserje',
								  'CDO'=>'Cuidando','IDA'=>'Invadida',
								  'PSE'=>'Pagandose','PDA'=>'Prestada',
								  'PIA'=>'Propia'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre2_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre3_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre4_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre3_car_viv]', $model, 
              				array('PIO' => 'Propio', 'EM' => 'Ejido-Municipal'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre3_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre3_car_viv]', $model, 
              				array('UDA' => 'Urbanizada', 'NUDA' => 'No Urbanizada',
								  'RAL' => 'Rural'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre4_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre5_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre6_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre5_car_viv]', $model, 
              				array('CO' => 'Cerro', 'CA' => 'Colina',
								  'LA' => 'Loma','ODB'=>'Orilla de Barranco',
								  'ODR'=>'Orilla de rio','ODQ'=>'Orilla de Quebrada'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre5_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre6_car_viv]', $model, 
              				array('DDLC' => 'Directamente de la calle', 'PSPOE' => 'Por senderos, Picas o Escalinatas',
								  'ATDOVP'=>'Por otras viviendas, pasillos'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre6_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre7_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre8_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre7_car_viv]', $model, 
              				array('ATBF' => 'Adobe, Tapia o Bahareque frisado','ATBSF' =>'Adobe, Tapia o Bahareque sin frisado',
								  'BLFC' => 'Bloque o Ladrillo frisado (Acabado) concreto ','BLSF'=>'Bloque o Ladrillo sin frisar (No acabado)',
								  'MAFFVS'=>'Madera, fibra de vidrio y similares','OCPTCZLS'=>'Otros'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre7_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre5_car_viv]', $model, 
              				array('AS' => 'Asbesto y similares', 'LMZS' => 'Laminas Metalicas (Zinc o similares)',
								  'TLA' => 'Tajali - Lamina Asfaltica','TM'=>'Teja o Madera',
								  'PBA'=>'Platabanda','OPTS'=>'Otros (Palma, Tablas y Similares)'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre8_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre9_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre10_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre9_car_viv]', $model, 
              				array('CLT' => 'Ceramica, Ladrillo, Terracota', 'MAYS' => 'Madera, Alfombra y similares',
								  'CPOV' => 'Cemento Pulido o Viniles','CSP'=>'Cemento sin Pulir',
								  'T'=>'Tierra'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre9_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre10_car_viv]', $model, 
              				array('PCSELH' => 'Pareja conyugal sola en la habitacion', 'PCPMDUA' => 'Pareja con personas menores de un a&ntildeo',
								  'PCPMDUAA' => 'Pareja con personas mayores de un a&ntildeo','PSDEUH'=>'Persona sola durmiendo en una habitacion',
								  'MDTPDEUH'=>'Menos de tres personas durmiendo en una habitacion','TPOMDEUMH'=>'Tres personas o mas durmiendo en una misma habitacion'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre10_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre11_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre12_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->textField($model,'pre11_car_viv',array('size'=>40,'maxlength'=>1)); ?>
					<?php echo $form->error($model,'pre11_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pre12_car_viv',array('size'=>40,'maxlength'=>2)); ?>
					<?php echo $form->error($model,'pre12_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre13_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre14_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre13_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre13_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre14_car_viv]', $model, 
              				array('AOT' => 'Acueducto o Tuberia', 'CC' => 'Camion Cisterna',
              					  'PPOV'=>'Pila Publica o Vecinos','OM'=>'Otros Medios'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre14_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre15_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre16_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre15_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre15_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre16_car_viv]', $model, 
              				array('TQ' => 'Tanques', 'RP' =>'Recipientes Plasticos',
              					  'TORM'=>'Tobos o Recipientes Metalicos','RDVV'=>'Recipientes de Vidrio / Vasijas'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre16_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre17_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre18_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre17_car_viv]', $model, 
              				array('BCPDYL' => 'Bano con Poceta, Ducha y Lavamanos', 'BCP' =>'Bano con Poceta',
              					  'BCPYL'=>'Bano con Poceta y Lavamanos','EDHOL'=>'Escusado de Hoyo o Letrina',
								  'BCPYD'=>'Bano con Poceta y Ducha','NTPOE'=>'No tiene Poceta o Escusado'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre17_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre18_car_viv]', $model, 
              				array('BDDLV' => 'Bano Dentro de la Vivienda', 'BFDLV' =>'Bano Fuera de la Vivienda',
              					  'LFDLV'=>'Letrina Fuera de la Vivienda'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre18_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre19_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre20_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre19_car_viv]', $model, 
              				array('DDLVUC' => 'Dentro de la Vivienda una Cloaca', 'RQ' =>'Rios Quebradas',
              					  'FDLVPS'=>'Fuera de la Vivienda 2 pozos Septicos'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre19_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre20_car_viv]', $model, 
              				array('C' => 'Cloacas', 'PS' =>'Pozo Septico',
              					  'ALC'=>'A la Calle','RQ'=>'Rios Quebradas',
								  'P'=>'Patio'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre20_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'pre21_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre22_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre21_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre21_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre22_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre22_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td >
					<?php echo $form->labelEx($model,'pre23_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->labelEx($model,'pre33_car_viv'); ?>		
				</td>				
			</tr>
			<tr>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre23_car_viv]', $model, 
              				array('S' => 'Si', 'N' => 'No'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre23_car_viv'); ?>
				</td>
				<td>
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre33_car_viv]', $model, 
              				array('DQ' => 'Desechos Quimicos', 'VS' =>'Vibraciones',
              					  'OF'=>'Olores Fuertes','VOS'=>'Vertederos',
								  'SF'=>'Sonidos Fuertes','H'=>'Humo',
								  'AS'=>'Aguas Servidas','O'=>'Otro'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre33_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<?php echo $form->labelEx($model,'pre32_car_viv',array('style'=>'float:left;')); ?>
				</td>				
			</tr>
			<tr>
				<td colspan="3">
					<?php echo CHtml::dropDownList('Caracteristicavivienda[pre33_car_viv]', $model, 
              				array('AP' =>'A Pie', 'AB' =>'Autobus',
              					  'JP'=>'Jeep','B'=>'Bicicleta',
								  'MT'=>'Moto','VP'=>'Vehiculo Particular',
								  'O'=>'Otro'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;float:left;'));
					?>
					<?php echo $form->error($model,'pre32_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table class="tabla-int">
						<tr>
							<th colspan="2" >
								Acceso a Centros Educativos (Distancia Aproximada en Kilómetros)
							</th>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre24_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre24_car_viv',array('size'=>15,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre24_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre25_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre25_car_viv',array('size'=>15,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre25_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre26_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre26_car_viv',array('size'=>15,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre26_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre27_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre27_car_viv',array('size'=>15,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre27_car_viv'); ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table class="tabla-int">
						<tr>
							<th colspan="2" >
								Acceso a Centros de Salud (Distancia Aproximada en Kilómetros)
							</th>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre28_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre28_car_viv',array('size'=>15,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre28_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre29_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre29_car_viv',array('size'=>15,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre29_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre30_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre30_car_viv',array('size'=>15,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre30_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre31_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre31_car_viv',array('size'=>15,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre31_car_viv'); ?>
							</td>
						</tr>						
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->