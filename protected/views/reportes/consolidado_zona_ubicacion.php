<div style="float: left;">
	<h3>Consolidados por Zonas de Ubicación</h3>
</div>
<div align="right">
	<a href="<?php print Yii::app()->createUrl("/reportes/excel_zona_ubicacion")?>"  title="Exportar Excel">                       
      <button type="button" class="btn btn-primary">
        <span class="excel"> </span> EXCEL
      </button>
    </a>

      <a href="<?php print Yii::app()->createUrl("/reportes/pdf_zona_ubicacion")?>" title="Exportar PDF" target='_blank'> 
      <button type="button" class="btn btn-danger">
         <span class="pdf"></span> PDF
      </button>
    </a>

</div>

<br>



<?php 

$data= Reportes::consolidado_zona_ubicacion();


//print_r($data);die;

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'reporte-grid',
    'dataProvider' => $data,
    'columns' => array(
 
        array(
            'header' => 'Estado',
            'name' => 'estado',
            //'value'=>'$data["MAIN_ID"]', //in the case we want something custom
        ),
        array(
            'header' => 'Urbanizada',
            'name' => 'urbanizada',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
    	array(
    		'header' => 'No Urbanizada',
    		'name' => 'nourbanizada',
    		//'value'=>'$data["title"]', //in the case we want something custom
    	),
        array(
            'header' => 'Rural',
            'name' => 'rural',
            //'value'=>'$data["title"]', //in the case we want something custom
        )
    ),
));

 ?>