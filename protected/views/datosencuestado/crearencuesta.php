<?php

/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */

$baseUrl = Yii::app()->request->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl.'/css/jquery.css');
$cs->registerCssFile($baseUrl.'/assets/cba5058/jui/css/base/jquery-ui.css');
// $cs->registerCssFile($baseUrl.'/css/tinyeditor.css');
$cs->registerScriptFile($baseUrl.'/assets/cba5058/jui/js/jquery-ui.min.js');

$this->menu=array(
	array('label'=>'List Datosencuestado', 'url'=>array('index')),
	array('label'=>'Manage Datosencuestado', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('form_familiar', "
		
	jQuery('#mydialog').dialog({'title':'Desembolsos','autoOpen':false,'modal':true});

	$('#btn-datos-personales').click(function(e)
	{		
		_op = {param:{}};
		_op.param = $('#datosencuestado-form').serialize();
		_url = '".Yii::app()->createUrl('/datosencuestado/registrar')."';
		_op.tipo = 'dialog';
		_op.contentMsj = 'mensaje';			
		_res = registrarFormulario(_url,_op);
		if(typeof(_res) != 'undefined')
		{
			$('#codigo_maestro').val(_res.cod_dp_enc);
		}
			
		
		
	});
				
	$('#Datosencuestado_sex_dp_enc').change(function()
	{
		var _valor= $(this).find('option:selected').val();
				
		if(_valor == 'F')
		{
			$('.tr_depende_sexo').css('display','');
		}
		else
		{
			$('.tr_depende_sexo').css('display','none');
		}
	});
				
	$('.slt_opc_campos').change(function()
	{
		_attr = $(this).attr('id');
		_valor = $('#'+_attr).find('option:selected').val();
		
		switch(_attr)
		{
			case 'Datosencuestado_es_ind_dp_enc':
				
				switch(_valor)
				{
					case 'S':
						bloquearDesbloquear('D','Datosencuestado_cod_com_ind');
					break;
					case 'N':
						bloquearDesbloquear('B','Datosencuestado_cod_com_ind');
					break;
				}
				
			break;
			case 'Datosencuestado_est_act_dp_enc':
				
				switch(_valor)
				{
					case 'S':
						bloquearDesbloquear('D','Datosencuestado_tip_ins_dp_enc');
					break;
					case 'N':
						bloquearDesbloquear('B','Datosencuestado_tip_ins_dp_enc');
						bloquearDesbloquear('D','Datosencuestado_cod_mot_est');
						bloquearDesbloquear('D','Datosencuestado_cod_mot_est');
					break;
				}
			break;
			case 'Datosencuestado_fam_pri_lib_dp_enc':
				
				switch(_valor)
				{
					case 'S':
						bloquearDesbloquear('D','Datosencuestado_cod_par_fam');
						bloquearDesbloquear('D','Datosencuestado_cod_cen_pen');
					break;
					case 'N':
						bloquearDesbloquear('B','Datosencuestado_cod_par_fam');
						bloquearDesbloquear('B','Datosencuestado_cod_cen_pen');
					break;
				}
			break;
			case 'Datosencuestado_org_soc_dp_enc':
				
				switch(_valor)
				{
					case 'S':
						bloquearDesbloquear('D','Datosencuestado_cod_org_soc');
					break;
					case 'N':
						bloquearDesbloquear('B','Datosencuestado_cod_org_soc');
					break;
				}
			break;
			case 'Datosencuestado_mis_soc_dp_enc':
				
				switch(_valor)
				{
					case 'S':
						bloquearDesbloquear('D','Datosencuestado_cod_mis_soc');
					break;
					case 'N':
						bloquearDesbloquear('B','Datosencuestado_cod_mis_soc');
					break;
				}
			break;
		}
	});
				
	
	function bloquearDesbloquear(opcion,atributo)
	{
		switch(opcion)
		{
			case 'D':
				$('#'+atributo).removeAttr('disabled');
			break;
			case 'B':
				$('#'+atributo).prop('selectedIndex',0);
				$('#'+atributo).prop('disabled',true);
			break;
		}
	}
				
				
	$('#ui-id-3').live('click',function()
	{
		//alert('Esta as: '+$('#codigo_maestro').val());
		//return false;
	});
				
				
	function registrarFormulario(_url,_op)
	{
		
		$.ajax(
		{
			url:_url,
			async:false,
			type:'post',
			data:_op.param,
			dataType:'json',			
			success:function(_res)
			{
				
				
				if(_res.status){
					$('#mydialog').html('El registro se realizo de manera satisfactoria.');
					$('#mydialog').dialog('option', 'title', 'Mensaje de Sistema');
					$('#mydialog').dialog('option', 'width', '250px;');
					$('#mydialog').dialog('open');
					return _res;

				}
				else
				{
					_msj = '';
					$.each(_res,function(ev,valor)
					{
						_msj += mensaje(valor);
					});
				
					$('#mydialog').html(estructMensaje(_msj));
					$('#mydialog').dialog('option', 'title', 'Mensaje de Sistema');
					$('#mydialog').dialog('option', 'width', '250px;');
					$('#mydialog').dialog('open');
				}
				/*_msj = '';
				$.each(_res,function(ev,valor)
				{
					_msj += mensaje(valor);
				});
				
				
				if(_msj != '' && _op.tipo != 'reload')
				{
					$('#mydialog').html(estructMensaje(_msj)).fadeIn('slow');
				}
				else
				{
					switch(_op.tipo)
					{
						case 'dialog':
							$('#mydialog').html('El registro se realizo de manera satisfactoria.');
							$('#mydialog').dialog('option', 'title', 'Mensaje de Sistema');
							$('#mydialog').dialog('option', 'width', '250px;');
							$('#mydialog').dialog('open');
						break;
						case 'reload':
		
							if(_msj != '' && !_res.status)
							{
								$('.'+_op.contentMsj).html(estructMensaje(_msj)).fadeIn('slow');
								return;
							}
							$('#mydialog').dialog('close');
							 location.reload();
						break;
					}
				}*/				
				
			}
	
		});	
	}
				
				
	function estructMensaje(_msj)
	{
		_html = '';
		_ul_i = '<ul>';
		_ul_f = '</ul>';
		_html = '<p>Por favor corrija los siguientes errores:</p>';
		_html += _ul_i+_msj+_ul_f;
		return _html;
	}
		
	function mensaje(msj)
	{ 
		_msj = '';
		if(msj)
		{
			_msj = '<li>'+msj+'</li>';
		}
		
		return _msj;
	}
		
		
");
?>

<h1>Agregar Datosencuestado</h1>

<div id="mydialog"></div>
<div><input type="hidden" name="codigo_maestro" value="" ></div>
<?php
$this->widget('zii.widgets.jui.CJuiTabs',array(
        'id'=>'article_tab',
        'htmlOptions'=>array('class'=>'shadowaccordion'),  // INVISIBLE..
        'tabs'=>array(
                'Datos Personales'=>$this->renderPartial('_form',
                        array('model'=>$model,'id'=>1),true),
                'Datos Vivienda'=>$this->renderPartial('_form1',
                        array('model'=>$model1,'id'=>1),true),
                'Posesiones Vivienda'=>'',
                'Informacion Laboral'=>'',
				'Codicion de Salud'=>'',
				'Situacion Politica'=>$this->renderPartial('_form2',
                        array('model'=>$model2,'id'=>1),true),
				/*'Deposito'=>$this->renderPartial('inspeccion/_listado',
						array('model'=>$model,'id'=>6),true),*/
        ),
        'options'=>array(
                'collapsible'=>false,
                'cookie'=>9000,
        ),
));     // el ID del tab
?>