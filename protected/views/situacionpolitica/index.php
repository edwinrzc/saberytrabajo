<?php
/* @var $this SituacionpoliticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Situacionpoliticas',
);

$this->menu=array(
	array('label'=>'Create Situacionpolitica', 'url'=>array('create')),
	array('label'=>'Manage Situacionpolitica', 'url'=>array('admin')),
);
?>

<h1>Situacionpoliticas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
