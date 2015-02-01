
<div style="float: left;">
	<h3>Consolidados de Proyectos por Estatus</h3>
</div>
<div align="right">
	<a href="<?php print Yii::app()->createUrl("/reportes/excel_estatus")?>"  title="Exportar Excel">                       
      <button type="button" class="btn btn-primary">
        <span class="excel"> </span> EXCEL
      </button>
    </a>

      <a href="<?php print Yii::app()->createUrl("/reportes/pdf_estatus")?>" title="Exportar PDF" target='_blank'> 
      <button type="button" class="btn btn-danger">
         <span class="pdf"></span> PDF
      </button>
    </a>

</div>

<br>



<?php 

$data= Reportes::consolidado_proyectos_estatus();


//print_r($data);die;

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'reporte1-grid',
    'dataProvider' => $data,
    'columns' => array(
 
        array(
            'header' => 'Estado',
            'name' => 'estado',
            //'value'=>'$data["MAIN_ID"]', //in the case we want something custom
        ),
        array(
            'header' => 'Activo',
            'name' => 'valor_1',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Paralizado',
            'name' => 'valor_2',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Total',
            'name' => 'valor_3',
            //'value'=>'$data["title"]', //in the case we want something custom
        )
    ),
));

 ?>


