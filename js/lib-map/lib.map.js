/**
 * 
 */
/**
 * ARCHIVO: lib.map.js DESCRIPCIÃ“N: LibrerÃ­a para manejo del mapa OpenLayers
 * AUTOR: Darwin Serrano CREACIÃ“N: 30 de marzo de 2011 EMPRESA SIGIS C.A.
 */
function LibsMap(){};
// Variables para calcular distancias, Ã¡reas y polÃ­gonos
window.seg_actual = 0;
window.seg_anterior = 0;
window.seg_cont = 0;
window.longitud_linea = 0;
window.geoLinea = null;
window.geoPoligono = null;
window.area_poligono = 0;
window.perimetro_poligono = 0;
window.unidad = null;
window.geoValid = null;
window.popAdd = null;
window.popMod = null;
window.WMSsrs = "EPSG:4326";
window.WMSVersion = "1.1.1";
window.urlWMS = WMS_COMERCIOS;
window.paramWFS = {};
window.WMSLayers = null;
OpenLayers.ProxyHost= "./php/proxy.php?url=";



//Objeto general con la definiciÃ³n del mapa creado con OpenLayers
window.mapOL = null;
// Punto seleccionado por la funciÃ³n GetPunto de la clase MapLibs
// de forma {lon : x, lat : y};
window.geoPunto = null;
window.vectors = null;

//Nombre de las capas que montan los diferentes mapas
var nombre_mapa = {
	sigis : "SIGIS",
	sigis_gris : "SIGIS Gris",
	yahoo : "Yahoo",
	bing : "Bing",
	bing_satelite : "Bing SatÃ©lite",
	bing_hibrido : "Bing HÃ­brido",
	google : "Google",
	google_relieve : "Google Relieve",
	google_hibrido : "Google HÃ­brido",
	google_satelite : "Google SatÃ©tile"
};


