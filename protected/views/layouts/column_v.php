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
<?php $this->widget('application.extensions.mbmenu.MbMenu',array( 
            'items'=>array( 
                array('label'=>'Inicio', 'url'=>array('/site/index')), 
                array('label'=>'Registro', 'url'=>array('#'), 
                  'items'=>array( 
                    array('label'=>'Proyectos','url'=>array('/Proyecto/admin')), 
                    array('label'=>'Familias','url'=>array('/datosencuestado/admin')), 
                  ), 
                ), 
                array('label'=>'Configuracion', 
                  'items'=>array( 
                    array('label'=>'Carrera de Estudio', 'url'=>array('/Carreraestudio/admin')),
					array('label'=>'Centros Penitenciarios', 'url'=>array('/Centropenitenciario/admin')),
					array('label'=>'Comunidad Indigena', 'url'=>array('/comunidadindigena/admin')),
					array('label'=>'Estado Civil', 'url'=>array('/estadocivil/admin')),
					array('label'=>'Motivos de Estudios', 'url'=>array('/motivoestudio/admin')),
					array('label'=>'Nacionalidades', 'url'=>array('/Nacionalidades/admin')),
					array('label'=>'Nivel de Instruccion', 'url'=>array('/nivelinstruccion/admin')),
					array('label'=>'Parentesco Familiar', 'url'=>array('/parentescofamiliar/admin')),
					array('label'=>'Mision Social', 'url'=>array('/misionsocial/admin')),
					array('label'=>'Organizacion Social', 'url'=>array('/organizacionsocial/admin')), 
                    /*array('label'=>'Sub 2', 
                      'items'=>array( 
                        array('label'=>'Sub sub 1', 'url'=>array('/site/page','view'=>'subsub1')), 
                        array('label'=>'Sub sub 2', 'url'=>array('/site/page','view'=>'subsub2')), 
                      ), 
                    ),*/ 
                  ), 
                ), 
            ), 
    )); ?> 
</div> <!--mainmenu -->
<div class="container">
	<div class="span-19">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-5 last">
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'<span class="icon icon-sitemap_color">Operaciones</span>',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'<span class="icon icon-user">Account Details</span>',
			));
			?>
            Domains Used: 45/100
			<?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>45,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Space Used: 95%
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>95,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Bandwidth Used: 10%
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>10,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Conversion rate: 25%            
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>25,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
			<?php
			$this->endWidget();
		?>
		
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>