<?php

/**
 * This is the model class for table "persona_origen".
 *
 * The followings are the available columns in table 'persona_origen':
 *
 * @property string $desde
 * @property string $hasta
 *
 */
class Reportes extends CActiveRecord
{

	public $estado;
	public $cantidad;
	public $count;

	
	

        public function consolidado_proyectos()
        {

        	$sql="Select * from viviendo.v_consolidado_proyecto_por_estado";

            //$sql="Select * from vsw_consolidado_actualizado_estado";
            //print $sql;die;
            //$data = Operaciones::listarSQL($sql);
			$sqlProvider = new CSqlDataProvider($sql);
			$sqlProvider = $sqlProvider->getData();
			$sqlData = $sqlProvider;




			//$sql = 'Select * from vsw_consolidado_actualizado_estado';
			$sql2 = 'Select * from viviendo.v_consolidado_proyecto_por_estado';
 
			$rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
			$count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 
                   // 'totalItemCount' => $count,
 
                    //if the command above use PDO parameters
                    //'params'=>array(
                    //':param'=>$param,
                    //),
 
 
                    'sort' => array(
                        'attributes' => array(
                            'estado','valor_1', 'valor_2', 'valor_3'
                        ),
                        'defaultOrder' => array(
                            'estado' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 25,
                    ),
                ));
 

			//print_r($sqlData);die;
			return $model;
            
            
        }        

              

    


}
