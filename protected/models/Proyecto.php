<?php

/**
 * This is the model class for table "viviendo.mvv_proyecto".
 *
 * The followings are the available columns in table 'viviendo.mvv_proyecto':
 * @property integer $cod_pro
 * @property string $nom_pro
 * @property string $cod_edo
 * @property string $cod_mun
 * @property string $cod_par
 * @property string $sec_pro
 * @property string $dir_exa_pro
 * @property string $pun_ref_pro
 * @property integer $viv_asi_pro
 * @property string $obs_pro
 * @property integer $num_viv_ais_pro
 * @property integer $num_viv_con_pro
 * @property string $num_viv_est_met_pro
 * @property string $num_viv_est_tra_pro
 * @property string $num_viv_est_mix_pro
 * @property string $est_pro
 * @property string $the_geom
 * @property string $cod_pdvsa_pro
 * @property string $fec_reg_pro
 */
class Proyecto extends CActiveRecord
{
	
	public $lon_pro;
	
	public $lat_pro;
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proyecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'viviendo.mvv_proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_pro, cod_edo', 'required'),
			array('viv_asi_pro, num_viv_ais_pro, num_viv_con_pro', 'numerical', 'integerOnly'=>true),
			array('nom_pro, sec_pro, dir_exa_pro, pun_ref_pro', 'length', 'max'=>100),
			array('cod_pdvsa_pro','unique'),
			array('cod_edo', 'length', 'max'=>2),
			array('cod_mun', 'length', 'max'=>4),
			array('cod_par, cod_pdvsa_pro', 'length', 'max'=>6),
			array('est_pro', 'length', 'max'=>1),
			array('lon_pro,lat_pro','numerical'),
			array('obs_pro, num_viv_est_met_pro, num_viv_est_tra_pro, num_viv_est_mix_pro, the_geom, fec_reg_pro', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_pro, nom_pro, cod_edo, cod_mun, cod_par, sec_pro, dir_exa_pro, pun_ref_pro, viv_asi_pro, obs_pro, num_viv_ais_pro, num_viv_con_pro, num_viv_est_met_pro, num_viv_est_tra_pro, num_viv_est_mix_pro, est_pro, the_geom, cod_pdvsa_pro, fec_reg_pro', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_pro' => 'Codigo',
			'nom_pro' => 'Nombre del Proyecto',
			'cod_edo' => 'Estado',
			'cod_mun' => 'Municipio',
			'cod_par' => 'Parroquia',
			'sec_pro' => 'Sector',
			'dir_exa_pro' => 'Direccion Exacta',
			'pun_ref_pro' => 'Punto de Referencia',
			'viv_asi_pro' => 'Viviendas Asignadas',
			'obs_pro' => 'Observacion',
			'num_viv_ais_pro' => 'Aisladas',
			'num_viv_con_pro' => 'Concentradas',
			'num_viv_est_met_pro' => 'Metalica',
			'num_viv_est_tra_pro' => 'Tradicional',
			'num_viv_est_mix_pro' => 'Mixta',
			'est_pro' => 'Status de Proyecto',
			'the_geom' => 'The Geom',
			'cod_pdvsa_pro' => 'Codigo PDVSA',
			'fec_reg_pro' => 'Fecha de Registro',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cod_pro',$this->cod_pro);
		$criteria->compare('nom_pro',$this->nom_pro,true);
		$criteria->compare('cod_edo',$this->cod_edo,true);
		$criteria->compare('cod_mun',$this->cod_mun,true);
		$criteria->compare('cod_par',$this->cod_par,true);
		$criteria->compare('sec_pro',$this->sec_pro,true);
		$criteria->compare('dir_exa_pro',$this->dir_exa_pro,true);
		$criteria->compare('pun_ref_pro',$this->pun_ref_pro,true);
		$criteria->compare('viv_asi_pro',$this->viv_asi_pro);
		$criteria->compare('obs_pro',$this->obs_pro,true);
		$criteria->compare('num_viv_ais_pro',$this->num_viv_ais_pro);
		$criteria->compare('num_viv_con_pro',$this->num_viv_con_pro);
		$criteria->compare('num_viv_est_met_pro',$this->num_viv_est_met_pro,true);
		$criteria->compare('num_viv_est_tra_pro',$this->num_viv_est_tra_pro,true);
		$criteria->compare('num_viv_est_mix_pro',$this->num_viv_est_mix_pro,true);
		$criteria->compare('est_pro',$this->est_pro,true);
		$criteria->compare('the_geom',$this->the_geom,true);
		$criteria->compare('cod_pdvsa_pro',$this->cod_pdvsa_pro,true);
		$criteria->compare('fec_reg_pro',$this->fec_reg_pro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	
	
	public function registraGeometria($longitud,$latitud,$codPro,$accion)
	{
		
		
		try 
		{
			$geometry = "null";
			$the_geom = "";
			if(!empty($longitud) && !empty($latitud))
			{
				$the_geom = $longitud.' '. $latitud;
				$geometry = "ST_GeomFromText('POINT($the_geom)',4326)";
			}
			
			switch ($accion)
			{
				case 'U':
					$sql = "UPDATE viviendo.mvv_proyecto
					SET the_geom = $geometry
					WHERE cod_pro=$codPro;";
					break;
			}
			
			
			return Operaciones::consultarSQL($sql);
		} 
		catch (Exception $e) 
		{
			die('La base de datos devolvio: '.$e->getMessage());
		}
		
	}
	
	
	
	public function longitdLatitud($idPro)
	{
		if(is_numeric($idPro))
		{
			$sql = "SELECT ST_X(the_geom) AS lon_pro,ST_Y(the_geom) AS lat_pro
			FROM viviendo.mvv_proyecto WHERE cod_pro = $idPro;";
			return Operaciones::consultarSQL($sql);
		}
	
	}
	
	
}