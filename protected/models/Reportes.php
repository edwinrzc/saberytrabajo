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

    ////---------- CONSOLIDADO DE PROYECTOS ----------///

    public function consolidado_proyectos()
        {

        	$sql="Select * from viviendo.v_consolidado_proyecto_por_estado";


			$sqlProvider = new CSqlDataProvider($sql);
			$sqlProvider = $sqlProvider->getData();
			$sqlData = $sqlProvider;

			$sql2 = 'Select * from viviendo.v_consolidado_proyecto_por_estado';
 
			$rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
			$count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

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

    ////--------- FIN CONSOLIDADO -------------////

    ////---------- CONSOLIDADO DE PROYECTOS POR ESTATUS----------///

    public function consolidado_proyectos_estatus()
        {

            $sql="Select * from viviendo.v_consolidado_proyecto_por_estatus";


            $sqlProvider = new CSqlDataProvider($sql);
            $sqlProvider = $sqlProvider->getData();
            $sqlData = $sqlProvider;

            $sql2 = 'Select * from viviendo.v_consolidado_proyecto_por_estatus';
 
            $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
            $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

                    'sort' => array(
                        'attributes' => array(
                            'estado','valor_1', 'valor_2', 'valor_3'
                        ),
                        'defaultOrder' => array(
                            'estado' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 26,
                    ),
                ));
 

            //print_r($sqlData);die;
            return $model;
        }       

    ////--------- FIN CONSOLIDADO -------------////

    ////---------- CONSOLIDADO DE TIPO DE VIVIENDAS----------///

    public function consolidado_tipo_vivienda()
        {

            $sql="Select * from viviendo.v_consolidado_tipo_vivienda";


            $sqlProvider = new CSqlDataProvider($sql);
            $sqlProvider = $sqlProvider->getData();
            $sqlData = $sqlProvider;

            $sql2 = 'Select * from viviendo.v_consolidado_tipo_vivienda';
 
            $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
            $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

                    'sort' => array(
                        'attributes' => array(
                            'estado','total_casa', 'total_apto', 'total_quinta', 'total_rancho', 'total_refugio', 'total_otro'
                        ),
                        'defaultOrder' => array(
                            'estado' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 26,
                    ),
                ));
 

            //print_r($sqlData);die;
            return $model;
        }       

    ////--------- FIN CONSOLIDADO -------------////

    ////---------- CONSOLIDADO TENENCIA DE VIVIENDA----------///

    public function consolidado_tenencia_vivienda()
        {

            $sql="Select * from viviendo.v_consolidado_tenencia_vivienda";


            $sqlProvider = new CSqlDataProvider($sql);
            $sqlProvider = $sqlProvider->getData();
            $sqlData = $sqlProvider;

            $sql2 = 'Select * from viviendo.v_consolidado_tenencia_vivienda';
 
            $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
            $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

                    'sort' => array(
                        'attributes' => array(
                            'estado','total_propia', 'total_alquilada', 'total_pagandose', 'total_conserje', 'total_cuidando', 'total_prestada',
                            'total_invadida', 'total_comodato', 'total_alojamiento'
                        ),
                        'defaultOrder' => array(
                            'estado' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 26,
                    ),
                ));
 

            //print_r($sqlData);die;
            return $model;
        }       

    ////--------- FIN CONSOLIDADO -------------////
/*
    ////---------- CONSOLIDADO TENENCIAS DE VIVIENDAS----------///

    public function consolidado_proyectos_estatus()
        {

            $sql="Select * from viviendo.v_consolidado_proyecto_por_estatus";


            $sqlProvider = new CSqlDataProvider($sql);
            $sqlProvider = $sqlProvider->getData();
            $sqlData = $sqlProvider;

            $sql2 = 'Select * from viviendo.v_consolidado_proyecto_por_estatus';
 
            $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
            $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

                    'sort' => array(
                        'attributes' => array(
                            'estado','valor_1', 'valor_2', 'valor_3'
                        ),
                        'defaultOrder' => array(
                            'estado' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 26,
                    ),
                ));
 

            //print_r($sqlData);die;
            return $model;
        }       

    ////--------- FIN CONSOLIDADO -------------////

    ////---------- CONSOLIDADO TENENCIAS DEL TERRENO----------///

    public function consolidado_proyectos_estatus()
        {

            $sql="Select * from viviendo.v_consolidado_proyecto_por_estatus";


            $sqlProvider = new CSqlDataProvider($sql);
            $sqlProvider = $sqlProvider->getData();
            $sqlData = $sqlProvider;

            $sql2 = 'Select * from viviendo.v_consolidado_proyecto_por_estatus';
 
            $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
            $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

                    'sort' => array(
                        'attributes' => array(
                            'estado','valor_1', 'valor_2', 'valor_3'
                        ),
                        'defaultOrder' => array(
                            'estado' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 26,
                    ),
                ));
 

            //print_r($sqlData);die;
            return $model;
        }       

    ////--------- FIN CONSOLIDADO -------------////

*/
}
