<?php
/* @var $this DatosencuestadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datosencuestados',
);

$this->menu=array(
	array('label'=>'Create Datosencuestado', 'url'=>array('create')),
	array('label'=>'Manage Datosencuestado', 'url'=>array('admin')),
);
?>

<h1>Datosencuestados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
