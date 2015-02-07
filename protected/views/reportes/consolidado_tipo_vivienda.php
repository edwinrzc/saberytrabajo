<div style="float: left;">
	<h3>Consolidados de Tipos de Viviendas</h3>
</div>
<div align="right">
	<a href="<?php print Yii::app()->createUrl("/reportes/excel_tipo_vivienda")?>"  title="Exportar Excel">                       
      <button type="button" class="btn btn-primary">
        <span class="excel"> </span> EXCEL
      </button>
    </a>

      <a href="<?php print Yii::app()->createUrl("/reportes/pdf_tipo_vivienda")?>" title="Exportar PDF" target='_blank'> 
      <button type="button" class="btn btn-danger">
         <span class="pdf"></span> PDF
      </button>
    </a>

</div>

<br>



<?php 

$data= Reportes::consolidado_tipo_vivienda();


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
            'header' => 'Casa',
            'name' => 'total_casa',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Apto',
            'name' => 'total_apto',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Quinta',
            'name' => 'total_quinta',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Rancho',
            'name' => 'total_rancho',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Refugio',
            'name' => 'total_refugio',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Otro',
            'name' => 'total_otro',
            //'value'=>'$data["title"]', //in the case we want something custom
        )
    ),
));

 ?>