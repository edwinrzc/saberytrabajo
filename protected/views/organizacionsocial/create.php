<?php
/* @var $this OrganizacionsocialController */
/* @var $model Organizacionsocial */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Organizacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>