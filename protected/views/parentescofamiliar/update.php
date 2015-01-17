<?php
/* @var $this ParentescofamiliarController */
/* @var $model Parentescofamiliar */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cod_par_fam)),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Parentesco: <?php echo $model->nom_par_fam; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>