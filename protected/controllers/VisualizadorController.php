<?php
class VisualizadorController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	
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
	
	
	public function actionIndex()
	{
		$this->renderPartial('index');
	}
	
	public function actionProxy($url)
	{
		
		$get = $_REQUEST;
		$this->render('proxy',array('get'=>$get));
	}
}