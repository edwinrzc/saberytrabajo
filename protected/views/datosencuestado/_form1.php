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
					<?php echo CHtml::dropDownList('Datosencuestado[pre1_car_viv]', $model, 
              				array('APTO' => 'Aparatamento', 'C' => 'Casa',
								  'QTA' => 'Quinta','RC'=>'Rancho',
								  'RG'=>'Refugio','O'=>'Otro'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre1_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Datosencuestado[pre2_car_viv]', $model, 
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
					<?php echo CHtml::dropDownList('Datosencuestado[pre3_car_viv]', $model, 
              				array('PIO' => 'Propio', 'EM' => 'Ejido-Municipal'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre3_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Datosencuestado[pre3_car_viv]', $model, 
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
					<?php echo CHtml::dropDownList('Datosencuestado[pre5_car_viv]', $model, 
              				array('CO' => 'Cerro', 'CA' => 'Colina',
								  'LA' => 'Loma','ODB'=>'Orilla de Barranco',
								  'ODR'=>'Orilla de rio','ODQ'=>'Orilla de Quebrada'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre5_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Datosencuestado[pre6_car_viv]', $model, 
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
					<?php echo CHtml::dropDownList('Datosencuestado[pre7_car_viv]', $model, 
              				array('ATBF' => 'Adobe, Tapia o Bahareque frisado','ATBSF' =>'Adobe, Tapia o Bahareque sin frisado',
								  'BLFC' => 'Bloque o Ladrillo frisado (Acabado) concreto ','BLSF'=>'Bloque o Ladrillo sin frisar (No acabado)',
								  'MAFFVS'=>'Madera, fibra de vidrio y similares','OCPTCZLS'=>'Otros'),
							array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
					?>
					<?php echo $form->error($model,'pre7_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo CHtml::dropDownList('Datosencuestado[pre5_car_viv]', $model, 
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
					<?php echo $form->textField($model,'pre9_car_viv',array('size'=>10,'maxlength'=>10)); ?>
					<?php echo $form->error($model,'pre9_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pre10_car_viv',array('size'=>12,'maxlength'=>12)); ?>
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
					<?php echo $form->textField($model,'pre11_car_viv',array('size'=>1,'maxlength'=>1)); ?>
					<?php echo $form->error($model,'pre11_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pre12_car_viv',array('size'=>2,'maxlength'=>2)); ?>
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
					<?php echo $form->textField($model,'pre13_car_viv',array('size'=>2,'maxlength'=>2)); ?>
					<?php echo $form->error($model,'pre13_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pre14_car_viv',array('size'=>4,'maxlength'=>4)); ?>
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
					<?php echo $form->textField($model,'pre15_car_viv',array('size'=>1,'maxlength'=>1)); ?>
					<?php echo $form->error($model,'pre15_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pre16_car_viv',array('size'=>4,'maxlength'=>4)); ?>
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
					<?php echo $form->textField($model,'pre17_car_viv',array('size'=>7,'maxlength'=>7)); ?>
					<?php echo $form->error($model,'pre17_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pre18_car_viv',array('size'=>5,'maxlength'=>5)); ?>
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
					<?php echo $form->textField($model,'pre19_car_viv',array('size'=>6,'maxlength'=>6)); ?>
					<?php echo $form->error($model,'pre19_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pre20_car_viv',array('size'=>3,'maxlength'=>3)); ?>
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
					<?php echo $form->textField($model,'pre21_car_viv',array('size'=>1,'maxlength'=>1)); ?>
					<?php echo $form->error($model,'pre21_car_viv'); ?>
				</td>
				<td colspan="2">
					<?php echo $form->textField($model,'pre22_car_viv',array('size'=>1,'maxlength'=>1)); ?>
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
					<?php echo $form->textField($model,'pre23_car_viv',array('size'=>1,'maxlength'=>1)); ?>
					<?php echo $form->error($model,'pre23_car_viv'); ?>
				</td>
				<td>
					<?php echo $form->textField($model,'pre33_car_viv',array('size'=>15,'maxlength'=>15)); ?>
					<?php echo $form->error($model,'pre33_car_viv'); ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td colspan="2" >
								Acceso a Centros Educativos (Distancia Aproximada en Kilómetros)
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre24_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre24_car_viv',array('size'=>3,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre24_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre25_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre25_car_viv',array('size'=>3,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre25_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre26_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre26_car_viv',array('size'=>3,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre26_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre27_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre27_car_viv',array('size'=>3,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre27_car_viv'); ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td colspan="2" >
								Acceso a Centros de Salud (Distancia Aproximada en Kilómetros)
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre28_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre28_car_viv',array('size'=>3,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre28_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre29_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre29_car_viv',array('size'=>3,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre29_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre30_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre30_car_viv',array('size'=>3,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre30_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre31_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre31_car_viv',array('size'=>3,'maxlength'=>3)); ?>
								<?php echo $form->error($model,'pre31_car_viv'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $form->labelEx($model,'pre32_car_viv'); ?>
							</td>
							<td>
								<?php echo $form->textField($model,'pre32_car_viv',array('size'=>15,'maxlength'=>15)); ?>
								<?php echo $form->error($model,'pre32_car_viv'); ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->