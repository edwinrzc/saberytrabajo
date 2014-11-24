<?php

/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */

$this->menu=array(
	array('label'=>'List Datosencuestado', 'url'=>array('index')),
	array('label'=>'Manage Datosencuestado', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('form_familiar', "

	$('#btn-datos-personales').click(function(e)
	{		
		_op = {param:{}};
		_op.param = $('#datosencuestado-form').serialize();
		_url = '".Yii::app()->createUrl('/datosencuestado/registrar')."';
		_op.tipo = 'dialog';
		_op.contentMsj = 'mensaje';			
		registrarFormulario(_url,_op);	
		
		
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

				}
				/*_msj = '';
				$.each(_res,function(ev,valor)
				{
					_msj += mensaje(valor);
				});
				
				
				if(_msj != '' && _op.tipo != 'reload')
				{
					$('.'+_op.contentMsj).html(estructMensaje(_msj)).fadeIn('slow');
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
		
		
");
?>

<h1>Agregar Datosencuestado</h1>

<div id="mydialog"></div>
<?php
$this->widget('zii.widgets.jui.CJuiTabs',array(
        'id'=>'article_tab',
        'htmlOptions'=>array('class'=>'shadowaccordion'),  // INVISIBLE..
        'tabs'=>array(
                'Datos Personales'=>$this->renderPartial('_form',
                        array('model'=>$model,'id'=>1),true),
                'Datos Vivienda'=>'',
                'Posecion Vivienda'=>'',
                'Informacion Laboral'=>'',
				'Codicion de Salud'=>'',
				'Situacion Politica'=>'',
				/*'Deposito'=>$this->renderPartial('inspeccion/_listado',
						array('model'=>$model,'id'=>6),true),*/
        ),
        'options'=>array(
                'collapsible'=>false,
                'cookie'=>9000,
        ),
));     // el ID del tab
?>