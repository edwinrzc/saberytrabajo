<?php
/* @var $this InformacionlaboralController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Informacionlaborals',
);

$this->menu=array(
	array('label'=>'Create Informacionlaboral', 'url'=>array('create')),
	array('label'=>'Manage Informacionlaboral', 'url'=>array('admin')),
);
?>

<h1>Informacionlaborals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
