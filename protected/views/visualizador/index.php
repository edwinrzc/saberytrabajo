<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="es" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilosMapa.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/structure.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/openlayer/theme/default/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/cba5058/jui/css/base/jquery-ui.css" type="text/css" />
<style type="text/css">
.olControlZoom {
	display: none;
}
</style>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/cba5058/jui/js/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dialogextend.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/openlayer/lib/OpenLayers.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	var popup;
	var map =  null;
	var urlWMS = "http://localhost:8080/geoserver";
	var esquema1 = "FMCHG-PRO";
	var esquema2 = "FMCHG-SIG";
	var info = null;
	//{'layers': 'vista', viewparams:"parameter:data;parameter1:data1", 'format':'image/png', 'transparent':'true'}
	OpenLayers.ProxyHost = "<?php echo Yii::app()->createUrl("/visualizador/proxy", array("url"=>""));?>";
	function init() 
    {
    	map = new OpenLayers.Map({
    		 div: 'div-mapa',
    		 maxExtent: new OpenLayers.Bounds(
    		 -20037508, -20037508, 20037508, 20037508.34
    		 )
    		});

          
        var layer = new OpenLayers.Layer.OSM( 'Viviendo Venezolanos');

        var physical = new OpenLayers.Layer.Google(
        	    "Google Physical",
        	    {type: google.maps.MapTypeId.TERRAIN}
        );
        var streets = new OpenLayers.Layer.Google(
        	    "Google Streets"
        );
        var hybrid = new OpenLayers.Layer.Google(
        	    "Google Hybrid",
        	    {type: google.maps.MapTypeId.HYBRID}
        );
        var satellite = new OpenLayers.Layer.Google(
        	    "Google Satellite",
        	    {type: google.maps.MapTypeId.SATELLITE}
        );

        
        map.addLayers([layer,physical, streets, hybrid, satellite]);
        //map.addLayer(layer);
        //map.addLayer(twms);

        var LayerSwitcher = new OpenLayers.Control.LayerSwitcher({'div':OpenLayers.Util.getElement('layerswitcher')});
        map.addControls([
                         new OpenLayers.Control.Navigation(),
                         new OpenLayers.Control.Attribution(),
                         new OpenLayers.Control.PanZoomBar(),
                         new OpenLayers.Control.ScaleLine(),
                         LayerSwitcher
                 ]);
        map.setCenter(
            new OpenLayers.LonLat(-65.20846182021, 7.24073420724).transform(
                new OpenLayers.Projection('EPSG:4326'),
                map.getProjectionObject()
            ), 6
        );


        // Añadimos el control de WMS GetFeatureInfo   
        info = new OpenLayers.Control.WMSGetFeatureInfo({
            url: urlWMS+"/"+esquema2+"/wms?",
            title: 'Identify features by clicking',
            queryVisible: true,
            eventListeners: {
                getfeatureinfo: function(event) {

                	if(!event.features && !event.features.length < 1)
                    {
						return false;
                    }

                    
                    if (popup !== undefined) {
                      map.removePopup(popup);                      
                    }
                    popup = new OpenLayers.Popup.FramedCloud(
                      "chicken", 
                      map.getLonLatFromPixel(event.xy),
                      new OpenLayers.Size(50,50),
                      event.text,
                      null,
                      true
                    );
                    map.addPopup(popup);
                }
            }
        });
        map.addControl(info);
        info.activate();
	}

	function prenderCapa(nameLayer,esKema,_data)
	{
		paramWFS = _data.VIEWPARAMS;
		WMSRuta = urlWMS+"/"+esKema+"/wms?";
		//DirecciÃ³n del archivo de intercambio que realiza la comunicaciÃ³n con el servicio del WFS
		//OpenLayers.ProxyHost= "../../php/proxy.php?url=";
		//MapLibs.UpdateWMSLayer(nameLayer,Params);
		
		
		layerWMS = new OpenLayers.Layer.WMS(nameLayer,WMSRuta, _data, {
			displayInLayerSwitcher : false, 
			isBaseLayer: false, 
			singleTile: true, 
			gutter: 0, 
			buffer: 0,
			tileOptions: {maxGetUrlLength: 2048}
		});
			   
		map.addLayers([ layerWMS]);        
       
		//layerWMS.zoomToMaxExtent();
		//map.events.unregister('click', map, clickLayerWFS);
		//map.events.register('click', map, clickLayerWFS); 
        
	}


	/**
	 * FunciÃ³n para remover el layer
	 * 
	 * @param layerName (String) - Nombre del layer a remover
	 * @return
	 */
	function RemoverLayerVector(layerName)
	{
		// Se busca el layer
		var layer = map.getLayersByName(layerName);
		// Si la longitud del array devuelto es 0 se retorna;
		if (!layer.length)
		{
			return;
		}

		// Se recorren los marcadores(iconos) del layer si existen
		if (layer[0].markers)
		{
			for ( var i in layer[0].markers)
			{
				//Se eliminan los popups del mapa

				if (layer[0].markers[i].popup)
				{
					layer[0].markers[i].popup.destroy();
				}
			}

			map.removeLayer(layer[0]);
		}
		// Se recorren los marcadores(iconos vectoriales) del layer si existen
		else if (layer[0].features)
		{
			for ( var i in layer[0].features)
			{
				//Se eliminan los popups del mapa si tiene
				if (layer[0].features[i].popup)
				{
					layer[0].features[i].popup.destroy();
				}

				//Se eliminan las etiquetas del mapa si tiene
				if (layer[0].features[i].etiqueta)
				{
					layer[0].features[i].etiqueta.destroy();
				}

			}

			layer[0].removeAllFeatures();
			map.removeLayer(layer[0]);
		}
		else
		{
			// Se remueve el layer del mapa
			map.removeLayer(layer[0]);
		}

	}

	$(document).ready(function()
	{
		init();
		$('#mydialog').dialog(
				{'title':'Capas del Sistama',
				 'autoOpen':false,
				 'modal':false				 
				}
		).dialogExtend({
			"minimizable" : true,
			"dblclick" : "minimize",
			"icons" : { "maximize" : "ui-icon-arrow-4-diag" }
			});

		$('.boton-0').click(function()
		{
			//jQuery('#mydialog').html("aquiiii");
			$('#mydialog').dialog('option', 'title', 'Capas del Sistama');
			$('#mydialog').dialog('option', 'width', '250px');
			$('#mydialog').dialog('open');
		});

		$('.chk-capas').live('change',function()
		{
			_option = $(this).attr('rel');
			_data = null;
			_layer = "";
			if(!$(this).is(':checked'))
			{
				RemoverLayerVector(_option);
				return false;
			}
			switch(_option)
			{
				case 'nep_proyectos22':
					_layer = esquema1+":"+_option;
					console.log(_layer);
					_data = {'layers': _layer,'srs':'EPSG:4189','format':'image/png', 'transparent':'true'};
					prenderCapa(_option,esquema2,_data);
				break;
				default:
					_layer = esquema2+":"+_option;
					_data = {'layers': _layer,'format':'image/png', 'transparent':'true'};
					prenderCapa(_option,esquema2,_data);
				break;
				
			}
		});
	});
	
	</script>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div id="mydialog" >
		<table>
			<tr>
				<th>Orden Politico Territorial</th>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="dpt_estadal" >
						Estados
					</div> 
				</td>
			</tr>			
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="dpt_municipal" >
						Minicipios
					</div> 
				</td>
			</tr>			
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="dpt_parroquial" >
						Parroquias
					</div> 
				</td>
			</tr>	
		</table>
		<table >
			<tr>
				<th style="float: left;" >Vialidad</th>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="vialidad_general" >
						General
					</div> 
				</td>
			</tr>			
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="vialidad_densa" >
						Densa
					</div> 
				</td>
			</tr>
		</table>
		<table >
			<tr>
				<th style="float: left;" >Comunidad</th>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="consejos_comunales_07_2014" >
						Consejos Comunales
					</div> 
				</td>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="centros_poblados" >
						Centros Poblados
					</div> 
				</td>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="pol_comunas_05_2014" >
						Comunas
					</div> 
				</td>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="centroacopio_municipio" >
						Centros de Acopio
					</div> 
				</td>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="ptih_municipios" >
						PTIH Municipios
					</div> 
				</td>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="nep_proyectos" >
						Proyectos
					</div> 
				</td>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="uatic_municipio" >
						UATIC
					</div> 
				</td>
			</tr>
		</table>
		<table >
			<tr>
				<th style="float: left;" >Empresas Socialista</th>
			</tr>
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="eps_municipio" >
						General
					</div> 
				</td>
			</tr>			
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="eps_carpinterias" >
						Carpinterías
					</div> 
				</td>
			</tr>			
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="eps_bloqueras" >
						Bloqueras
					</div> 
				</td>
			</tr>			
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="eps_herrerias" >
						Herrerías
					</div> 
				</td>
			</tr>			
			<tr>
				<td width="100%">					
					<div>
						<input type="checkbox" class="chk-capas" rel="eps_transporte" >
						Transporte
					</div> 
				</td>
			</tr>
		</table>
	</div>
	<div id="container">
		<div class="header-map">
			<div class="logo-nep">
				<a href="<?php print Yii::app()->createUrl('/menu/index');?>"> <img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/big_icons/n/NEPTUNO.png"
					height="90" style="float: left;"></img> <img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/big_icons/n/logo-final.png"
					height="90" style="float: right; margin-right: 25px;"></img>
				<?php //echo CHtml::encode(Yii::app()->name); ?>
			</a>
			</div>
		</div>
		<div class="contenedor-menu-botones" style="display: none;">
			<div class="contenedor-menu-boton">
				<div class="boton-0"></div>
			</div>
		</div>
		<div id="div-mapa"></div>
	</div>
</body>
</html>