var MapLibs = function()
{
	// Objeto de mapa creado con openlayers
	this.map = null;
	this.urlMap = window.SMAP_SERVERS;
	this.keyMap = window.KEY_MAP;
	this.isMercator = false;
	// Controles de cÃ¡lculo de Ã¡rea y distancia
	this.measureControls = null;
	// Diferentes niveles de zoom
	this.nivel = {
	   calle : 18,
	   ciudad : 11,
	   pais : 6,
	   mundo : 3
	};
	// Coordenada X inicial
	this.xini = -65.20846182021;
	// Coordenada Y inicial
	this.yini = 7.24073420724;
	// Nivel de zoom inicial
	this.nivini = this.nivel.pais;
	// Nivel de Zoom mÃ¡ximo para los mapas
	this.zoomMax = 22;
	// Imagen para ubicar puntos
	this.imgPuntos = "./template/common/img/pin01_24x24.png";
	// Imagen para pin buscador
	this.imgPuntoBuscador = {
	   src : "./template/common/img/iconoanimado02.gif",
	   w : 25,
	   h : 25
	};
	// Imagen para el pin de los comercios
	this.imgPuntoComercio = {
	   src : "./template/common/img/comercios/telecajero.png",
	   w : 18,
	   h : 18
	};
	// Imagen inicio ruta.
	this.imgInicio = "./template/common/img/pin_inicio.png";
	// Imagen final ruta.
	this.imgFinal = "./template/common/img/pin_fin.png";
	//Imagen para puntos con galeria.
	this.imgGaleria  = {
		src : "./template/common/img/lugar_con_foto.png",
		w : 18,
		h : 18
	};
	
	// Objeto con los estilos de las geometrÃ­as a digitalizar en el mapa
	this.styleMap = null;
	//
	this.funcionalidadActiva = null;
	this.herramientaActiva = null;

	//Estilos de los elementos de digitalizaciÃ³n
	this.styleDigitalizer = {
	   Point : {
	      pointRadius : 10,
	      graphicName : "circle",
	      fillColor : "af39a2",
	      fillOpacity : 0.5,
	      strokeWidth : 2,
	      strokeOpacity : 1,
	      strokeColor : "#611359",
	      cursor : "pointer"
	   },
	   Line : {
	      strokeWidth : 4,
	      strokeOpacity : 1,
	      strokeColor : "#611359",
	      strokeDashstyle : "dash",
	      cursor : "pointer"
	   },
	   Polygon : {
	      strokeWidth : 3,
	      strokeOpacity : 1,
	      strokeColor : "#611359",
	      fillColor : "#af39a2",
	      fillOpacity : 0.3,
	      cursor : "pointer"
	   }
	};
	
	
	//FunciÃ³n que monta el layer de puntos, se crea un conjunto de variables globales para el manejo de los parÃ¡metros que se reciben por cada layer.
	this.loadLayerWFS = function(nameLayer,_data,layers)
	{
		paramWFS = _data.VIEWPARAMS;
		WMSLayers = layers;
		//DirecciÃ³n del archivo de intercambio que realiza la comunicaciÃ³n con el servicio del WFS
		//OpenLayers.ProxyHost= "../../php/proxy.php?url=";
		//MapLibs.UpdateWMSLayer(nameLayer,Params);
		
		
		this.layerWMS = new OpenLayers.Layer.WMS(nameLayer, urlWMS, _data, {
			displayInLayerSwitcher : false, 
			isBaseLayer: false, 
			singleTile: true, 
			gutter: 0, 
			buffer: 0,
			tileOptions: {maxGetUrlLength: 2048}
		});
			   
		mapOL.addLayers([ this.layerWMS]);        
       
		//this.layerWMS.zoomToMaxExtent();
		mapOL.events.unregister('click', mapOL, this.clickLayerWFS);
		mapOL.events.register('click', mapOL, this.clickLayerWFS); 
        
	};
	
	
	//FunciÃ³n donde se realiza el pedido de la data para montar la nube, el evento se levanata cuando el nivel de zoom es igual o mayo a 16.
	this.clickLayerWFS = function(e)  
    {
		MapLibs.html = '';
		MapLibs.htm2 = '';
		MapLibs.contadorPeticion = 0;
		MapLibs.contadorElementos = 0;
		
		MapLibs.event = e;
		
		
    	if (mapOL.getZoom()>=16)
		{

    		layer = mapOL.getLayersByName("puntos_comercios");
			
            var params = {
                REQUEST: "GetFeatureInfo",
                EXCEPTIONS: "application/vnd.ogc.se_xml",
                BBOX: mapOL.getExtent().toBBOX(),
                SERVICE: "WMS",
                INFO_FORMAT: 'application/vnd.ogc.gml',
                QUERY_LAYERS:  WMSLayers,
                FEATURE_COUNT: 1,
                VIEWPARAMS: paramWFS,
                Layers: WMSLayers,
                WIDTH: mapOL.size.w,
                HEIGHT: mapOL.size.h,
                format: 'image/png',
                styles: '',
                srs: WMSsrs};	        
            
            if(this.WMSVersion == "1.3.0") {
                params.version = "1.3.0";
                params.j = e.xy.x;
                params.i = e.xy.y;
            } else {
                params.version = "1.1.1";
                params.x = e.xy.x.toFixed();
                params.y = e.xy.y.toFixed();
            }
            
            OpenLayers.Request.issue({
        		method: 'POST',
        		url : urlWMS,
        		params : params,
        		success: LibsMap.armarDatos
            });		
		        
    		 	
		}
    	
    };
    
    /*this.armarDatos = function(data)
    {
    	alert(data);
    	/*var elemento = this.transformarGmltoJson(data);
		console.log(elemento.CLASS_NAME);   
    	//console.log();
    	for(var i = 0; i<elemento.length; i++)
    	{
    		
    	}*/
    	//var g =  new OpenLayers.Format.GML();
    	//var resp = g.read(data.responseText);  
    	//console.log(resp); 
   // };*/
    
  //FunciÃ³n que transforma el gml en un objeto.
   /* this.transformarGmltoJson = function(gml)
    {
    	
    	var g =  new OpenLayers.Format.GML();
    	g.extractAttributes = true;
   	 	var resp = g.read(gml.responseText);   	 
   	 	return resp;
    };*/    
    

	//Estilos de los elementos de medida
	this.styleMeasure = {
	   Point : {
	      pointRadius : 4,
	      graphicName : "square",
	      fillColor : "white",
	      fillOpacity : 1,
	      strokeWidth : 1,
	      strokeOpacity : 1,
	      strokeColor : "#2f847e",
	      cursor : "pointer"
	   },
	   Line : {
	      strokeWidth : 4,
	      strokeOpacity : 1,
	      strokeColor : "#2f847e",
	      strokeDashstyle : "dash"
	   },
	   Polygon : {
	      strokeWidth : 3,
	      strokeOpacity : 1,
	      strokeColor : "#2f847e",
	      fillColor : "#4ad2c8",
	      fillOpacity : 0.3
	   }
	};

	/**
	 * Constructor del objero de mapa
	 */
	this.init = function(mapContainer)
	{
		/**
		 * Mapping Library OpenLayers.Map
		 * http://dev.openlayers.org/releases/OpenLayers-2.10/doc/apidocs/files/OpenLayers/Map-js.html
		 */
		var mapOptions = {
		   projection : new OpenLayers.Projection("EPSG:4326"),
		   displayProjection : new OpenLayers.Projection("EPSG:4326"),
			/*units: "m",
			maxResolution: 78271.516953125,*/
		   numZoomLevels : this.zoomMax,
		   controls : [ new OpenLayers.Control.Navigation()/*,
		                new OpenLayers.Control.Attribution(),
		                new OpenLayers.Control.TouchNavigation({
		                    dragPanOptions: {
		                        enableKinetic: true
		                    }
		                })*/
//		   new OpenLayers.Control.PanPanel(),
//		   new OpenLayers.Control.LayerSwitcher() 
		   ]
		};

		this.map = new OpenLayers.Map(mapContainer, mapOptions);
		mapOL = this.map;
//		this.urlMap = "http://maps.sigisweb.net/geoserver/gwc/service/wms?";
		var smapserver = new OpenLayers.Layer.WMS(nombre_mapa.sigis, this.urlMap, {
		   KEY : this.keyMap,
		   UWM : 1, //Utilizar Marca de Agua del Logo de SIGIS (la que esta por defecto)
		   WMO : 2, //Opacidad de la marca de agua
		   UGS : 0, //Tiles en escala de grises
		   CI  : 1, //Habilitar compresiÃ³n de imagen
		   CIL : 15, // 90% de compresiÃ³n de imagen
		   layers : 'BDEAS:SIGIS-WMS',
		   format : "image/jpeg",
		   version : '1.1.1',
		   isBaseLayer : true,
		   cache : 1,
		   SERVICE:"WMS",
		   REQUEST:"GetMap"
			/*KEY : this.keyMap,
			   UWM : 1, //Utilizar Marca de Agua del Logo de SIGIS (la que esta por defecto)
			   WMO : 2, //Opacidad de la marca de agua
			   UGS : 0, //Tiles en escala de grises
			   CI : 1, //Habilitar compresiÃ³n de imagen
			   CIL : 15, // 90% de compresiÃ³n de imagen
			   layers : 'SMapaOL',
			   format : "image/jpeg",
			   version : '1.1.1',
			   isBaseLayer : true,
			   cache : 1*/
			
			
		}, {
		   transitionEffect : 'resize',
		   buffer : 0,
		   cache : 1,
		   numZoomLevels : this.zoomMax
		});
		
		var smapserver_gris = new OpenLayers.Layer.WMS(nombre_mapa.sigis_gris, this.urlMap, {
		   UWM : 1, //Utilizar Marca de Agua del Logo de SIGIS (la que esta por defecto)
		   WMO : 2, //Opacidad de la marca de agua
		   UGS : 1, //Tiles en escala de grises
		   CI : 1, //Habilitar compresiÃ³n de imÃ¡gen
		   CIL : 15, // 90% de compresiÃ³n de imÃ¡gen
		   layers : 'BDEAS:SIGIS-WMS-GRAY',
		   format : "image/png",
		   version : '1.1.1',
		   cache : 1, 
		   SERVICE:"WMS",
		   REQUEST:"GetMap"
			/*KEY : this.keyMap,
			   UWM : 1, //Utilizar Marca de Agua del Logo de SIGIS (la que esta por defecto)
			   WMO : 2, //Opacidad de la marca de agua
			   UGS : 1, //Tiles en escala de grises
			   CI : 1, //Habilitar compresiÃ³n de imÃ¡gen
			   CIL : 15, // 90% de compresiÃ³n de imÃ¡gen
			   layers : 'SMapaOL',
			   format : "image/jpeg",
			   version : '1.1.1',
			   cache : 1*/
		}, {
		   transitionEffect : 'resize',
		   buffer : 0,
		   cache : 1,
		   numZoomLevels : this.zoomMax
		});

		this.map.addLayers([ smapserver, smapserver_gris ]);

		/**
		 * OpenLayers.LonLat
		 * http://dev.openlayers.org/releases/OpenLayers-2.8/doc/apidocs/files/OpenLayers/BaseTypes/LonLat-js.html#OpenLayers.LonLat
		 */

		if (jQuery.cookie('EEMPositionMapa'))
		{
			var position = jQuery.cookie('EEMPositionMapa');
			var arr_position = position.split(",");
			this.IrZoom(parseFloat(arr_position[0]), parseFloat(arr_position[1]), parseInt(arr_position[2]));
		}
		else
		{
			this.IrZoom(this.xini, this.yini, this.nivini);
		}

		/**
		 * Carga el Ãºltimo mapa visualizado que se guarda previamente en una
		 * cookie
		 */
		CapasMapas.MostrarOpcionesMapas();

		this.GetInfoPositionMapa();

		//Se agrega la configuraciÃ³n de los estilos.
		var style = new OpenLayers.Style();
		style.addRules([ new OpenLayers.Rule({
			symbolizer : this.styleMeasure
		}) ]);
		this.styleMap = new OpenLayers.StyleMap({
			"default" : style
		});

		/**
		 * Monta los estilos y eventos para las herramientas de distancias y
		 * cÃ¡culos de Ã¡reas
		 */
		this.IniciarMedirDistancias();

		this.map.events.on({
		   'moveend' : this.SyncronizeMap,
		   scope : this.map
		});
		
		// Si la url incluye parÃ¡metros, es posible que sea un objeto que fue compartido por redes o correo
		// y Se ejecuta esta acciÃ³n
		this.InitInstruccionesExternas();

		//this.map = mapOL;
	};

	/**
	 * Al compartir un enlace de la aplicaciÃ³n y ser ejecutado desde un ente
	 * externo, esta funciÃ³n verifica los parÃ¡metros recibidos y muestra sobre la
	 * aplicaciÃ³n los datos que fueron compartidos por el usuario
	 * 
	 * @param elementType (String) Identifica el elemento que fue compartido: Una
	 *           coordenada, un elemento digitalizado u otro
	 * @param positionObj (obj) objeto que contiene la identificaciÃ³n de la
	 *           coordenada que fue compartida en formato json ejem: {"x":
	 *           -69.21552255, "y": 10.2144858278, "z": 10}
	 * @param elementId (int) Identificador del elemento compartido en caso de
	 *           ser un elemento digitalizado
	 */
	this.InitInstruccionesExternas = function()
	{
		var opcion_compartir = jQuery("#hdd_dat_externos").val();
		if (opcion_compartir)
		{
			arr_datos = opcion_compartir.split("|");
			switch (arr_datos[0])
			{
				case compartir_social.aplicacion:
					this.IrZoom(arr_datos[1], arr_datos[2], arr_datos[3]);
					break;
				case 'punto_ruta':
					/*alert(arr_datos[1]);
					alert(arr_datos[2]);
					alert(arr_datos[3]);*/
					this.GetPuntoBusCompartido(arr_datos[1], arr_datos[2], arr_datos[3]);
					break;
				case compartir_social.coordenadas:
					this.GetPunto(null, arr_datos[1], arr_datos[2]);
					this.IrZoom(arr_datos[1], arr_datos[2], 'calle');
					break;
				case compartir_social.dig_punto:
					this.MostrarUno('punto', arr_datos[1]);
					this.herramientaActiva = 'DgElemntoRS';
					break;
				case compartir_social.dig_linea:
					this.MostrarUno('linea', arr_datos[1]);
					this.herramientaActiva = 'DgElemntoRS';
					break;
				case compartir_social.dig_poligono:
					//alert("Poligono id= "+arr_datos[1]);
					this.MostrarUno('poligono', arr_datos[1]);
					this.herramientaActiva = 'DgElemntoRS';
					break;
				default:
					break;
			}
		}
	};

	this.SyncronizeMap = function()
	{
		map.HistorySave();
		map.GetInfoPositionMapa();
		if(Trafico.capaActiva !== null){
			map.ActualizarCapaTrafico(Trafico.capaActiva);
		}
		else {
			map.ActualizarCapaTrafico(Trafico.capasTrafico.trafico);
		}
	};
	
	this.ActualizarCapaTrafico = function(nombre_capa)
	{
		var extent = mapOL.getExtent();
		var layersSigis = mapOL.getLayersByName(nombre_capa);
		var param = 'boxmin:'+extent.left+'\\,'+extent.bottom+';'+'boxmax:'+extent.right+'\\,'+extent.top+'\;';
		if(layersSigis.length !== 0)
		{
			layersSigis[0].mergeNewParams({
				viewparams: param
			});
		}
	};

	this.GetInfoPositionMapa = function()
	{
		var obj = this.GetMapPosition();
		jQuery.ajax({
		   type : "post",
		   url : "./src/buscador/buscador_punto_nivel.php",
		   data : obj,
		   success : function(respuesta)
		   {
			   jQuery("#div_direccion span").html(respuesta);
		   }
		});
	};

	/**
	 * MÃ©todo para acercar en un nivel la vista del mapa
	 */
	this.ZoomIn = function()
	{
		mapOL.zoomIn();
	};

	/**
	 * MÃ©todo para alejar en un nivel la vista del mapa
	 */
	this.ZoomOut = function()
	{
		mapOL.zoomOut();
	};

	/**
	 * Mueve el mapa en direcciÃ³n norte, sur, este y oeste
	 * 
	 * @param direccion {string} direcciÃ³n en la que se moverÃ¡ el mapa
	 */
	this.MoverDireccion = function(direccion)
	{
		switch (direccion)
		{
			case 'norte':
				mapOL.pan(0, -mapOL.getSize().h / 4);
				break;
			case 'sur':
				mapOL.pan(0, mapOL.getSize().h / 4);
				break;
			case 'este':
				mapOL.pan(mapOL.getSize().w / 4, 0);
				break;
			case 'oeste':
				mapOL.pan(-mapOL.getSize().w / 4, 0);
				break;
			default:
				break;
		}
	};

	/**
	 * MÃ©todo para cambiar los diferentes mapas que se muestran en la vista
	 * 
	 * @param tipoMapa Valor del objeto nombre_mapa 
	 */	
	this.SetProveerdorMapa = function(tipoMapa)
	{
		if (tipoMapa == this.map.baseLayer.name)
		{
			return;
		}

		var MapaBaseNuevo = null;
		var MapaSeleccionado = this.map.getLayersByName(tipoMapa);
				
		if(!MapaSeleccionado.length)
		{
			MapaBaseNuevo = this.CargarProveedorMapa(tipoMapa);
		}
		else
		{
			MapaBaseNuevo = MapaSeleccionado[0];
		}
		
		this.map.setBaseLayer(MapaBaseNuevo);
		
		if (tipoMapa != nombre_mapa.sigis_gris)
		{
			jQuery.cookie("EEMTipoMapa", tipoMapa, {
			   expires : 365,
			   path : "/"
			});
		}
	};

	/**
	 * Agrega al mapa una nueva capa con el proveedor de mapa especificado en nombre_mapa
	 * 
	 * @param tipoMapa  Valor de nombre_mapa
	 */
	this.CargarProveedorMapa = function(tipoMapa)
	{
		/**
		 * Carga de los mapas de proveedores externos
		 */
		var nuevoProveedor = null;
		
		switch (tipoMapa)
      {
	      case nombre_mapa.bing:
	      	nuevoProveedor = new OpenLayers.Layer.VirtualEarth(nombre_mapa.bing, {
					'sphericalMercator': this.isMercator,
	   		   animationEnabled : false,
	   		   maxZoomLevel : 18,
	   		   type : VEMapStyle.Shared
	   		});
	      	break;
	      	
	      case nombre_mapa.bing_satelite:
	      	nuevoProveedor = new OpenLayers.Layer.VirtualEarth(nombre_mapa.bing_satelite, {
					'sphericalMercator': this.isMercator,
	   		   animationEnabled : false,
	   		   maxZoomLevel : 18,
	   		   type : VEMapStyle.Aerial
	   		});
	      	break;
	      	
	      case nombre_mapa.bing_hibrido:
	      	nuevoProveedor = new OpenLayers.Layer.VirtualEarth(nombre_mapa.bing_hibrido, {
					'sphericalMercator': this.isMercator,
	   		   animationEnabled : false,
	   		   maxZoomLevel : 18,
	   		   type : VEMapStyle.Hybrid
	   		});
	      	break;
	      
	      case nombre_mapa.google:
	      	nuevoProveedor = new OpenLayers.Layer.Google(nombre_mapa.google, {
					'sphericalMercator': this.isMercator,
	   			numZoomLevels : this.zoomMax
	   		});
	      	break;
	      	
	      case nombre_mapa.google_relieve:
	      	nuevoProveedor = new OpenLayers.Layer.Google(nombre_mapa.google_relieve, {
					'sphericalMercator': this.isMercator,
	   		   type : G_PHYSICAL_MAP,
	   		   numZoomLevels : this.zoomMax
	   		});
	      	break;
	      	
	      case nombre_mapa.google_hibrido:
	      	nuevoProveedor = new OpenLayers.Layer.Google(nombre_mapa.google_hibrido, {
					'sphericalMercator': this.isMercator,
	   		   type : G_HYBRID_MAP,
	   		   numZoomLevels : this.zoomMax
	   		});
	      	break;
	      	
	      case nombre_mapa.google_satelite:
	      	nuevoProveedor = new OpenLayers.Layer.Google(nombre_mapa.google_satelite, {
					'sphericalMercator': this.isMercator,
	   		   type : G_SATELLITE_MAP,
	   		   numZoomLevels : this.zoomMax
	   		});
	      	break;
	      	
	      default:
		      break;
      }
		
		this.map.addLayer(nuevoProveedor);
		
		return nuevoProveedor;
	};
	
	/**
	 * FunciÃ³n para calcular distancias y Ã¡rea de poligonos
	 */
	this.IniciarMedirDistancias = function()
	{
		this.measureControls = {
		   line : new OpenLayers.Control.Measure(OpenLayers.Handler.Path, {
		      persist : true,
		      handlerOptions : {
			      layerOptions : {
				      styleMap : this.styleMap
			      }
		      }
		   }),
		   polygon : new OpenLayers.Control.Measure(OpenLayers.Handler.Polygon, {
		      persist : true,
		      handlerOptions : {
			      layerOptions : {
				      styleMap : this.styleMap
			      }
		      }
		   })
		};
		//Se agrega la funciones a los controles.
		var control;
		for ( var key in this.measureControls)
		{
			control = this.measureControls[key];
			control.events.on({
			   "measure" : this.HandleMeasurements,
			   "measurepartial" : this.HandleMeasurements
			});
			mapOL.addControl(control);
		}
	};

	this.HandleMeasurements = function(event)
	{
		if (popAdd != null)
		{
			popAdd.hide();
		}
		var geometry = event.geometry;
		var units = event.units;
		var order = event.order;
		var measure = parseFloat(event.measure);
		var seg_total = measure.toFixed(1);

		longitud_linea = measure.toFixed(1);
		geoLinea = event.geometry;
		coor = geometry.getBounds().getCenterLonLat();

		if (order == 1) //caso de ser lÃ­nea
		{
			seg_cont++;
			seg_actual = (seg_total - seg_anterior).toFixed(1);
			seg_anterior = seg_total;
			unidad = units;
			if (map.funcionalidadActiva != 'dg_linea')
			{
				map.EjecutarAccionModulo();
			}

		}

		if (event.type == 'measure')
		{
			if (map.funcionalidadActiva == 'dg_linea')
			{
				map.EjecutarAccionModulo();
			}
			//pasar geometria a operaciones_bd_herramientas.php
			if (order > 1) //caso de ser polÃ­gono
			{
				if (popAdd != null)
				{
					popAdd.hide();
				}
				jQuery.ajax({
				   type : "POST",
				   dataType : "json",
				   async : true,
				   url : "src/herramientas/operaciones_bd_herramientas.php",
				   data : "geometria=" + geometry,//validarla antes de..
				   success : function(msg)
				   {
					   geoPoligono = geometry;
					   area_poligono = msg.area;
					   perimetro_poligono = msg.perimetro;
					   geoValid = msg.geo_valid;
					   unidad = units;
					   coor = geometry.getBounds().getCenterLonLat();

					   map.EjecutarAccionModulo();
				   }
				});
			}
			seg_actual = 0;
			seg_anterior = 0;
			seg_cont = 0;
			longitud_linea = 0;
			area_poligono = 0;
			perimetro_poligono = 0;
			unidad = null;
			coor = null;
		}
	};

	this.toggleControl = function(element, estado)
	{
		for (key in this.measureControls)
		{
			var control = this.measureControls[key];
			if (element == key && estado)
			{
				control.activate();
			}
			else
			{
				control.deactivate();
			}
		}
	};

	/**
	 * Para ir a un acercamiento especÃ­fico en el mapa
	 * 
	 * @param coor_x Coordenada X o Longitud
	 * @param coor_y Coordenada Y o Latitud
	 * @param nivel Nivel de zoom al que se desea acercar Valores: Se encuentran
	 *           en el atributo this.nivel
	 */
	this.IrZoom = function(coor_x, coor_y, nivel)
	{
		coor_x = parseFloat(coor_x);
		coor_y = parseFloat(coor_y);
		var lonLat = new OpenLayers.LonLat(coor_x, coor_y).transform(this.map.displayProjection, this.map.getProjectionObject());
		var level = isNaN(nivel) ? this.GetNivel(nivel) : nivel;
		mapOL.setCenter(lonLat, level);
	};

	/**
	 * Devuelve el valor del nivel de acercamiento seleccionado
	 * 
	 * @param nivel String Nivel del acercamiento (calle, ciudad, pais, mundo)
	 */
	this.GetNivel = function(nivel)
	{
		switch (nivel)
		{
			case 'calle':
				return this.nivel.calle;
				break;
			case 'ciudad':
				return this.nivel.ciudad;
				break;
			case 'pais':
				return this.nivel.pais;
				break;
			case 'mundo':
				return this.nivel.mundo;
				break;
			default:
				return this.nivel.calle;
				break;
		}
	};

	/**
	 * FunciÃ³n para setear los valores del extent inicial del mapa
	 * 
	 * @param (Float) - Valor de la coordenada en X
	 * @param (Float) - Valor de la coordenada en Y
	 * @param (Int) - Valor del zoom
	 */
	this.SetInitialExtent = function(x, y, niv)
	{
		this.xini = x;
		this.yini = y;
		this.nivini = niv;
	};

	/**
	 * FunciÃ³n para ir al extent inicial del mapa
	 */
	this.GoInitialExtent = function()
	{
		var x = (typeof (this.xini) == "undefined" || !this.xini) ? 0 : this.xini;
		var y = (typeof (this.yini) == "undefined" || !this.yini) ? 0 : this.yini;
		var niv = (typeof (this.nivini) == "undefined" || !this.nivini) ? 0 : this.nivini;

		var punto = new OpenLayers.LonLat(x, y).transform(this.map.displayProjection, this.map.getProjectionObject());
		mapOL.setCenter(punto, niv);
	},

	/**
	 * FunciÃ³n para mostrar el rectÃ¡ngulo del zoom en el mapa
	 */
	this.ShowRectangle = function()
	{
		this.Navigation.zoomBox.handler.dragHandler.keyMask = null;
	},

	/**
	 * FunciÃ³n para ocultar el rectÃ¡ngulo del zoom en el mapa
	 */
	this.HideRectangle = function()
	{
		this.Navigation.zoomBox.handler.dragHandler.keyMask = OpenLayers.Handler.MOD_SHIFT;
	};

	/**
	 * FunciÃ³n para realizar un extent del mapa
	 * 
	 * @param (Float) xMin - Coordenada menor en X
	 * @param (Float) yMin - Coordenada menor en Y
	 * @param (Float) xMax - Coordenada mayor en X
	 * @param (Float) yMax - Coordenada mayor en Y
	 * @return
	 */
	this.ZoomToBox = function(xMin, yMin, xMax, yMax)
	{
		/**
		 * Mapping Library OpenLayers.Bounds
		 * http://dev.openlayers.org/releases/OpenLayers-2.9.1/doc/apidocs/files/OpenLayers/BaseTypes/Bounds-js.html
		 */
		var bounds = new OpenLayers.Bounds(parseFloat(xMin), parseFloat(yMin), parseFloat(xMax), parseFloat(yMax));
		this.map.zoomToExtent( bounds.transform(this.map.displayProjection, this.map.getProjectionObject()) );
		
		var lonlat = this.GetCenter().transform(this.map.getProjectionObject(), this.map.displayProjection);
		var newNivel = parseInt(this.GetZoomLevel()) - 1;
		this.IrZoom(lonlat.lon, lonlat.lat, newNivel);

	};

	/**
	 * FunciÃ³n para obtener la coordenada central del mapa
	 * 
	 * @return (OpenLayers.LonLat)
	 */
	this.GetCenter = function()
	{
		return mapOL.getCenter();
	};

	/**
	 * FunciÃ³n para obtener el nivel de zoom actual del mapa
	 * 
	 * @return (Int)
	 */
	this.GetZoomLevel = function()
	{
		return mapOL.getZoom();
	};

	/**
	 * Retorna la posiciÃ³n XYZ donde se encuentra el mapa
	 */
	this.GetMapPosition = function()
	{
		var center = this.GetCenter();
		var zoomLevel = this.GetZoomLevel();

		var mapPosition = {
		   x : center.lon,
		   y : center.lat,
		   z : zoomLevel
		};

		return mapPosition;
	};

	/**
	 * Para obtener una coordenada a partir del click en el mapa
	 */
	this.ObtenerCoordenada = function()
	{
		if (this.herramientaActiva != 'obtener_punto')
		{
			mapOL.events.register("click", mapOL, this.GetPunto);
			this.MostrarMensajeHerramienta('obtener_punto');
			this.herramientaActiva = 'obtener_punto';
		}
	};

	/**
	 * Dibuja un punto sobre el mapa a partir de coordenadas dadas o de un objeto
	 * que contenga propiedades de LonLat
	 * 
	 * @param (Object) obj - El objeto que contiene los datos de coordenadas,
	 *           este se envÃ­a desde el evento click sobre el mapa si se activa
	 *           desde la funciÃ³n ObtenerCoordenada
	 * @param (Float) coo_x NÃºmero que identifica la Longitud o coordenada X del
	 *           punto a dibujar
	 * @param (Float) coo_x NÃºmero que identifica la Latitud o coordenada Y del
	 *           punto a dibujar
	 */
	this.GetPunto = function(obj, coo_x, coo_y)
	{
		if (coo_x && coo_y)
		{
			window.geoPunto = {
			   lon : parseFloat(coo_x),
			   lat : parseFloat(coo_y)
			};
		}
		else
		{
			var lonlat = mapOL.getLonLatFromViewPortPx(obj.xy);
			window.geoPunto = {
			   lon : lonlat.lon,
			   lat : lonlat.lat
			};
		}

		var nombre_layer = "Layer_Capturar_Punto";
		map.RemoverLayerVector(nombre_layer);

		var opcNube = {
		   closeBox : true,
		   CloseFunction : null,
		   popupHTML : map.GetContenidoNube(compartir_social.coordenadas, null, window.geoPunto.lon, window.geoPunto.lat),
		   width : null,
		   height : null,
		   closed : false
		};

		map.AgregaIconoVector(window.geoPunto.lon, window.geoPunto.lat, nombre_layer, map.imgPuntos, 24, 24, null, opcNube, 'centro');
		map.EjecutarAccionModulo();
	};

	this.FinalizarObtenerCoordenada = function()
	{
		var nombre_layer = "Layer_Capturar_Punto";
		map.RemoverLayerVector(nombre_layer);
		mapOL.events.unregister("click", mapOL, this.GetPunto);
		ocultar_mensaje_ayuda();
		this.herramientaActiva = null;
	};

	/**
	 * @param (Float) x - Coordenada en X donde se colocarÃ¡ el icono
	 * @param (Float) y - Coordenada en Y donde se colocarÃ¡ el icono
	 * @param (String) layerName - Nombre del layer donde se colocarÃ¡ el icono
	 * @param (String) imgPath - Ruta de la imagen del icono
	 * @param (Int) imageWidth - Ancho del icono en pixeles
	 * @param (Int) imageHeight - Alto del icono en pixeles
	 * @param (Object) labelOptions - Objeto con las opciones la etiqueta
	 *           (String) labelOptions.graphicTitle - Text del tooltip de la
	 *           imagen (String) labelOptions.label - Texto de la etiqueta
	 *           (String) labelOptions.labelAlign - AlineaciÃ³n de la etiqueta.
	 *           Valores de alineamiento horizontal validos: â€œlâ€=left,
	 *           â€œcâ€=center, â€œrâ€=right. Valores de alineamiento verticales
	 *           validos: â€œtâ€=top, â€œmâ€=middle, â€œbâ€=bottom. Ejemplo de valores:
	 *           â€œltâ€, â€œcmâ€, â€œrbâ€. (String) labelOptions.fontColor - Color de la
	 *           letra de la etiqueta. Ej: "#eecc99". (String)
	 *           labelOptions.fontWeight - Espesor del texto de la etiqueta.
	 *           Igual a CSS. (Boolean) labelOptions.fontSize - TamaÃ±o del texto
	 *           de la etiqueta. Igual a CSS.
	 * @param (Object) cloudOptions - Objeto con las opciones para la nube
	 *           (Boolean) cloudOptions.closeBox - True crear la imagen (X) que
	 *           cierra la nube. (Function) cloudOptionson.onCloseFunction -
	 *           FunciÃ³n que se ejecutarÃ¡ al cerrar la nube. (String)
	 *           cloudOptionson.popupHTML - Codigo Html que se mostrarÃ¡ en la
	 *           nube (String) cloudOptionson.width - Ancho de la nube. (String)
	 *           cloudOptionson.height - Alto de la nube. (Boolean)
	 *           cloudOptions.closed - True para crear el objeto sin mostrarse en
	 *           el mapa sino al darle click en el icono.
	 * @return
	 */

	this.AgregaIconoVector = function(x, y, nombreLayer, imgRuta, anchoImagen, altoImagen, opcionesEtiqueta, opcionesNube)
	{
		var vectorLayer = null;
		var nube = opcionesNube || null;
		// Si Â·opcionesEtiqueta es pasada como parÃ¡metro etiqueta tomarÃ¡ ese valor de lo contrario serÃ¡ null
		var etiqueta = opcionesEtiqueta || null;

		// Se busca el layer por el nombre obtenido
		var layer = mapOL.getLayersByName(nombreLayer);
		// Si el layer es encontrado la variable vectorLayer toma guarda el objeto
		if (layer.length)
		{
			vectorLayer = layer[0];
		}
		else
		{
			// Si no existe el layer se crea y se guarda en vectorLayer
			vectorLayer = new OpenLayers.Layer.Vector(nombreLayer);
			mapOL.addLayers([ vectorLayer ]);
		}

		// Se crea el estilo que tendra el punto
		var estiloPunto = OpenLayers.Util.extend({}, OpenLayers.Feature.Vector.style['default']);

		if (imgRuta)
		{
			estiloPunto.externalGraphic = imgRuta;
			estiloPunto.graphicOpacity = 1;
			estiloPunto.pointRadius = 10;
			estiloPunto.graphicWidth = anchoImagen;
			estiloPunto.graphicHeight = altoImagen;
		}
		else
		{
			estiloPunto.pointRadius = this.styleDigitalizer.Point.pointRadius;
			estiloPunto.graphicName = this.styleDigitalizer.Point.graphicName;
			estiloPunto.fillColor = this.styleDigitalizer.Point.fillColor;
			estiloPunto.fillOpacity = this.styleDigitalizer.Point.fillOpacity;
			estiloPunto.strokeWidth = this.styleDigitalizer.Point.strokeWidth;
			estiloPunto.strokeOpacity = this.styleDigitalizer.Point.strokeOpacity;
			estiloPunto.strokeColor = this.styleDigitalizer.Point.strokeColor;
		}

		// Si etiqueta es diferente a null se crea la etiqueta vectorial
		if (etiqueta != null)
		{
			estiloPunto.graphicTitle = etiqueta.text;
			estiloPunto.label = etiqueta.text;
			estiloPunto.labelAlign = etiqueta.labelAlign;
			estiloPunto.fontColor = etiqueta.fontColor;
			estiloPunto.fontWeight = etiqueta.fontWeight;
			estiloPunto.fontSize = etiqueta.fontSize;
		}

		// Si nube es diferente a null el estilo del cursor serÃ¡ "pointer" (mano)
		if (nube != null)
		{
			estiloPunto.cursor = "pointer";
			vectorLayer.tieneNube = true;
		}

		// Se crea la geometrÃ­a punto
		var punto = new OpenLayers.Geometry.Point(parseFloat(x), parseFloat(y));
		var atributos = {
		   ancho : anchoImagen,
		   alto : altoImagen,
		   x : parseFloat(x),
		   y : parseFloat(y),
		   infoNube : nube
		};
		// Se crea el vector con el punto y se agrega al layer
		var puntoVector = new OpenLayers.Feature.Vector(punto, atributos, estiloPunto);
		vectorLayer.addFeatures([ puntoVector ]);

		if (nube != null)
		{
			if (!atributos.infoNube.closed)
			{
				if (!puntoVector.popup)
				{
					// Se crea la nube de informaciÃ³n
					var popup = map.CrearNube(atributos.x, atributos.y, atributos.infoNube.closeBox, atributos.infoNube.onCloseFunction,
					   atributos.infoNube.popupHTML, atributos.infoNube.width, atributos.infoNube.height, atributos.infoNube.closed);

					// Se agrega el popup al vector punto para poder luego eliminarse al eliminar el vector.
					puntoVector.popup = popup;
				}
			}
		}

		this.AgregarEventosLayerVector();

		// Se retorna el punto
		return puntoVector;
	};

	// Control que maneja los eventos de las capas del mapa cuando son vectoriales
	this.selectControl = null;

	/**
	 * Recorre los layers y agrega los que tengan el parÃ¡metro tieneNube = true a un control para manejo de eventos 
	 * al seleccionar cada feature. Esto se hace porque se debe crear sÃ³lo un control para manejar todos los eventos click de las capas
	 * de tipo Vector
	 */
	this.AgregarEventosLayerVector = function()
	{
		var aLayers = new Array();
		var hayNube = false;

		// Se obtienen todos los layers que deben tener un control para asignar eventos que muestren nubes
		for ( var i = 0; i < mapOL.layers.length; i++)
		{
			if (mapOL.layers[i].tieneNube)
			{
				aLayers.push(mapOL.layers[i]);
				hayNube = true;
			}
		}

		// Se verifica si alguno de los layers que deban tener el control no lo tiene
		var faltanControles = false;
		for ( var i = 0; i < aLayers.length; i++)
		{
			if (!aLayers[i].tieneControl)
			{
				faltanControles = true;
				break;
			}
		}

		// Si algÃºn layer no tiene asignado el control se reconstruye el control con todos los layers
		if (faltanControles)
		{
			if (this.selectControl)
			{
				var controles = mapOL.getControlsByClass("OpenLayers.Control.SelectFeature");
				//console.log(controles);
				// Si el array devuelto posee registros.
				if (controles.length)
				{
					// Recorriendo los controles encontrados.
					for ( var i = 0; i < controles.length; i++)
					{
						var control = mapOL.getControl(controles[i].id);
						control.destroy();
					}
				}
				this.selectControl = null;
			}

			if (hayNube)
			{
				this.selectControl = new OpenLayers.Control.SelectFeature(aLayers, {
					clickout : true,
				   toggle : false,
				   multiple : false,
				   hover : false,
				   toggleKey : "ctrlKey", // ctrl key removes from selection
				   multipleKey : "shiftKey", // shift key adds to selection
				   onSelect : function(e)
				   {
					   // Si no existe el popup se crea
					   if (!e.popup)
					   {
						   // Se crea la nube de informaciÃ³n
						   var popup = map.CrearNube(e.data.x, e.data.y, e.data.infoNube.closeBox, e.data.infoNube.onCloseFunction,
						      e.data.infoNube.popupHTML, e.data.infoNube.width, e.data.infoNube.height, e.data.infoNube.closed);

						   // Se agrega el popup al vector punto para poder luego eliminarse al eliminar el vector.
						   e.popup = popup;
					   }
					   e.popup.show();
				   },
				   onUnselect : function(e)
				   {
					   e.popup.hide();
				   }
				});

				mapOL.addControl(this.selectControl);
				this.selectControl.activate();

				for ( var i = 0; i < aLayers.length; i++)
				{
					aLayers[i].tieneControl = true;
				}
			}
		}
	};

	/**
	 * @param (Float) x - Coordenada en X donde se colocarÃ¡ el icono
	 * @param (Float) y - Coordenada en Y donde se colocarÃ¡ el icono
	 * @param (String) layerName - Nombre del layer donde se colocarÃ¡ el icono
	 * @param (String) imgPath - Ruta de la imagen del icono
	 * @param (Int) imageWidth - Ancho del icono en pixeles
	 * @param (Int) imageHeight - Alto del icono en pixeles
	 * @param (Object) cloudOptions - Objeto con las opciones para la nube
	 *           (Boolean) cloudOptions.closeBox - True crear la imagen (X) que
	 *           cierra la nube. (Function) cloudOptionson.onCloseFunction -
	 *           FunciÃ³n que se ejecutarÃ¡ al cerrar la nube. (String)
	 *           cloudOptionson.popupHTML - Codigo Html que se mostrarÃ¡ en la
	 *           nube (String) cloudOptionson.width - Ancho de la nube. (String)
	 *           cloudOptionson.height - Alto de la nube. (Boolean)
	 *           cloudOptions.closed - True para crear el objeto sin mostrarse en
	 *           el mapa sino al darle click en el icono.
	 * @return
	 */

	this.AgregaIcono = function(x, y, layerName, imgPath, imageWidth, imageHeight, cloudOptions, ubicaIcon)
	{
		//console.log(cloudOptions);
		var markers = null;
		var options = cloudOptions || null;

		// Se busca el layer por el nombre obtenido
		var layer = mapOL.getLayersByName(layerName);

		if (layer.length)
		{
			markers = layer[0];
		}
		else
		{
			// Si no existe el layer se crea
			markers = new OpenLayers.Layer.Markers(layerName);
			mapOL.addLayer(markers);
		}

		var Size = new OpenLayers.Size(parseFloat(imageWidth), parseFloat(imageHeight));
		var Offset = null;
		switch (ubicaIcon)
		{
			case 'centro':
				Offset = new OpenLayers.Pixel(-(Size.w / 2), -(Size.h / 2));
				break;
			case 'abajo':
				Offset = new OpenLayers.Pixel(-(Size.w / 2), -(Size.h));
				break;
			case 'abajo-der':
				Offset = new OpenLayers.Pixel(-(Size.w), -(Size.h));
				break;
			default:
				Offset = new OpenLayers.Pixel(-(Size.w / 2), -(Size.h / 2));
				break;
		}

		var Icon = new OpenLayers.Icon(imgPath, Size, Offset);

		var LonLat = new OpenLayers.LonLat(parseFloat(x), parseFloat(y));
		var Marker = new OpenLayers.Marker(LonLat, Icon);
		markers.addMarker(Marker);
		if (options != null)
		{

			Marker.infoNube = options;
			// Registrando el evento en el icono

			Marker.events.register("mousedown", Marker, function(e)
			{
				if (!e.object.popup)
				{
					var popup = map.CrearNube(e.object.lonlat.lon, e.object.lonlat.lat, e.object.infoNube.closeBox, e.object.infoNube.onCloseFunction,
					   e.object.infoNube.popupHTML, e.object.infoNube.width, e.object.infoNube.height, e.object.infoNube.closed);
					e.object.popup = popup;
				}
				e.object.popup.toggle();
			});

			// Si se desea crear el popup se coloca el cursor pointer al icono
			Icon.imageDiv.style.cursor = 'pointer';
			// Se agrega el popup al marcador para poder luego eliminarse al eliminar el marcador

			if (!options.closed)
			{
				if (!Marker.popup)
				{
					var popup = this.CrearNube(parseFloat(x), parseFloat(y), options.closeBox, options.onCloseFunction, options.popupHTML, options.width,
					   options.height, options.closed);
					Marker.popup = popup;
				}
				Marker.popup.show();
			}
			//console.log(options.onCloseFunction);
		}
		return Marker;
	};

	/**
	 * FunciÃ³n para agregar una etiqueta tipo SMAP (Algo deficiente por como pone
	 * el mapa leeeeeeento :-( )
	 * 
	 * @param icono
	 * @param contenidoHtml
	 * @param acomodar
	 * @param anchoEtiqueta
	 * @param altoEtiqueta
	 * @return
	 */
	this.EtiquetaVectorPopup = function(icono, contenidoHtml, acomodar, anchoEtiqueta, altoEtiqueta)
	{
		if (!icono)
		{
			return false;
		}

		var ancho = anchoEtiqueta || null;
		var alto = altoEtiqueta || null;
		var tamano = null;

		var anchoAlto = (ancho != null && alto != null);
		if (anchoAlto)
		{
			tamano = new OpenLayers.Size(parseFloat(ancho), parseFloat(alto));
		}

		var x = icono.geometry.x, y = icono.geometry.y;
		var lonlat = new OpenLayers.LonLat(parseFloat(x), parseFloat(y));

		var popup = new OpenLayers.Popup(null, lonlat, tamano, contenidoHtml, false);

		if (!anchoAlto)
		{
			popup.autoSize = true;
		}
		mapOL.addPopup(popup);

		popup.setBackgroundColor("#FFF9EF");
		popup.setBorder("1px solid black");

		if (acomodar)
		{
			var altoIcono = icono.attributes.alto;
			var pixel = mapOL.getPixelFromLonLat(lonlat);
			pixel.x -= popup.size.w / 2;
			pixel.y += altoIcono / 2 + 1;
			popup.moveTo(pixel);

			mapOL.events.register("zoomend", mapOL, function()
			{
				var pixel2 = mapOL.getPixelFromLonLat(lonlat);
				pixel2.x -= popup.size.w / 2;
				pixel2.y += altoIcono / 2 + 1;
				popup.moveTo(pixel2);
			});
		}

		icono.etiqueta = popup;

		return popup;

	};

	/**
	 * FunciÃ³n para crear la nube de informaciÃ³n
	 * 
	 * @param (Float) x - Coordenada en X donde se colocarÃ¡ la nube.
	 * @param (Float) y - Coordenada en Y donde se colocarÃ¡ la nube.
	 * @param (Boolean) closeBox - True crear la imagen (X) que cierra la nube.
	 * @param (Function) onCloseFunction - FunciÃ³n que se ejecutarÃ¡ al cerrar la
	 *           nube.
	 * @param (String) popupHTML - Codigo Html que se mostrarÃ¡ en la nube
	 * @param (Int) width - Ancho de la nube.
	 * @param (Int) height - Alto de la nube.
	 * @param (Boolean) closed - True para crear el objeto sin mostrarse en el
	 *           mapa sino al darle click en el icono.
	 * @return
	 */
	this.CrearNube = function(x, y, closeBox, onCloseFunction, popupHTML, width, height, closed)
	{
		var size = null;
		// Si la funciÃ³n a ejecutarse al cerrar la nube no es pasada entonces closeFunction serÃ¡ null, de lo contrario
		// serÃ¡ la funciÃ³n pasada
		var closeFunction = onCloseFunction || null;
		// Si el ancho y el alto son pasados a la funciÃ³n se crea un objeto con estos valores para la nube
		// de lo contrario la nube se ajustarÃ¡ al texto
		if (width != null && height != null)
		{
			size = new OpenLayers.Size(parseInt(width), parseInt(height));
		}

		// Creando la nube de informaciÃ³n
		var popup = new OpenLayers.Popup.FramedCloud(null, new OpenLayers.LonLat(parseFloat(x), parseFloat(y)), size, popupHTML, null, closeBox,
		   function(evt)
		   {
			   if (closeFunction != null)
			   {
				   closeFunction(this, evt);
			   }
			   else
			   {
				   this.hide();
				   OpenLayers.Event.stop(evt);
			   }
		   });
		// Se agrega el popup al mapa
		mapOL.addPopup(popup);
		// Si closed es pasado a la funciÃ³n como true, la nube no se muestra al crearse
		if (closed)
		{
			popup.hide();
		}

		// retornando la nube de informaciÃ³n
		return popup;
	};

	/**
	 * FunciÃ³n para remover el layer
	 * 
	 * @param layerName (String) - Nombre del layer a remover
	 * @return
	 */
	this.RemoverLayerVector = function(layerName)
	{
		// Se busca el layer
		var layer = mapOL.getLayersByName(layerName);
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

			mapOL.removeLayer(layer[0]);
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
			mapOL.removeLayer(layer[0]);
		}
		else
		{
			// Se remueve el layer del mapa
			mapOL.removeLayer(layer[0]);
		}

		this.AgregarEventosLayerVector();
	};

	/**
	 * Muestra un mensaje de ayuda al usuario segÃºn la herramienta que se active
	 * sobre el mapa. El mensaje estÃ¡ en una nube amarilla del lado derecho de la
	 * pantalla
	 */
	this.MostrarMensajeHerramienta = function(herramienta)
	{
		switch (herramienta)
		{
			case 'obtener_punto':
				mostrar_mensaje_ayuda(msg_obtener_punto);
				break;
			case 'digitalizar_punto':
				mostrar_mensaje_ayuda(msg_dg_punto);
				break;
			case 'activar_herramienta_linea':
				mostrar_mensaje_ayuda(msg_ac_hr_linea);
				break;
			case 'activar_herramienta_poligono':
				mostrar_mensaje_ayuda(msg_ac_hr_poligono);
				break;
			case 'activar_dg_linea':
				mostrar_mensaje_ayuda(msg_dg_linea);
				break;
			case 'activar_dg_poligono':
				mostrar_mensaje_ayuda(msg_dg_poligono);
				break;
			case 'obtener_punto_ini':
				mostrar_mensaje_ayuda(msg_punto_inicio);
				break;
			case 'obtener_punto_fin':
				mostrar_mensaje_ayuda(msg_punto_final);
				break;
			case 'reportar_err':
				mostrar_mensaje_ayuda(msg_reportar_err);
				break;
			case 'cargar_imagen':
				mostrar_mensaje_ayuda(msg_cargar_imagen);
				break;
			case 'tu_comercio':
				mostrar_mensaje_ayuda(msg_tu_comercio);
				break;
			case 'informacion':
				mostrar_mensaje_ayuda(msg_informacion);
				break;
			case 'trafico_not_evento':
				mostrar_mensaje_ayuda(msg_trafico_not_evento);
				break;
			default:
				ocultar_mensaje_ayuda();
				break;
		}
	};

	this.points = new Array();
	this.lastback = false;
	this.max = 20;
	this.levels = null;
	this.afterSaving = false;

	this.HistorySave = function()
	{
		var position = this.GetMapPosition();
		this.points.push(position);

		if (this.points.length > this.max)
		{
			this.points.shift();
		}

		var position_str = position.x + ',' + position.y + ',' + position.z;
		jQuery.cookie("EEMPositionMapa", position_str, {
		   expires : 365,
		   path : "/"
		});
	};

	this.HistoryBack = function()
	{
		if (this.points.length < 2)
		{
			return;
		}

		//MapLibs.DeactivateZoomRectangle();

		var p = null;
		if (this.points.length >= 2)
		{
			p = this.points[this.points.length - 2];
			this.points.splice(this.points.length - 2, 2);
		}
		else
		{
			p = this.points[this.points.length - 1];
			this.points.pop();
		}

		if (typeof (p) == "undefined" || !p)
		{
			return;
		}

		mapOL.setCenter(new OpenLayers.LonLat(p.x, p.y), p.z);
	};

	/**
	 * Marca quÃ© funcionalidad de la aplicaciÃ³n se encuentra en uso
	 */
	this.SetFuncionalidadActiva = function(funcionalidad)
	{
		this.funcionalidadActiva = funcionalidad;
	};

	/**
	 * Ejecuta una acciones puntuales sobre los mÃ³dulos de funcionalidades al
	 * disparar un eventos sobre el mapa.
	 */
	this.EjecutarAccionModulo = function()
	{
		switch (this.funcionalidadActiva)
		{
			case 'ubicar_coordenadas':
				document.getElementById("ifr_modulo_content").contentWindow.set_coordenada_seleccionada();
				break;
			case 'medir_distancia':
				document.getElementById("ifr_modulo_content").contentWindow.mostrar_distancia();
				break;
			case 'calcular_area':
				document.getElementById("ifr_modulo_content").contentWindow.mostrar_area_perimetro();
				break;
			case 'tu_comercio':
				document.getElementById("ifr_modulo_content").contentWindow.set_coordenada_seleccionada();
				break;
			case 'dg_poligono':
				document.getElementById("ifr_modulo_content").contentWindow.valida_geometria();
				break;
			case 'dg_linea':
				document.getElementById("ifr_modulo_content").contentWindow.crea_linea();
				break;
			case 'digitalizar_linea':
				document.getElementById("ifr_modulo_content").contentWindow.mostrar_geometria();
				break;
			case 'Punto_Ini':
				document.getElementById("ifr_modulo_content").contentWindow.set_coordenada_ini();
				break;
			case 'Punto_Fin':
				document.getElementById("ifr_modulo_content").contentWindow.set_coordenada_fin();
				break;
			case 'Punto_Ruta_Ext':
				document.getElementById("ifr_modulo_content").contentWindow.Ruta_Busqueda_Panel();
				break;
			/*case 'Estado_General_Trafico':
				document.getElementById("ifr_modulo_content").contentWindow.iniciaClock();
				break;*/
			default:
				break;
		}
	};

	/**
	 * Detiene la ejecuciÃ³n de la herramienta del mapa que se marcÃ³ como activa
	 * en el atributo herramientaActiva
	 */
	this.DetenerHerramientaActiva = function()
	{
		switch (this.herramientaActiva)
		{
			case 'obtener_punto':
				this.FinalizarObtenerCoordenada();
				break;
			case 'busqueda_punto':
				this.FinalizarBusqueda();
				break;
			case 'line':
				this.toggleControl('line', false);
				ocultar_mensaje_ayuda();
				break;
			case 'polygon':
				this.toggleControl('polygon', false);
				ocultar_mensaje_ayuda();
				break;
			case 'poligono':
				map.RemoverLayerVector('DgTodos');
				if (popMod != null)
				{
					popMod.hide();
				}
				break;
			case 'punto':
				map.RemoverLayerVector('DgElementos');
				map.RemoverLayerVector('DgPuntos');
				break;
			case 'linea':
				map.RemoverLayerVector('DgTodos');
				if (popMod != null)
				{
					popMod.hide();
				}
				break;
			case 'punto_error':
				map.RemoverLayerVector('Layer_Pos_Err');
				FinError();
				ocultar_mensaje_ayuda();
				break;
			case 'tu_comercio':
				document.getElementById('ifr_modulo_content').contentWindow.fin_comercio();
				break;
			case 'dg_punto':
				map.RemoverLayerVector('DgPuntos');
				document.getElementById('ifr_modulo_content').contentWindow.fin_dg_nuevo_punto();
				break;
			case 'dg_poligono':
				document.getElementById('ifr_modulo_content').contentWindow.fin_dg_nuevo_poligono();
				break;
			case 'dg_linea':
				document.getElementById('ifr_modulo_content').contentWindow.fin_dg_nuevo_poligono();
				break;
			case 'canales_twitter':
				//this.FinalizarCanales();
				break;
			case 'DgElemntoRS':
				map.RemoverLayerVector('DgSocial');
				map.RemoverLayerVector('DgNuSocial');
				break;
			case 'obtener_punto_info':
				this.ClearIdentifyPoint();
				break;
			case 'trafico_not_evento':
				Trafico.FinUbicaNotificacionEvento();
				map.RemoverLayerVector('genera_trafico_not_evento');
				break;
			/*case 'Estado_General_Trafico':
				map.FinEstadoGeneralTrafico();
				break;*/
			case 'obtener_punto_imagen':
				ClearImagePoint();
				break;
			case 'galeria_imagenes':
				DeactivateLayerAlbums();
				break;
			default:
				break;
		}

	};

	/**
	 * Obtiene las opciones que se muestran en los popup o nubes de informaciÃ³n
	 */
	this.GetContenidoNube = function(opcion_compartir, contenido, coor_x, coor_y, id_elemento)
	{
		var url = null;
		var html_nube = null;

		var param = {
		   contenido : (contenido) ? contenido : "",
		   opcion_compartir : (opcion_compartir) ? opcion_compartir : "",
		   coor_x : (coor_x) ? coor_x : "",
		   coor_y : (coor_y) ? coor_y : "",
		   id_elemento : (id_elemento) ? id_elemento : ""
		};

		switch (opcion_compartir)
		{
			case 'punto':
				url = './src/opciones_nubes/rutas_redes_soc.php';
				break;
			case compartir_social.coordenadas:
				url = './src/opciones_nubes/rutas_redes_soc.php';
				break;
			case compartir_social.dig_punto:
				url = './src/opciones_nubes/rutas_redes_soc.php';
				break;
			case compartir_social.dig_linea:
				url = './src/opciones_nubes/compartir_redes_soc.php';
				break;
			case compartir_social.dig_poligono:
				url = './src/opciones_nubes/compartir_redes_soc.php';
				break;
			case 'punto_ruta':
				url = './src/opciones_nubes/punto_ruta.php' + contenido;
				break;
			case 'punto_err':
				url = './src/opciones_nubes/error_mapa.php' + contenido;
				break;
			case 'tu_comercio':
				url = './src/contribuciones/tu_comercio/registra_comercio.php';
				break;
			case 'dg_punto':
				url = './src/digitalizacion/punto/frm_nuevo_punto.php';
				break;
			case 'mod_punto':
				url = './src/digitalizacion/punto/frm_modificar_punto.php';
				break;
			case 'mod_poligono':
				url = './src/digitalizacion/poligono/frm_modificar_poligono.php';
				break;
			case 'mod_linea':
				url = './src/digitalizacion/linea/frm_modificar_linea.php';
				break;
			case 'dg_poligono':
				url = './src/digitalizacion/poligono/frm_nuevo_poligono.php';
				break;
			case 'dg_linea':
				url = './src/digitalizacion/linea/frm_nueva_linea.php';
				break;
			case 'punto_info':
				url = './src/opciones_nubes/informacion.php';
				break;
			case 'punto_imagen':
				url = './src/opciones_nubes/nube_pun_img.php' + contenido;
				break;
			case 'punto_galeria':
				url = './src/opciones_nubes/gallery_preview.php' + contenido;
				break;
			case 'punto_comercio':
				url = './src/opciones_nubes/nube_comercio.php' + contenido;
				break;
			default:
				break;
		}

		jQuery.ajax({
		   async : false,
		   type : "post",
		   url : url,
		   data : param,
		   success : function(result)
		   {
			   html_nube = result;
		   }
		});

		return html_nube;
	};

	/**
	 * Funciones para los calculos de rutas - INICIO -
	 */
	this.FinalizarObtienePuntoInicio = function()
	{
		mapOL.events.unregister("click", mapOL, this.ObtienePuntoInicio);
		ocultar_mensaje_ayuda();
		this.herramientaActiva = null;
	};

	this.DefineInicio = function()
	{
		top.map.SetFuncionalidadActiva('Punto_Ini');
		if (this.herramientaActiva != 'obtener_punto_ini')
		{
			mapOL.events.register("click", mapOL, this.ObtienePuntoInicio);
			this.MostrarMensajeHerramienta('obtener_punto_ini');
			this.herramientaActiva = 'obtener_punto_ini';
		}
	};

	this.ObtienePuntoInicio = function(obj)
	{
		var lonlat = mapOL.getLonLatFromViewPortPx(obj.xy);
		window.geoPuntoIn = {
		   lon : lonlat.lon,
		   lat : lonlat.lat
		};

		var nombre_layer = "Layer_Punto_Ini";
		map.RemoverLayerVector(nombre_layer);

		map.AgregaIcono(lonlat.lon, lonlat.lat, nombre_layer, map.imgInicio, 18, 18, null, 'centro');
		map.EjecutarAccionModulo();
		top.map.FinalizarObtienePuntoInicio();
	};

	/*
	 * FINAL
	 */
	this.FinalizarObtienePuntoFinal = function()
	{
		mapOL.events.unregister("click", mapOL, this.ObtienePuntoFinal);
		ocultar_mensaje_ayuda();
		this.herramientaActiva = null;
	};

	this.DefineFinal = function()
	{
		top.map.SetFuncionalidadActiva('Punto_Fin');
		if (this.herramientaActiva != 'obtener_punto_fin')
		{
			mapOL.events.register("click", mapOL, this.ObtienePuntoFinal);
			this.MostrarMensajeHerramienta('obtener_punto_fin');
			this.herramientaActiva = 'obtener_punto_fin';

		}
	};

	this.ObtienePuntoFinal = function(obj)
	{
		//top.map.finalizarObtienePuntoInicio();
		var lonlat = mapOL.getLonLatFromViewPortPx(obj.xy);
		window.geoPuntoFi = {
		   lon : lonlat.lon,
		   lat : lonlat.lat
		};

		var nombre_layer = "Layer_Punto_Fin";
		map.RemoverLayerVector(nombre_layer);

		map.AgregaIcono(lonlat.lon, lonlat.lat, nombre_layer, map.imgFinal, 18, 18, null, 'centro');
		map.EjecutarAccionModulo();
		top.map.FinalizarObtienePuntoFinal();
	};

	this.ShowSegmentOnMap = function(x, y)
	{
		if (typeof (MiniMapObj) != "undefined")
		{
			MiniMapObj.destroy();
			delete MiniMapObj;
		}

		if (typeof (objCallOut) != "undefined")
		{
			objCallOut.destroy();
			delete objCallOut;
		}

		map.RemoverLayerVector('RouteMarkerLayer');
		var icon = map.AgregaIcono(x, y, 'RouteMarkerLayer', 'template/common/img/pin.gif', 20, 20);
		icon.icon.imageDiv.style.cursor = 'pointer';

		icon.events.register("mousedown", icon, function(e)
		{

			if (typeof (objCallOut) != "undefined")
			{
				objCallOut.toggle();
			}
			else
			{
				map.OL_ShowWindow(x, y);
			}
		});
	};

	// SOLICITA IMAGEN A SROUTING
	this.PaintGeometryImage = function(layer, newParams, url)
	{
		var _url = url || null;

		if (!newParams instanceof Object || typeof (newParams) == "undefined")
		{
			return;
		}

		var graphic = new OpenLayers.Layer.MapServer(layer, _url, newParams, {
		   isBaseLayer : false,
		   projection : "EPSG:4326",
		   singleTile : true
		});

		mapOL.addLayer(graphic);

	};

	this.AgregarMiniLayer = function()
	{
		var IniLat = null;
		var IniLon = null;
		if (top.window.geoPuntoI != undefined || top.window.geoPuntoI != null)
		{
			IniLat = top.window.geoPuntoI.lat;
			IniLon = top.window.geoPuntoI.lon;
		}
		else
		{
			IniLat = document.getElementById("ifr_modulo_content").contentDocument.getElementById('StartLat').value;
			IniLon = document.getElementById("ifr_modulo_content").contentDocument.getElementById('StartLong').value;
		}

		if (top.window.geoPuntoF != undefined || top.window.geoPuntoF != null)
		{

			FinLat = top.window.geoPuntoF.lat;
			FinLon = top.window.geoPuntoF.lon;
		}
		else
		{
			FinLat = document.getElementById("ifr_modulo_content").contentDocument.getElementById('EndLat').value;
			FinLon = document.getElementById("ifr_modulo_content").contentDocument.getElementById('EndLong').value;
		}

		var complemento = "inix=" + IniLon + "&iniy=" + IniLat + "&finx=" + FinLon + "&finy=" + FinLat + "&costo=" + COSTO_ROUTING + "&dirigido="
		   + DIRECTED_ROUTING + "&grafo=" + JOIN_QUERY_GRAFO + "&tipo=layer" + "&";

		var _url = APP_PG_SERVER_ROUTING + "?" + complemento;

		var mapSize = MiniMapObj.getCurrentSize();
		var mapExtent = MiniMapObj.getExtent();

		var params = {
		   w : mapSize.w,
		   h : mapSize.h,
		   xmin : mapExtent.left,
		   ymin : mapExtent.bottom,
		   xmax : mapExtent.right,
		   ymax : mapExtent.top
		};

		var urlParams = '';
		for ( var i in params)
		{
			urlParams += i + "=" + escape(params[i]) + "&";
		}

		_url += urlParams;

		var graphic = new OpenLayers.Layer.Image("miniRuta", _url, mapExtent, mapSize, {
		   isBaseLayer : false,
		   projection : "EPSG:4326"
		});

		MiniMapObj.addLayer(graphic);
		graphic.setOpacity(0.5);

	};

	this.OL_ShowWindow = function(x, y)
	{
		var htmlPopup = "<div id='minimap' style='margin: 0px 0px 0px 5px; width:250px; height:200px; overflow:hidden; padding: 10px 5px!important;'></div>";
		objCallOut = map.CrearNube(x, y, true, null, htmlPopup, 275, 210, false);
		MiniMapObj = map.CrearMiniMapa("minimap");
		var wmsLayer = map.CrearWmsLayer();

		MiniMapObj.addLayers([ wmsLayer ]);
		//		MiniMapObj.addLayers([OLs.sigis_layer, OLs.google_layer, OLs.yahoo_layer, OLs.msn_layer]);
		MiniMapObj.setCenter(map.CrearLonLat(parseFloat(x), parseFloat(y)), 14);
		//		map.changeBaseLayer(map.mapaActual);

		//AGREGA EL ICONO EN EL MINIMAPA
		var layerName = 'MiniRouteMarkerLayer';
		var imgPath = 'template/common/img/pin.gif';
		var imageWidth = 20;
		var imageHeight = 20;

		var markers = null;

		var layer = MiniMapObj.getLayersByName(layerName);
		if (layer.length)
		{
			markers = layer[0];
		}
		else
		{
			markers = new OpenLayers.Layer.Markers(layerName);
			MiniMapObj.addLayer(markers);
		}

		Size = new OpenLayers.Size(parseFloat(imageWidth), parseFloat(imageHeight));
		Offset = new OpenLayers.Pixel(-(Size.w / 2), -(Size.h / 2));
		Icon = new OpenLayers.Icon(imgPath, Size, Offset);

		var LonLat = map.CrearLonLat(parseFloat(x), parseFloat(y));
		var Marker = new OpenLayers.Marker(LonLat, Icon);
		markers.addMarker(Marker);

		//AGREGA EL LAYER AL MINIMAPA
		//map.AgregarMiniLayer();

	};

	this.CrearMiniMapa = function(nombreMapa)
	{
		var mapOptions = {
		   projection : "EPSG:4326",
		   controls : [new OpenLayers.Control.Navigation(), new OpenLayers.Control.ZoomPanel()],
		   numZoomLevels : this.zoomMax
		};
		miniMap = new OpenLayers.Map(nombreMapa, mapOptions);

		return miniMap;
	};

	this.CrearWmsLayer = function()
	{
		var wmsLayer = new OpenLayers.Layer.WMS("SIGIS WMS", SMAPSERVER_ENCODER_PATH, {
		   KEY : KEY_MAP,
		   UWM : 1, //Utilizar Marca de Agua del Logo de SIGIS (la que esta por defecto)
		   WMO : 2, //Opacidad de la marca de agua
		   UGS : 0, //Tiles en escala de grises
		   CI : 1, //Habilitar compresiÃ³n de imÃ¡gen
		   CIL : 15, // 90% de compresiÃ³n de imÃ¡gen
		   layers : 'SMapaOL',
		   isBaseLayer : true,
		   format : "image/jpeg",
		   version : '1.1.1',
		   cache : 1
		}, {
		   transitionEffect : 'resize',
		   buffer : 0,
		   cache : 1
		});
		return wmsLayer;
	};

	this.CrearLonLat = function(x, y)
	{
		xy = new OpenLayers.LonLat(parseFloat(x), parseFloat(y));
		return xy;
	};

	//Para mostrar lineas y poligonos en el mapa jgil
	this.DigitalizarElemento = function(dgElemento, elemento, id)
	{
		var layer = mapOL.getLayersByName("DgTodos");
		if (layer.length == 0)
		{
			vectors = new OpenLayers.Layer.Vector("DgTodos");
			mapOL.addLayers([ vectors ]);
		}

		vectors.tieneNube = true;

		var coor = OpenLayers.Geometry.fromWKT(dgElemento.geometria).getBounds().getCenterLonLat();
		var htmlPopup = null;
		if (elemento == 'linea')
		{
			htmlPopup = map.GetContenidoNube(top.compartir_social.dig_linea, dgElemento.text, coor.lon, coor.lat, id);
		}
		else if (elemento == 'poligono')
		{
			htmlPopup = map.GetContenidoNube(top.compartir_social.dig_poligono, dgElemento.text, coor.lon, coor.lat, id);
		}

		var opcNube = {
		   closeBox : true,
		   CloseFunction : null,
		   popupHTML : htmlPopup,
		   width : null,
		   height : null,
		   closed : true
		};

		var atributos = {
		   ancho : null,
		   alto : null,
		   x : coor.lon,
		   y : coor.lat,
		   infoNube : opcNube
		};

		var feature = new OpenLayers.Feature.Vector(OpenLayers.Geometry.fromWKT(dgElemento.geometria), atributos, this.styleDigitalizer.Polygon);
		vectors.addFeatures([ feature ]);

		this.AgregarEventosLayerVector();

	};

	/*this.FinEstadoGeneralTrafico = function()
	{
		this.herramientaActiva = null;
		top.clearInterval(relojRefresh);
	};*/

	this.FinalizarBusqueda = function()
	{
		this.RemoverLayerVector('Layer_Busqueda');
		this.herramientaActiva = null;
		quitar_tabs_funcionalidad();
	};

	/*this.FinalizarCanales = function()
	{
		this.herramientaActiva = null;
		if(relojRefresh != undefined)
		{
			clearInterval(relojRefresh);
		}
	};*/

	//Nube informativa el elemento que fue compartido por RS o correo jgil
	this.nube = function(elemento, compartir_social, nom, x, y, id)
	{
		var opcNube = {
		   closeBox : true,
		   CloseFunction : null,
		   popupHTML : map.GetContenidoNube(compartir_social, nom, x, y, id),
		   width : null,
		   height : null,
		   closed : true
		};

		if (elemento == 'punto')
		{
			map.AgregaIconoVector(x, y, 'DgSocial', null, null, null, null, opcNube);
		}
		else if ((elemento == 'linea') || (elemento == 'poligono'))
		{
			map.AgregaIconoVector(x, y, 'DgNuSocial', null, null, null, null, opcNube);
		}
	};

	//Para digitalizar el elemento que fue compartido por RS o correo jgil
	this.DgUnElemnto = function(elemento, compartir_social, nom, x, y, id, geo)
	{
		map.nube(elemento, compartir_social, nom, x, y, id);
		var layer = mapOL.getLayersByName("DgSocial");
		if (layer.length == 0)
		{
			vectors = new OpenLayers.Layer.Vector("DgSocial");
			mapOL.addLayers([ vectors ]);
		}

		var feature = new OpenLayers.Feature.Vector(OpenLayers.Geometry.fromWKT(geo), null, this.styleDigitalizer.Polygon);

		vectors.addFeatures([ feature ]);
	};

	//Para mostrar elementos que fueron compartidos por RS o correo jgil
	this.MostrarUno = function(elemento, id)
	{
		jQuery.ajax({
		   type : "POST",
		   dataType : "json",
		   url : "src/digitalizacion/operaciones_bd_digitalizar.php",
		   data : "elemento=" + elemento + "&id=" + id + "&accion=MostarUno",
		   success : function(msg)
		   {
			   jQuery.each(msg, function(i, val)
			   {
				   nom = val.nom;
				   geo = val.geo.split("|");
				   x = geo[0];
				   y = geo[1];
				   xmin = geo[2];
				   xmax = geo[3];
				   ymin = geo[4];
				   ymax = geo[5];
				   geo = geo[6];
			   });
			   if (elemento == 'punto')
			   {
				   map.nube('punto', compartir_social.dig_punto, nom, x, y, id);
				   map.IrZoom(x, y, 'calle');
			   }
			   else if (elemento == 'linea')
			   {
				   map.DgUnElemnto('linea', compartir_social.dig_linea, nom, x, y, id, geo);
				   map.ZoomToBox(xmin, ymin, xmax, ymax);
			   }
			   else if (elemento == 'poligono')
			   {

				   map.DgUnElemnto('poligono', compartir_social.dig_poligono, nom, x, y, id, geo);
				   map.ZoomToBox(xmin, ymin, xmax, ymax);
			   }

		   }
		});
	};

	//Funcion(es) para la herramienta de informaciÃ³n del mapa.
	this.IdentifyPunto = function()
	{
		this.DetenerHerramientaActiva();
		if (this.herramientaActiva != 'obtener_punto_info')
		{
			mapOL.events.register("click", mapOL, map.GetPuntoInfo);
			this.MostrarMensajeHerramienta('informacion');
			this.herramientaActiva = 'obtener_punto_info';
		}
	};

	this.ClearIdentifyPoint = function()
	{
		mapOL.events.unregister("click", mapOL, map.GetPuntoInfo);
		ocultar_mensaje_ayuda();
		map.herramientaActiva = null;
		map.RemoverLayerVector('Layer_Punto_Info');
	};

	this.ShowPointDesc = function(px, py)
	{
		var res = null;
		jQuery.ajax({
		   url : 'src/herramientas_mapa/client_identify.php',
		   type : 'POST',
		   data : "px=" + px + "&py=" + py,
		   dataType : 'html',
		   async : false,
		   success : function(resultado)
		   {
			   res = resultado;
		   }
		});
		return res;
	};

	this.GetPuntoInfo = function(obj, coo_x, coo_y)
	{
		if (coo_x && coo_y)
		{
			window.geoPuntoInfo = {
			   lon : parseFloat(coo_x),
			   lat : parseFloat(coo_y)
			};
		}
		else
		{
			var lonlat = mapOL.getLonLatFromViewPortPx(obj.xy);
			window.geoPuntoInfo = {
			   lon : lonlat.lon,
			   lat : lonlat.lat
			};
		}

		var nombre_layer = "Layer_Punto_Info";
		map.RemoverLayerVector(nombre_layer);

		var cont = map.ShowPointDesc(window.geoPuntoInfo.lon, window.geoPuntoInfo.lat);

		var opcNube = {
		   closeBox : true,
		   onCloseFunction : map.ClearIdentifyPoint,
		   popupHTML : cont,
		   width : null,
		   height : null,
		   closed : false
		};

		map.AgregaIconoVector(window.geoPuntoInfo.lon, window.geoPuntoInfo.lat, nombre_layer, map.imgPuntos, 24, 24, null, opcNube);

	};

	this.GetPuntoBusCompartido = function(x, y, info_punto)
	{
		map.IrZoom(parseFloat(x), parseFloat(y), 'calle');
		var nombre_layer = "Layer_Busqueda";
		var url_bus = '?lon=' + x + '&lat=' + y + '&opcion_compartir=punto_ruta&infoPto=' + info_punto;

		var opcNube = {
		   closeBox : true,
		   onCloseFunction : map.FinBusCompartido,
		   popupHTML : map.GetContenidoNube('punto_ruta', url_bus),
		   width : null,
		   height : null,
		   closed : false
		};

		map.RemoverLayerVector(nombre_layer);

		map.AgregaIcono(parseFloat(x), parseFloat(y), nombre_layer, map.imgPuntoBuscador.src, map.imgPuntoBuscador.w, map.imgPuntoBuscador.h, opcNube,
		   'centro');
	};

	this.FinBusCompartido = function()
	{
		var nombre_layer = "Layer_Busqueda";
		map.RemoverLayerVector(nombre_layer);
	};
};

