<?php $this->beginContent('//layouts/main'); ?>
<div id="mainMbMenu">
    	<?php /* $this->widget('zii.widgets.CMenu',array(
	'items'=>array(
		array('label'=>'Home', 'url'=>array('/site/index')),
		array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
		array('label'=>'Contact', 'url'=>array('/site/contact')),
		array('label'=>'Administrar Usuarios'
			, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
			, 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'Login'
			, 'url'=>Yii::app()->user->ui->loginUrl
			, 'visible'=>Yii::app()->user->isGuest),
		array('label'=>'Logout ('.Yii::app()->user->name.')'
			, 'url'=>Yii::app()->user->ui->logoutUrl
			, 'visible'=>!Yii::app()->user->isGuest),
	),
)); */?>
<?php /*$this->widget('zii.widgets.CMenu',array(
	'items'=>array(
		array('label'=>'Dashboard', 'url'=>array('/site/index')),
		array('label'=>'Graphs', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
		array('label'=>'Form', 'url'=>array('/site/page', 'view'=>'forms')),
		array('label'=>'Interface', 'url'=>array('/site/page', 'view'=>'interface')),				
		array('label'=>'Buttons & Icons', 'url'=>array('/site/page', 'view'=>'buttons_and_icons')),
		array('label'=>'Error Pages', 'url'=>array('/site/page', 'view'=>'Demo 404 page')),
	),
)); */?>

<div class="collapse navbar-collapse navbar-ex1-inner">
    <ul class="nav navbar-nav nav-pills">
      <li><a href="<?php print Yii::app()->request->baseUrl.'/site/index';?>"><span class="glyphicon glyphicon-home"></span>&nbsp;Inicio</a></li>
      <li><a href="<?php print Yii::app()->createUrl('/tblsolicitud_materiales/admin');?>"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Registro</a></li>
      <li><a href="<?php print Yii::app()->createUrl('/configuraciones/index');?>"><span class="glyphicon glyphicon-wrench"></span>&nbsp;Configuración</a></li>
	  <li><a href='<?php print Yii::app()->user->ui->logoutUrl;?>'><span class="glyphicon glyphicon-off"></span>&nbsp;Cerrar Sesión</a></li>
	</ul>

  </div> 

<div class="navbar  navbar-fixed" >
	<div class="navbar-inner">
    <div class="container" >

     
          <!-- Be sure to leave the brand out there if you want it shown -->	
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-left nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'<span class="icon-home"></span> Inicio', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/site/index')),
                    		array('label'=>'<span class="icon-pencil"></span> Registro <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
                    				'items'=>array(
                    					    array('label'=>'Proyectos', 'url'=>array('/Proyecto/admin')),
                    						array('label'=>'Familias', 'url'=>array('/datosencuestado/admin')),
                    						array('label'=>'Asignaciones', 'url'=>array('/asignacionvivienda/admin')),
                    				)),

                    	  array('label'=>'<span class="icon-list"></span> Consolidados <span class="caret"></span>', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')), 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
                            'items'=>array(
                                array('label'=>'Consolidados', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/reportes/consolidados')),
                            	array('label'=>'Reporteador', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/reportes/reporteador')),
                            )),

                    		array('label'=>'<span class="icon-wrench"></span> Configuración <span class="caret"></span>', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')), 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
                    				'items'=>array(
                    						array('label'=>'Ayuda Tecnica', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/ayudatecnica/admin')),
                    						array('label'=>'Cadena de Alimentos', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/cadenaalimentos/admin')),
                    						array('label'=>'Carrera de Estudio', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/Carreraestudio/admin')),
                    						array('label'=>'Centros Penitenciarios', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')), 'url'=>array('/Centropenitenciario/admin')),
                    						array('label'=>'Comunidad Indigena', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/comunidadindigena/admin')),
                    						array('label'=>'Enfermedades', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/enfermedad/admin')),
                    						array('label'=>'Estado Civil', 'url'=>array('/estadocivil/admin')),
                    						array('label'=>'Motivos de Estudios', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/motivoestudio/admin')),
                    						array('label'=>'Nacionalidades', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/Nacionalidades/admin')),
                    						array('label'=>'Nivel de Instruccion', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/nivelinstruccion/admin')),
                    						array('label'=>'Parentesco Familiar', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')), 'url'=>array('/parentescofamiliar/admin')),
                    						array('label'=>'Partido Politico', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/partidopolitico/admin')),
                    						array('label'=>'Mision Social', 'visible'=>!Yii::app()->user->isGuest && Yii::app()->funcion->validarSession(array('Administrador')),'url'=>array('/misionsocial/admin')),
                    						array('label'=>'Ocupacion', 'url'=>array('/ocupacion/admin')),
                    						array('label'=>'Organizacion Social', 'url'=>array('/organizacionsocial/admin')),
                    				)),
                    		

                        array('label'=>'Iniciar', 'url'=>array('/cruge/ui/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'<span class="icon-off"></span> Cerrar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<!-- MENÚ ANTIGUO (EDWIN)
/* 
$this->widget('application.extensions.mbmenu.MbMenu',array( 
            'items'=>array( 
                array('label'=>'Inicio', 'url'=>array('/site/index')), 
                array('label'=>'Registro', 'url'=>array('#'), 
                  'items'=>array( 
                    array('label'=>'Proyectos','url'=>array('/Proyecto/admin')), 
                    array('label'=>'Familias','url'=>array('/datosencuestado/admin')),
                  	array('label'=>'Asignaciones','url'=>array('/asignacionvivienda/admin')),
                  ), 
                ), 
                array('label'=>'Configuracion', 
                  'items'=>array( 
                    array('label'=>'Ayuda Tecnica', 'url'=>array('/ayudatecnica/admin')),
                  	array('label'=>'Cadena de Alimentos', 'url'=>array('/cadenaalimentos/admin')),
                  	array('label'=>'Carrera de Estudio', 'url'=>array('/Carreraestudio/admin')),
					array('label'=>'Centros Penitenciarios', 'url'=>array('/Centropenitenciario/admin')),
					array('label'=>'Comunidad Indigena', 'url'=>array('/comunidadindigena/admin')),
					array('label'=>'Enfermedades', 'url'=>array('/enfermedad/admin')),
                  	array('label'=>'Estado Civil', 'url'=>array('/estadocivil/admin')),
					array('label'=>'Motivos de Estudios', 'url'=>array('/motivoestudio/admin')),
					array('label'=>'Nacionalidades', 'url'=>array('/Nacionalidades/admin')),
					array('label'=>'Nivel de Instruccion', 'url'=>array('/nivelinstruccion/admin')),
					array('label'=>'Parentesco Familiar', 'url'=>array('/parentescofamiliar/admin')),
					array('label'=>'Partido Politico', 'url'=>array('/partidopolitico/admin')),
					array('label'=>'Mision Social', 'url'=>array('/misionsocial/admin')),
                  	array('label'=>'Ocupacion', 'url'=>array('/ocupacion/admin')),
					array('label'=>'Organizacion Social', 'url'=>array('/organizacionsocial/admin')), 
                    /*array('label'=>'Sub 2', 
                      'items'=>array( 
                        array('label'=>'Sub sub 1', 'url'=>array('/site/page','view'=>'subsub1')), 
                        array('label'=>'Sub sub 2', 'url'=>array('/site/page','view'=>'subsub2')), 
                      ), 
                    ),
                  ), 
                ), 
            ), 
    )); 
*/
-->


</div> <!--mainmenu -->


<div class="container">
	<div class="span-24">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	
</div>
<?php $this->endContent(); ?>