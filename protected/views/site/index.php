<?php  
  $base = Yii::app()->request->baseUrl;
  $cs = Yii::app()->getClientScript();
  //$cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  //$cs->registerScriptFile($base.'/js/jquery.gvChart-1.0.1.min.js');
  //$cs->registerScriptFile($base.'/js/pbs.init.js');
  $cs->registerCssFile($base.'/css/jquery.css');
?>

<?php $this->pageTitle=Yii::app()->name; ?>

<!--  <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i> Dashboard</h1>
<div class="flash-error">This is an example of an error message to show you that things have gone wrong.</div>
<div class="flash-notice">This is an example of a notice message.</div>
<div class="flash-success">This is an example of a success message to show you that things have gone according to plan.</div>
-->
<div class="span-23 showgrid">
<br>
<div class="dashboardIcons span-16 offset2">
     <?php 
    if(!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('admin'))):?>
    <div class="dashIcon span-3">
        <a href="<?php print Yii::app()->createUrl('/viviendo');?>">
            <img src="<?php echo $base; ?>/images/big_icons/icon-house2.png" alt="Viviendas" />
        </a>
        <div class="dashIconText ">
            <a href="<?php print Yii::app()->createUrl('/viviendo/');?>">Viviendas</a>
        </div>
    </div>
    <?php 
    endif;
    ?>
    <?php 
    if(!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('admin'))):?>
    <div class="dashIcon span-3">
        <a href="<?php print Yii::app()->createUrl('cruge/ui/usermanagementadmin');?>"
            title="Panel de Seguridad" >
            <img src="<?php echo $base; ?>/images/big_icons/icon-key-hole.png" alt="Seguridad" />
        </a>
        <div class="dashIconText">
            <a href="<?php print Yii::app()->createUrl('cruge/ui/usermanagementadmin');?>">Seguridad</a>
        </div>
    </div>
    <?php 
    endif;
    ?>
    
    <?php 
    if(!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('admin'))):?>
    <div class="dashIcon span-3">
        <a  href="<?php print Yii::app()->createUrl('/visualizador/index');?>">
            <img src="<?php echo $base; ?>/images/big_icons/icon-earth.png" alt="Visualizador" />
        </a>
        <div class="dashIconText">
            <a href="<?php print Yii::app()->createUrl('/visualizador/index');?>">Visualizador</a>
        </div>
    </div>
    <?php 
    endif;
    ?>
  
    
</div><!-- END OF .dashIcons -->
<div class="span-7 last" style="height: 100px;">

       
</div>

</div>