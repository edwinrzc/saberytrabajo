<?php
Yii::import('zii.widgets.CPortlet');
	
class wEditorx  extends CPortlet { 

  public $id;
	

public function init()
	{
		$this->publishAssets();
	}
   	public function run(){ 	
 		
	$this->render('editorx',array(
		"id"=>$this->id,
			));
}

protected static function publishAssets()
	{
		//	Yii::app()->clientScript->registerCoreScript('jquery');
			//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/assetsEditor/jquery.js?tt');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/assetsEditor/jquery.wysiwyg.min.js?tt');
			Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/assetsEditor/jquery.wysiwyg.css');

	}
}
