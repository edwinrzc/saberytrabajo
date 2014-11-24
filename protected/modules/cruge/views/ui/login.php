<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/structure.css" />
	 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/csss/foundation.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('loginflash'); ?>
</div>
<?php else: ?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'logon-form',
	'htmlOptions'=>array('class'=>'box login'),
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<fieldset class="boxBody">
			<div class="row" style="display:block;width: 400px;" >
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ffm.png" style="margin-left: 30px;" height="70" ></img>
		</div>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

<br>

	<div class="row buttons">
		<?php Yii::app()->user->ui->tbutton(CrugeTranslator::t('Ingresar', "Ingresar")); ?>
		
	</div>

</fieldset>
	<?php
		//	si el componente CrugeConnector existe lo usa:
		//
		if(Yii::app()->getComponent('crugeconnector') != null){
		if(Yii::app()->crugeconnector->hasEnabledClients){ 
	?>
	<div class='crugeconnector'>
		<span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
		<ul>
		<?php 
			$cc = Yii::app()->crugeconnector;
			foreach($cc->enabledClients as $key=>$config){
				$image = CHtml::image($cc->getClientDefaultImage($key));
				echo "<li>".CHtml::link($image,
					$cc->getClientLoginUrl($key))."</li>";
			}
		?>
		</ul>
	</div>
	<?php }} ?>
	

<?php $this->endWidget(); ?>
</div>
<?php endif; ?>

</body>
</html>