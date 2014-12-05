$(document).ready(function()
{
	
	jQuery('#mydialog').dialog({'title':'Mensaje del Sistema','autoOpen':false,'modal':true});	
	
	
});

function registrarFormulario(_url,_op)
	{
		var _aux ={};
		$( ".clear-error" ).removeClass( "error" );
		
		$.ajax(
		{
			url:_url,
			async:false,
			type:'post',
			data:_op.param,
			dataType:'json',			
			success:function(_res)
			{
				
				_aux = _res;
				if(_res.status){
					$('#mydialog').html('El registro se realizo de manera satisfactoria.');
					$('#mydialog').dialog('option', 'title', 'Mensaje de Sistema');
					$('#mydialog').dialog('option', 'width', '250px;');
					$('#mydialog').dialog('open');					

				}
				else
				{
					_msj = '';
					$.each(_res,function(ev,valor)
					{
						$( "#"+ev ).addClass( "error" );
						_msj += mensaje(valor);
						
					});
				
					$('#mydialog').html(estructMensaje(_msj));
					$('#mydialog').dialog('option', 'title', 'Mensaje de Sistema');
					$('#mydialog').dialog('option', 'width', '250px;');
					$('#mydialog').dialog('open');
				}				
				
			}
	
		});	
				
		return _aux;
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