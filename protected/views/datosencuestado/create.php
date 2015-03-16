<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */
$baseUrl = Yii::app()->request->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl.'/css/jquery.css');
$cs->registerCssFile($baseUrl.'/assets/cba5058/jui/css/base/jquery-ui.css');
$cs->registerCssFile($baseUrl.'/assets/552382aa/gridview/styles.css');

Yii::app()->clientScript->registerScript('form_familiar', "

	jQuery('#mydialog').dialog({'title':'Desembolsos','autoOpen':false,'modal':true});

	$('#article_tab').show();
	var _tabs = $('#article_tab').tabs();
	//$('#article_tab' ).tabs({ disabled: [ 2, 3, 4, 5] }); //when initializing the tabs
	//$('#article_tab').tabs('option', 'disabled', [1, 2, 3, 4, 5] ); // or setting after init


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
			case 'Datosencuestado_nac_dp_enc':

				switch(_valor)
				{
					case 'V':
						bloquearDesbloquear('D','Datosencuestado_ced_dp_enc');
						bloquearDesbloquear('B','Datosencuestado_sit_leg_dp_enc');
						bloquearDesbloquear('B','Datosencuestado_cod_nac_enc');
					break;
					case 'E':
						bloquearDesbloquear('D','Datosencuestado_cod_nac_enc');
						bloquearDesbloquear('D','Datosencuestado_sit_leg_dp_enc');
						bloquearDesbloquear('D','Datosencuestado_ced_dp_enc');
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
			case 'Datosencuestado_est_emb_dp_enc':

				switch(_valor)
				{
					case 'S':
						bloquearDesbloquear('D','Datosencuestado_sem_emb_dp_enc');
						bloquearDesbloquear('D','Datosencuestado_asi_ctrl_emb_dp_enc');
					break;
					case 'N':
						bloquearDesbloquear('B','Datosencuestado_sem_emb_dp_enc');
						bloquearDesbloquear('B','Datosencuestado_asi_ctrl_emb_dp_enc');
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



",CClientScript::POS_LOAD);

?>

<h1>Datos Basicos Jefe Familiar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tipo'=>$tipo)); ?>