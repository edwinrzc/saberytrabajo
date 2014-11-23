<?php
/* @var $this OrganizacionsocialController */
/* @var $model Organizacionsocial */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_org_soc)),
	array('label'=>'Adminisrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Organizacion: <?php echo $model->nom_org_soc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>