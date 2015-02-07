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

    ////---------- CONSOLIDADO TENENCIAS DE TERRENO----------///

    public function consolidado_tenencia_terreno()
        {

            $sql="Select * from viviendo.v_consolidado_tenencia_terreno";


            $sqlProvider = new CSqlDataProvider($sql);
            $sqlProvider = $sqlProvider->getData();
            $sqlData = $sqlProvider;

            $sql2 = 'Select * from viviendo.v_consolidado_tenencia_terreno';
 
            $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
            $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

                    'sort' => array(
                        'attributes' => array(
                            'estado','propio', 'municipal'
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

    ////---------- CONSOLIDADO SERVICIO DE AGUA----------///

    public function consolidado_servicio_agua()
        {

            $sql="Select * from viviendo.v_consolidado_servicio_agua";


            $sqlProvider = new CSqlDataProvider($sql);
            $sqlProvider = $sqlProvider->getData();
            $sqlData = $sqlProvider;

            $sql2 = 'Select * from viviendo.v_consolidado_servicio_agua';
 
            $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
            $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

                    'sort' => array(
                        'attributes' => array(
                            'estado','si', 'noo'
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

   ////---------- CONSOLIDADO SERVICIO ELECTRICO----------///
        
    public function consolidado_servicio_electrico()
        {

            $sql="Select * from viviendo.v_consolidado_servicio_electrico";


            $sqlProvider = new CSqlDataProvider($sql);
            $sqlProvider = $sqlProvider->getData();
            $sqlData = $sqlProvider;

            $sql2 = 'Select * from viviendo.v_consolidado_servicio_electrico';
 
            $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
            $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
 
 
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'estado', 

                    'sort' => array(
                        'attributes' => array(
                            'estado','si', 'noo'
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
    
   ////---------- CONSOLIDADO SERVICIO ELECTRICO----------///

        public function consolidado_servicio_telefonico()
        {
        
        	$sql="Select * from viviendo.v_consolidado_servicio_telefonico";
        
        
        	$sqlProvider = new CSqlDataProvider($sql);
        	$sqlProvider = $sqlProvider->getData();
        	$sqlData = $sqlProvider;
        
        	$sql2 = 'Select * from viviendo.v_consolidado_servicio_telefonico';
        
        	$rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
        	$count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
        
        
        	$model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
        			'keyField' => 'estado',
        
        			'sort' => array(
        					'attributes' => array(
        							'estado','si', 'noo'
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
      
   ////---------- CONSOLIDADO SERVICIO DE INTERNET----------///
        
     public function consolidado_servicio_internet()
     {
        
        $sql="Select * from viviendo.v_consolidado_servicio_internet";
        
        
        $sqlProvider = new CSqlDataProvider($sql);
        $sqlProvider = $sqlProvider->getData();
        $sqlData = $sqlProvider;
        
        $sql2 = 'Select * from viviendo.v_consolidado_servicio_internet';
        
        $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
        $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
        
        
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
        		'keyField' => 'estado',
        
        		'sort' => array(
        				'attributes' => array(
        						'estado','si', 'noo'
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

  ////---------- CONSOLIDADO DE FAMILIAS POR SEXO----------///
        
        public function consolidado_sexo_familia()
        {
        
        $sql="Select * from viviendo.v_consolidado_sexo_familia";
        
        
        $sqlProvider = new CSqlDataProvider($sql);
        $sqlProvider = $sqlProvider->getData();
        $sqlData = $sqlProvider;
        
        $sql2 = 'Select * from viviendo.v_consolidado_sexo_familia';
        
        $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
        $count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
        
        
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
        		'keyField' => 'estado',
        
        		'sort' => array(
        				'attributes' => array(
        						'estado','femenino', 'masculino'
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

  ////---------- CONSOLIDADO DE EMPLEOS----------///

	public function consolidado_empleo_familia()
	{
	
		$sql="Select * from viviendo.v_consolidado_empleo_familia";
	
	
		$sqlProvider = new CSqlDataProvider($sql);
		$sqlProvider = $sqlProvider->getData();
		$sqlData = $sqlProvider;
	
		$sql2 = 'Select * from viviendo.v_consolidado_empleo_familia';
	
		$rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
		$count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
	
	
		$model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
				'keyField' => 'estado',
	
				'sort' => array(
						'attributes' => array(
								'estado','si', 'noo'
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

   ////---------- CONSOLIDADO ZONAS UBICACION----------///

	public function consolidado_zona_ubicacion()
	{

		$sql="Select * from viviendo.v_consolidado_zona_ubicacion";
	
	
		$sqlProvider = new CSqlDataProvider($sql);
		$sqlProvider = $sqlProvider->getData();
		$sqlData = $sqlProvider;
	
		$sql2 = 'Select * from viviendo.v_consolidado_zona_ubicacion';
	
		$rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
		$count = Yii::app()->db->createCommand($sql2)->queryScalar(); //the count
	
	
		$model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
				'keyField' => 'estado',
	
				'sort' => array(
						'attributes' => array(
								'estado','urbanizada', 'nourbanizada', 'rural'
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

}