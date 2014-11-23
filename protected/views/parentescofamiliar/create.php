<?php
/* @var $this ParentescofamiliarController */
/* @var $model Parentescofamiliar */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar Parentesco</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>