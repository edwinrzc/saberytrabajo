<h1>Consolidados</h1>
<br>
<?php
$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'Consolidado de Proyectos por Estado'=>$this->renderPartial('consolidado_proyectos',null,true),
        'Consolidado de Proyectos por Estatus'=>$this->renderPartial('consolidado_proyectos_estatus',null,true),
        'Consolidado de Familias por Sexo'=>$this->renderPartial('consolidado_sexo_familia',null,true),
        'Consolidado de Tipos de Viviendas'=>$this->renderPartial('consolidado_tipo_vivienda',null,true),
        'Consolidado Tenencias de Viviendas'=>$this->renderPartial('consolidado_tenencia_vivienda',null,true),
        'Consolidado Tenencias del Terreno'=>$this->renderPartial('consolidado_tenencia_terreno',null,true),
        'Consolidado por Zona de Ubicación de la Vivienda'=>$this->renderPartial('consolidado_zona_ubicacion',null,true),
        'Consolidado de Viviendas con Servicio de Agua Blanca'=>$this->renderPartial('consolidado_servicio_agua',null,true),
        'Consolidado de Viviendas con Servicio Electrico'=>$this->renderPartial('consolidado_servicio_electrico',null,true),
        'Consolidado de Viviendas con Servicio Teléfono Fijo '=>$this->renderPartial('consolidado_servicio_telefonico',null,true),
        'Consolidado de Viviendas con Servicio de Internet'=>$this->renderPartial('consolidado_servicio_internet',null,true),
        'Consolidado de Familias con Empleo'=>$this->renderPartial('consolidado_empleo_familia',null,true),
        'Consolidado de Jefes de Familias por Rango de Edad'=>$this->renderPartial('consolidado_proyectos',null,true),

        // panel 3 contains the content rendered by a partial view
        
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'collapsible'=> true,
        'animated'=>'bounceslide',
        'autoHeight'=>false,
        'active'=>13,
    ),
));
?>
<br>