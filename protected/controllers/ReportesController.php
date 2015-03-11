<?php

class ReportesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column_vi';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			array('CrugeAccessControlFilter'),
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	
	/* COMENTADO LOS ACCESSRULES DEL FRAMEWORK, PARA QUE TENGA EL CONTROL EL CRUGE
	 
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','pdf','excel','pdf_estatus','excel_estatus','pdf_tenencia_vivienda','excel_tenencia_vivienda',
								 'pdf_tipo_vivienda', 'excel_tipo_vivienda',
								 'consolidado_proyectos','consolidado_proyectos_estatus','consolidado_tipo_vivienda','consolidado_tenencia_vivienda',
								 'consolidados'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionReporteador()
	{
		$this->render('reporteador',array('id'=>''));
	}
	
	public function actionFiltro()
	{
		$arreglo = '';
		switch($_POST['action'])
		{
			case 'DP':
				$arreglo = array('EDO'=>'Estado','MUN'=>'Municipio');
				break;
			case 'DE':
				break;
		}
		echo CHtml::tag('option',array('value' => ''),CHtml::encode('Seleccione'),true);
		foreach($arreglo as $id => $value)
		{
			echo CHtml::tag('option',array('value' => $id),CHtml::encode($value),true);
		}
	}
	public function actionGenerarexcel()
	{
		if($_POST && $_POST['action'] == 'REPORTE')
		{
			$model = new Reporteclass;
			switch ($_POST['rd_tipo_report'])
			{
				case 'R':
					$model->verificarCamposArray($_POST['slt_campo_seleccionado']);
					break;
				case 'G':
					$array = array_keys($model->modelo->attributeLabels());
					//print_r($array);
					$model->verificarCamposArray($array);
					break;
			}
			Yii::app()->request->sendFile('reporte_excel.xls',$this->renderPartial('_generadorexcel',array('model'=>$model),'application/vnd.ms-excel;charset=UTF-8',true));
		}
	}

	/**
	 * ACCIONES DE LOS CONSOLIDADOS
	 */
	
    public function actionConsolidado_proyectos()
    {

        $this->render('consolidado_proyectos',array('id'=>''));
    }   

    public function actionConsolidado_proyectos_estatus()
    {

        $this->render('consolidado_proyectos_estatus',array('id'=>''));
    }  

    public function actionConsolidado_tipo_vivienda()
    {

        $this->render('consolidado_tipo_vivienda',array('id'=>''));
    }   

    public function actionConsolidado_tenencia_vivienda()
    {

        $this->render('consolidado_tenencia_vivienda',array('id'=>''));
    }     
    
    public function actionConsolidado_tenencia_terreno()
    {
    
    	$this->render('consolidado_tenencia_terreno',array('id'=>''));
    }
    
    public function actionConsolidado_empleo_familia()
    {
    
    	$this->render('consolidado_empleo_familia',array('id'=>''));
    }
    
    public function actionConsolidado_servicio_agua()
    {
    
    	$this->render('consolidado_servicio_agua',array('id'=>''));
    }
    
    public function actionConsolidado_servicio_electrico()
    {
    
    	$this->render('consolidado_servicio_electrico',array('id'=>''));
    }
    
    public function actionConsolidado_servicio_internet()
    {
    
    	$this->render('consolidado_servicio_internet',array('id'=>''));
    }
    
    public function actionConsolidado_servicio_telefonico()
    {
    
    	$this->render('consolidado_servicio_telefonico',array('id'=>''));
    }
    
    public function actionConsolidado_sexo_familia()
    {
    
    	$this->render('consolidado_sexo_familia',array('id'=>''));
    }
    
    public function actionConsolidado_zona_ubicacion()
    {
    
    	$this->render('consolidado_zona_ubicacion',array('id'=>''));
    }

    public function actionConsolidados()
    {

        $this->render('consolidados',array('id'=>''));
    }    

	/**
	 * FIN DE LAS ACCIONES DE LOS CONSOLIDADOS
	 */
    
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Reportes');
		$this->render('consolidado_proyectos',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
/*	public function actionAdmin()
	{
		$model=new Persona('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Persona']))
			$model->attributes=$_GET['Persona'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}*/

	/**
	 * ACCIONES PDF
	 */
	
	
	public function actionPdf()
    {
        $this->render('pdf');
    }

    public function actionPdf_estatus()
    {
    	$this->render('pdf_estatus');
    }
    
    public function actionPdf_tipo_vivienda()
    {
    	$this->render('pdf_tipo_vivienda');
    }
    
    public function actionPdf_tenencia_vivienda()
    {
    	$this->render('pdf_tenencia_vivienda');
    }
    
    public function actionPdf_tenencia_terreno()
    {
    	$this->render('pdf_tenencia_terreno');
    }
    
    public function actionPdf_empleo_familia()
    {
    	$this->render('pdf_empleo_familia');
    }
    
    public function actionPdf_servicio_agua()
    {
    	$this->render('pdf_servicio_agua');
    }
    
    public function actionPdf_servicio_electrico()
    {
    	$this->render('pdf_servicio_electrico');
    }
    
    public function actionPdf_servicio_internet()
    {
    	$this->render('pdf_servicio_internet');
    }
    
    public function actionPdf_servicio_telefonico()
    {
    	$this->render('pdf_servicio_telefonico');
    }
    
    public function actionPdf_sexo_familia()
    {
    	$this->render('pdf_sexo_familia');
    }
    
    public function actionPdf_zona_ubicacion()
    {
    	$this->render('pdf_zona_ubicacion');
    }
    
    /**
     * FIN DE PDFS
     */
    
    /**
     * ACCIONES EXCEL
     */
    
    public function actionSeleccion()
    {
    	if($_POST && $_POST['action'] == 'SELECTION')
    	{
    		$model = '';
    		switch ($_POST['slt_seleccion'])
    		{
    			case 'DP':
    				$model = new Reporteencuesta;
    				break;
    			case 'DV':
    				break;
    		}
    		$data = $model->attributeLabels();
    		foreach($data as $id => $value)
    		{
    			echo CHtml::tag('option',array('value' => $id),CHtml::encode($value),true);
    		}
    	}
    }
    
    
    public function actionExcel()
    {
        $data= Reportes::consolidado_proyectos();

        Yii::app()->request->sendFile('consolidado_proyectos.xls',$this->renderPartial('excel',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
        
    }  

    public function actionExcel_estatus()
    {
        $data= Reportes::consolidado_proyectos_estatus();

        Yii::app()->request->sendFile('consolidado_proyectos_estatus.xls',$this->renderPartial('excel_estatus',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
        
    }  

    public function actionExcel_tipo_vivienda()
    {
        $data= Reportes::consolidado_tipo_vivienda();

        Yii::app()->request->sendFile('consolidado_tipo_vivienda.xls',$this->renderPartial('excel_tipo_vivienda',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
        
    }  

    public function actionExcel_tenencia_vivienda()
    {
        $data= Reportes::consolidado_tenencia_vivienda();

        Yii::app()->request->sendFile('consolidado_tenencia_vivienda.xls',$this->renderPartial('excel_tenencia_vivienda',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
        
    }  
    
    public function actionExcel_tenencia_terreno()
    {
    	$data= Reportes::consolidado_tenencia_terreno();
    
    	Yii::app()->request->sendFile('consolidado_tenencia_terreno.xls',$this->renderPartial('excel_tenencia_terreno',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
    
    }
    
    public function actionExcel_empleo_familia()
    {
    	$data= Reportes::consolidado_empleo_familia();
    
    	Yii::app()->request->sendFile('consolidado_empleo_familia.xls',$this->renderPartial('excel_empleo_familia',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
    
    }
    
    public function actionExcel_servicio_agua()
    {
    	$data= Reportes::consolidado_servicio_agua();
    
    	Yii::app()->request->sendFile('consolidado_servicio_agua.xls',$this->renderPartial('excel_servicio_agua',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
    
    }
    
    public function actionExcel_servicio_electrico()
    {
    	$data= Reportes::consolidado_servicio_electrico();
    
    	Yii::app()->request->sendFile('consolidado_servicio_electrico.xls',$this->renderPartial('excel_servicio_electrico',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
    
    }
    
    public function actionExcel_servicio_internet()
    {
    	$data= Reportes::consolidado_servicio_internet();
    
    	Yii::app()->request->sendFile('consolidado_servicio_internet.xls',$this->renderPartial('excel_servicio_internet',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
    
    }
    
    public function actionExcel_servicio_telefonico()
    {
    	$data= Reportes::consolidado_servicio_telefonico();
    
    	Yii::app()->request->sendFile('consolidado_servicio_telefonico.xls',$this->renderPartial('excel_servicio_telefonico',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
    
    }
    
    public function actionExcel_sexo_familia()
    {
    	$data= Reportes::consolidado_sexo_familia();
    
    	Yii::app()->request->sendFile('consolidado_sexo_familia.xls',$this->renderPartial('excel_sexo_familia',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
    
    }
    
    public function actionExcel_zona_ubicacion()
    {
    	$data= Reportes::consolidado_zona_ubicacion();
    
    	Yii::app()->request->sendFile('consolidado_zona_ubicacion.xls',$this->renderPartial('excel_zona_ubicacion',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
    
    }
	
    /**
     * FIN EXCEL 
     */
    
    
	public function loadModel($id)
	{
		$model=Persona::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
}
