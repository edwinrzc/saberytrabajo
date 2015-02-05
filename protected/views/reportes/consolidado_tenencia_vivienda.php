<div style="float: left;">
	<h3>Consolidados Tenencia de Viviendas</h3>
</div>
<div align="right">
	<a href="<?php print Yii::app()->createUrl("/reportes/excel_tenencia_vivienda")?>"  title="Exportar Excel">                       
      <button type="button" class="btn btn-primary">
        <span class="excel"> </span> EXCEL
      </button>
    </a>

      <a href="<?php print Yii::app()->createUrl("/reportes/pdf_tenencia_vivienda")?>" title="Exportar PDF" target='_blank'> 
      <button type="button" class="btn btn-danger">
         <span class="pdf"></span> PDF
      </button>
    </a>

</div>

<br>



<?php 

$data= Reportes::consolidado_tenencia_vivienda();


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
            'header' => 'Propia',
            'name' => 'total_propia',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Alquilada',
            'name' => 'total_alquilada',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Pagandose',
            'name' => 'total_pagandose',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Conserje',
            'name' => 'total_conserje',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Cuidando',
            'name' => 'total_cuidando',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Prestada',
            'name' => 'total_prestada',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Invadida',
            'name' => 'total_invadida',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Comodato',
            'name' => 'total_comodato',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Alojamiento',
            'name' => 'total_alojamiento',
            //'value'=>'$data["title"]', //in the case we want something custom
        )
    ),
));

 ?>