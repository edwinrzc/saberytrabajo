<?php

class DatosencuestadoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column_v';

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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','pdf'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	
	public function actionPdf($cod_dp_enc)
	{
		// <-------------- Obtiene y trae el código de la persona -------------->> //
		//print_r($model_cargo);die;
	
		$data=Datosencuestado::model()->findByPk($cod_dp_enc);
	
	
		$model_organizacion = Organizacionsocial::model()->findByPk($data['cod_org_soc']);
		$model_mision = Misionsocial::model()->findByPk($data['cod_mis_soc']);
		$model_penitenciaria = Centropenitenciario::model()->findByPk($data['cod_cen_pen']);
		$model_estadocivil = Estadocivil::model()->findByPk($data['cod_est_civ']);
		$model_indigena = Comunidadindigena::model()->findByPk($data['cod_com_ind']);
		$model_motivoestudio = Motivoestudio::model()->findByPk($data['cod_mot_est']);
		$model_nivelestudio = Nivelinstruccion::model()->findByPk($data['cod_niv_ins']);
		$model_carreraestudio = Carreraestudio::model()->findByPk($data['cod_car_est']);
		$model_nacionalidad = Nacionalidades::model()->findByPk($data['cod_nac_enc']);
		$model_parentesco = Parentescofamiliar::model()->findByPk($data['cod_par_fam']);
	
		//print_r($model_plan_corporativo);die;
	
		// <-------------- Llamado a los distintos modelos del sistema -------------->> //
		$this->render('pdf',array('model'=>$this->loadModel($cod_dp_enc),
				'model_organizacion'=>$model_organizacion,
				'model_mision'=>$model_mision,
				'model_penitenciaria'=>$model_penitenciaria,
				'model_estadocivil'=>$model_estadocivil,
				'model_indigena'=>$model_indigena,
				'model_motivoestudio'=>$model_motivoestudio,
				'model_nivelestudio'=>$model_nivelestudio,
				'model_carreraestudio'=>$model_carreraestudio,
				'model_nacionalidad'=>$model_nacionalidad,
				'model_parentesco'=>$model_parentesco,
	
	
				true
		));
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
	
	
	public function actionMunicipios()
	{
		$data = Municipal::model()->findAll('cod_estado=:parent_id',
				array(':parent_id'=> $_POST['Datosencuestado']['cod_edo']));
	
	
		$data = CHtml::listData($data,'ci_munici','municipio');
		echo CHtml::tag('option',array('value' => ''),'Seleccione un municipio...',true);
		foreach($data as $id => $value)
		{
			echo CHtml::tag('option',array('value' => $id),CHtml::encode($value),true);
		}
	
	}
	
	
	
	public function actionParroquia()
	{
		$data = Parroquial::model()->findAll('ci_munici=:parent_id',
				array(
						':parent_id'=> $_POST['Datosencuestado']['cod_mun']
				)
		);
	
		$data = CHtml::listData($data,'ci_parroq','parroquia');
		echo CHtml::tag('option',array('value' => ''),'Seleccione la parroquia...',true);
		foreach($data as $id => $value)
		{
			echo CHtml::tag('option',array('value' => $id),CHtml::encode($value),true);
		}
		
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Datosencuestado;
		
		/*$model1=new Caracteristicavivienda;
		$model2= new Situacionpolitica;
		$model3= new Posesionesvivienda;
		$model4= new Informacionlaboral;
		$model5= new Distribuciontiempo;
		
		$this->render('crearencuesta',array(
				'model1'=>$model1,
				'model2'=>$model2,
				'model3'=>$model3,
				'model4'=>$model4,
				'model5'=>$model5,
				'id'=>13,
		));
		Yii::app()->end();*/
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Datosencuestado']))
		{
			$model->attributes=$_POST['Datosencuestado'];
			
			if($model->save())
			{	
				
				$model1=new Caracteristicavivienda;
				$model2= new Situacionpolitica;
				$model3= new Posesionesvivienda;
				$model4= new Informacionlaboral;
				$model5= new Distribuciontiempo;
				
				$this->render('crearencuesta',array(
						'model1'=>$model1,
						'model2'=>$model2,
						'model3'=>$model3,
						'model4'=>$model4,
						'model5'=>$model5,
						'id'=>13,
				));
				
				Yii::app()->end();
				
			}
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	
	protected function validarForm($model)
	{
		$mod = CActiveForm::validate($model);
		if($mod != '[]')
		{
			echo $mod;
			Yii::app()->end();
		}
		
	}
	
	
	public function actionRegistrar()
	{
		header("Content-Type: application/json", true);
		try 
		{
			switch ($_POST['action'])
			{
			
				case 'DP':
					$model = new Datosencuestado;
					$model->attributes = $_POST['Datosencuestado'];
					$this->validarForm($model);
					break;
				case 'DV':
					$model = new Caracteristicavivienda;
					$model->attributes = $_POST['Caracteristicavivienda'];
					$this->validarForm($model);
					break;
				case 'SP':
					$model = new Situacionpolitica;
					$model->attributes = $_POST['Situacionpolitica'];
					$this->validarForm($model);
					break;
				case 'PV':
					$model = new Posesionesvivienda;
					$model->attributes = $_POST['Posesionesvivienda'];
					$this->validarForm($model);
				break;
				case 'IL':
					//print_r($_POST);die;
					$model = new Informacionlaboral;
					$model2 = new Distribuciontiempo;
					$model3 = new Distribuciontiempo;
					$fuente = $_POST['Informacionlaboral']['fue_ing_inf_lab'];
					$_POST['Informacionlaboral']['fue_ing_inf_lab'] = implode(',',$fuente);
					$model->attributes = $_POST['Informacionlaboral'];
					$this->validarDistribucion($_POST['Distribuciontiempo']);
					$this->validarDistribucion($_POST['Distribuciontiempo2']);	
						
					//print_r($model2->attributes);die;
					$this->validarForm($model);					
					
					if($model->save())
					{
						$this->salvarDistribucion($_POST['Distribuciontiempo']);
						$this->salvarDistribucion($_POST['Distribuciontiempo2']);
						$JSON['status'] = true;
						$JSON['cod_dp_enc'] = $model->cod_dp_enc;
						die(json_encode($JSON));
					}
				break;
			}
			
			
			if($model->save())
			{
				$JSON['status'] = true;
				$JSON['cod_dp_enc'] = $model->cod_dp_enc;
				die(json_encode($JSON));
			}
			
		} 
		catch (Exception $e) 
		{
			$JSON['error'] = 'Se produjo un error inesperado, es posible que ya haya realizado el registro';
			$JSON['error2']= $e->getMessage();
			die(json_encode($JSON));
		}
		
		
	}
	
	
	public function validarDistribucion(array $post)
	{
		$model = new Distribuciontiempo();
		$model->isNewRecord = true;
		$model->unsetAttributes();
		$model->attributes = $post;	
		
		$this->validarForm($model);
		
	}
	
	
	public function salvarDistribucion(array $post)
	{
		$model = new Distribuciontiempo();
		$model->salvarDistribucion('I', $post);
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Datosencuestado']))
		{
			$model->attributes=$_POST['Datosencuestado'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->cod_dp_enc));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Datosencuestado');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Datosencuestado('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Datosencuestado']))
			$model->attributes=$_GET['Datosencuestado'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Datosencuestado the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Datosencuestado::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Datosencuestado $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='datosencuestado-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
