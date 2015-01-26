<?php
$this->breadcrumbs=array(
	'Reporte'=>array('consolidado_proyectos'),
	'Consolidado de Proyectos por Estados',
);

?>
<div style="float: left;">
	<h3>Consolidados de Proyectos por Estado</h3>
</div>
<div align="right">
	<a href="<?php print Yii::app()->createUrl("/reportes/excel")?>"  title="Exportar Excel">                       
      <button type="button" class="btn btn-primary">
        <span class="excel"> </span> EXCEL
      </button>
    </a>

      <a href="<?php print Yii::app()->createUrl("/reportes/pdf")?>" title="Exportar PDF" target='_blank'> 
      <button type="button" class="btn btn-danger">
         <span class="pdf"></span> PDF
      </button>
    </a>

</div>

<br>



<?php 

$data= Reportes::consolidado_proyectos();


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
            'header' => 'Cant. Proyectos',
            'name' => 'valor_1',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Cant. Viviendas a Construir',
            'name' => 'valor_2',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Cant. Viviendas Asignadas',
            'name' => 'valor_3',
            //'value'=>'$data["title"]', //in the case we want something custom
        )
    ),
));

 ?>