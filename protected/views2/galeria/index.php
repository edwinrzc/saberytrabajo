<?php
/* @var $this GaleriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galerias',
);

$this->menu=array(
	array('label'=>'Create Galeria', 'url'=>array('create')),
	array('label'=>'Manage Galeria', 'url'=>array('admin')),
);
?>

<h1>Galerias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
