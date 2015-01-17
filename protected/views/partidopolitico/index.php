<?php
/* @var $this PartidopoliticoController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Agrear', 'url'=>array('create')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Partidos Politicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
