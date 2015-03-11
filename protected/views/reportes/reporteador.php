<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerScript('proyecto', "
	
	$('.rd_tipo_report').change(function()
	{
		var _valor= $(this).val();
		
		switch(_valor)
		{
			case 'G':
				$('#slt_seleccion').attr('disabled','disabled');
				$('#slt_campo_seleccion').html('');
				$('#slt_campo_seleccionado').html('');
				$('#div_filtro').fadeOut('slow');
		console.log(_valor);
			break;
			case 'R':
				$('#slt_seleccion').removeAttr('disabled');
				//$('#div_filtro').fadeIn('slow');
			break;
		}
	});	
	
	$('#slt_seleccion').change(function()
	{
		var _valor= $(this).find('option:selected').val();

		//console.log(_valor);
		
		if(_valor != '')
		{
		    _param = {action : 'SELECTION', slt_seleccion:_valor};
			$.ajax(
			{
				url: '".Yii::app()->createUrl("/reportes/seleccion")."',
				type: 'POST',
				data: _param,
				dataType: 'HTML',
				success: function(_res)
				{
					//console.log(_res);
					$('#slt_campo_seleccion').empty();
					$('#slt_campo_seleccion').html(_res);
				}
			});
		}
	});	
						
	/*					
						
	$('#btn-reportes').click(function()
	{
		$.ajax(
		{
			url: '".Yii::app()->createUrl("/reportes/Generarexcel")."',
			type: 'POST',
			data: $('#reportes-form').serialize(),
			dataType: 'HTML',
			success: function(_res)
			{
				console.log(_res);
				//$('#slt_campo_seleccion').empty();
				//$('#slt_campo_seleccion').html(_res);
			}
		});
		
	});*/
						
						
$('#btn-agregar-materiales').click(function(){
		var objeto = $('#slt_campo_seleccion').find('option:selected');
		
		objeto.each(function(i,obj){
			
			if(verifiExixtencia($(obj).val()))
			{
				$('#slt_campo_seleccion').find(obj).clone().appendTo('#slt_campo_seleccionado');
			}
		});
		
		$('#slt_campo_seleccionado').find('option').attr('selected','selected');	
});
		
$('#btn-eliminar-materiales').click(function(){
		var objeto = $('#slt_campo_seleccionado').find('option:selected');		
		$(objeto).remove();
	
});
		
		
function verifiExixtencia(value)
{
	var result = true;
	$('#slt_campo_seleccionado').find('option').each(function(i,obj)
	{
		if(value == $(obj).val())
		{
			result = false;
		}
	});
	
	return result;
}
		
		
");
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reportes-form',
	'action'=>Yii::app()->createUrl("/reportes/Generarexcel"),
	'htmlOptions'=>array(
			'action'=>Yii::app()->createUrl("/reportes/Generarexcel"),
	),
	'enableAjaxValidation'=>false,
)); ?>


		
	<div class="row grid-view">
		<table class="items" style="width: 30%" >
			<tr>
				<th colspan="3" >
					Reporte Especifico
					<input type="hidden" name="action" value="REPORTE">
				</th>
			</tr>
			<tr>
				<td>
					<label for="Datosencuestado_cod_edo">General</label>
					<input type="radio" class="rd_tipo_report" name="rd_tipo_report" value="G" checked="checked">				
				</td>
				<td colspan="2">
					<label for="Datosencuestado_cod_edo">Especifico</label>
					<input type="radio" class="rd_tipo_report" name="rd_tipo_report" value="R">						
				</td>
			</tr>
		</table>
	</div>
	<div class="container">
		<fieldset class="span-22">
				<legend>Listado:</legend>
			<div class="span-6">
				<table class="" style="width: 100%" >
					<tr>
						<td colspan="3" >Seccion</td>
					</tr>
					<tr>
						<td colspan="3" >
						 <?php echo CHtml::dropDownList('slt_seleccion', '', 
	              				array('DP' => 'Datos Personales', 'DV' => 'Datos Viviendas',
	              					  'PV'=>'Posesiones Vivienda','IL'=>'Informacion Laboral',
	              					  'CS'=>'Condicion Salud','SP'=>'Situacion Politica'	
						 		),
								array('empty' => 'Seleccione...', 'style'=>'width:220px;','disabled'=>'disabled'));
						?>
						</td>
					</tr>
					<tr>
						<td>
							<label for="Datosencuestado_cod_edo">Campos a Seleccionar</label>
							 <select multiple style="width: 300px;height: 180px;" id="slt_campo_seleccion" >
							</select> 				
						</td>
						<td>
							<input type="button" name="btn-agregar-materiales" id="btn-agregar-materiales" value="Agregar">
							<br>
							<input type="button" name="btn-eliminar-materiales" id="btn-eliminar-materiales" value="Eliminar">
						</td>
						<td>
							<label for="Datosencuestado_cod_edo">Campos Seleccionados</label>
							<select multiple style="width: 300px;height: 180px;" id="slt_campo_seleccionado" name="slt_campo_seleccionado[]" >
							</select> 							
						</td>
					</tr>
				</table>
			</div>
		</fieldset>
	</div>
	<div class="container" id="div_filtro" style="display:none;" >
		<fieldset class="span-22">
				<legend>Filtro:</legend>
			<div class="span-6">
				<table class="" style="width: 100%" >
					<tr>
						<td colspan="3" >Filtrar Por</td>
					</tr>
					<tr>
						<td colspan="3" >
						 <?php echo CHtml::dropDownList('slt_seleccion2', '', 
	              				array('DP' => 'Datos Personales', 'DV' => 'Datos Viviendas',
	              					  'PV'=>'Posesiones Vivienda','IL'=>'Informacion Laboral',
	              					  'CS'=>'Condicion Salud','SP'=>'Situacion Politica'	
						 		),
								array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
						?>
						</td>
					</tr>
					<tr>
						<td colspan="3" >Atributo</td>
					</tr>
					<tr>
						<td colspan="3" >
						 <?php echo CHtml::dropDownList('slt_seleccion2', '', 
	              				array(),
								array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
						?>
						</td>
					</tr>
					<tr>
						<td colspan="3" >Condicion</td>
					</tr>
					<tr>
						<td colspan="3" >
						 <?php echo CHtml::dropDownList('slt_seleccion2', '', 
	              				array('DP' => 'Datos Personales', 'DV' => 'Datos Viviendas',
	              					  'PV'=>'Posesiones Vivienda','IL'=>'Informacion Laboral',
	              					  'CS'=>'Condicion Salud','SP'=>'Situacion Politica'	
						 		),
								array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
						?>
						</td>
					</tr>
					<tr>
						<td colspan="3" >Filtro</td>
					</tr>
					<tr>
						<td colspan="3" >
						 <?php echo CHtml::dropDownList('slt_seleccion2', '', 
	              				array('DP' => 'Datos Personales', 'DV' => 'Datos Viviendas',
	              					  'PV'=>'Posesiones Vivienda','IL'=>'Informacion Laboral',
	              					  'CS'=>'Condicion Salud','SP'=>'Situacion Politica'	
						 		),
								array('empty' => 'Seleccione...', 'style'=>'width:220px;'));
						?>
						</td>
					</tr>
				</table>
			</div>
		</fieldset>
	</div>	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Generar',array('id'=>'btn-reportes', 'class'=>'small blue nice button radius')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>