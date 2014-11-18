<?php

class ViviendoController extends Controller
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
		/*return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);*/
		
		return array(
				//'accessControl', // perform access control for CRUD operations
				array('CrugeAccessControlFilter'),
		);
	}


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->render('menu');
	}

	
}
