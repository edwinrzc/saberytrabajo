<?php

/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */

$this->menu=array(
	array('label'=>'List Datosencuestado', 'url'=>array('index')),
	array('label'=>'Manage Datosencuestado', 'url'=>array('admin')),
);
?>

<h1>Agregar Datosencuestado</h1>


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