LibsMap.armarDatos = function(data)
{
	var objeto = LibsMap.transformarGmltoJson(data);
	
	for(var i = 0; i<objeto.length; i++)
	{
		var info = objeto[i].attributes.nom_com+"||"+objeto[i].attributes.des_com+"||"+objeto[i].attributes.dir_com_dpt+"||"+objeto[i].attributes.id_com;
		var param = 
		{
				info_punto	:info,
				px			:objeto[i].attributes.lon,
				py			:objeto[i].attributes.lat
		};
		
		LibsMap.procesarDatos(param);
	}
};

LibsMap.transformarGmltoJson = function(gml)
{
	
	var g =  new OpenLayers.Format.GML();
	g.extractAttributes = true;
	 	var resp = g.read(gml.responseText);   	 
	 	return resp;
};

LibsMap.procesarDatos = function(_json)
{
	if( typeof(_json) == 'undefined' )
	{
		return false;
	}
	var datos = _json;
	// Se llama a la funciÃ³n que pinta los puntos y se manda
	// la cadena de datos
	map.IrZoom(parseFloat(datos.px), parseFloat(datos.py), 'calle');
	var nombre_layer = "Layer_Busqueda";
	
	_html = map.GetContenidoNube('punto_comercio','?lon='+datos.px+'&lat='+datos.py+'&opcion_compartir=punto_ruta&infoPto='+datos.info_punto+"&deco=1");
	_width = 500;
	
	var opcNube = {
			closeBox : true,
			onCloseFunction : null,
			popupHTML : _html,
	        width : _width,
	        height : null,
	        closed : false
		};

	map.RemoverLayerVector(nombre_layer);
					
	map.AgregaIcono(parseFloat(datos.px), parseFloat(datos.py),
			nombre_layer, map.imgPuntoBuscador.src, map.imgPuntoBuscador.w, map.imgPuntoBuscador.h, opcNube, 'centro');
};
