<?php

class AsignacionviviendaController extends Controller
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
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Asignacionvivienda;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Asignacionvivienda']))
		{
			$model->attributes=$_POST['Asignacionvivienda'];
			if($model->save())
			{
				$this->operacionAsignacion($model->cod_pro,'+');
				$this->redirect(array('view','id'=>$model->cod_asi_viv));
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	
	
	public function actionListarjefefamiliar()
	{
		$criteria = new CDbCriteria;
		$criteria->select = "cod_dp_enc,ced_dp_enc ||'('||pri_nom_dp_enc||' '||pri_ape_dp_enc||')' AS pri_nom_dp_enc";
		//$criteria->condition = "ced_dp_enc = :term ";
		//$criteria->params = array(':term'=> $_GET['term']);
		
		$criteria->condition = "LOWER(ced_dp_enc::TEXT) like LOWER(:term) AND tip_per_dp_enc = 'JF'";
		$criteria->params = array(':term'=> '%'.$_GET['term'].'%');
		$criteria->limit = 30;
		$data = Datosencuestado::model()->findAll($criteria);
		$arr = array();
		foreach ($data as $item) {
			$arr[] = array(
					'id' => $item->cod_dp_enc,
					'value' => $item->pri_nom_dp_enc,
					'label' => $item->pri_nom_dp_enc,
			);
		}
		echo CJSON::encode($arr);
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

		if(isset($_POST['Asignacionvivienda']))
		{
			if($model->cod_pro != $_POST['Asignacionvivienda']['cod_pro'])
			{
				$this->operacionAsignacion($model->cod_pro,'-');
			}
			$model->attributes=$_POST['Asignacionvivienda'];
			if($model->save())
			{
				$this->operacionAsignacion($model->cod_pro,'+');
				$this->redirect(array('view','id'=>$model->cod_asi_viv));
			}
				
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	
	public function operacionAsignacion($id,$op)
	{
		$i = 1;
		$proyecto = Proyecto::model()->findByPk($id);
		$proyecto->viv_asi_pro = $proyecto->viv_asi_pro.' '.$op.' '.$i;
		$proyecto->save();
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
		$dataProvider=new CActiveDataProvider('Asignacionvivienda');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Asignacionvivienda('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Asignacionvivienda']))
			$model->attributes=$_GET['Asignacionvivienda'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Asignacionvivienda the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Asignacionvivienda::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Asignacionvivienda $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='asignacionvivienda-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
