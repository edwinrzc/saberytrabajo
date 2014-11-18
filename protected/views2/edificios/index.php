<?php
/* @var $this EdificiosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Edificioses',
);

$this->menu=array(
	array('label'=>'Create Edificios', 'url'=>array('create')),
	array('label'=>'Manage Edificios', 'url'=>array('admin')),
);
?>

<h1>Edificioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
