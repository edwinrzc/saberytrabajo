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
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
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

    public function actionConsolidados()
    {

        $this->render('consolidados',array('id'=>''));
    }    


    
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

	public function actionPdf()
    {
        $this->render('pdf');
    }


    public function actionExcel()
    {
        $data= Reportes::consolidado_proyectos();

        Yii::app()->request->sendFile('consolidado_proyectos.xls',$this->renderPartial('excel',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
        
    }  

    public function actionPdf_estatus()
    {
        $this->render('pdf_estatus');
    }


    public function actionExcel_estatus()
    {
        $data= Reportes::consolidado_proyectos_estatus();

        Yii::app()->request->sendFile('consolidado_proyectos_estatus.xls',$this->renderPartial('excel_estatus',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
        
    }  

    public function actionPdf_tipo_vivienda()
    {
        $this->render('pdf_tipo_vivienda');
    }


    public function actionExcel_tipo_vivienda()
    {
        $data= Reportes::consolidado_tipo_vivienda();

        Yii::app()->request->sendFile('consolidado_tipo_vivienda.xls',$this->renderPartial('excel_tipo_vivienda',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
        
    }  

    public function actionPdf_tenencia_vivienda()
    {
        $this->render('pdf_tenencia_vivienda');
    }


    public function actionExcel_tenencia_vivienda()
    {
        $data= Reportes::consolidado_tenencia_vivienda();

        Yii::app()->request->sendFile('consolidado_tenencia_vivienda.xls',$this->renderPartial('excel_tenencia_vivienda',array('model'=>$data),'application/vnd.ms-excel;charset=UTF-8',true));
        
    }  
	
	public function loadModel($id)
	{
		$model=Persona::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
}
