<?php

/**
 * This is the model class for table "viviendo.mvv_situacion_politica".
 *
 * The followings are the available columns in table 'viviendo.mvv_situacion_politica':
 * @property integer $cod_dp_enc
 * @property string $reg_ele_sit_pol
 * @property string $par_pol_sit_pol
 * @property integer $cod_par_pol
 * @property string $otr_par_sit_pol
 * @property string $nom_cen_vot_sit_pol
 * @property string $cod_par
 * @property string $mie_mes_sit_pol
 * @property string $tes_mes_sit_pol
 * @property string $res_par_sit_pol
 * @property string $ins_sit_pol
 * @property string $des_res_sit_pol
 * @property string $niv_dir_sit_pol
 */
class Situacionpolitica extends CActiveRecord
{
	
	public $cod_edo;
	
	public $cod_mun;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Situacionpolitica the static model class
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
		return 'viviendo.mvv_situacion_politica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_dp_enc, reg_ele_sit_pol,cod_par', 'required'),
			array('cod_dp_enc, cod_par_pol', 'numerical', 'integerOnly'=>true),
			array('reg_ele_sit_pol, par_pol_sit_pol, mie_mes_sit_pol, tes_mes_sit_pol, res_par_sit_pol, niv_dir_sit_pol', 'length', 'max'=>1),
			array('otr_par_sit_pol, ins_sit_pol, des_res_sit_pol', 'length', 'max'=>60),
			array('nom_cen_vot_sit_pol', 'length', 'max'=>80),
			array('cod_par', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_dp_enc, reg_ele_sit_pol, par_pol_sit_pol, cod_par_pol, otr_par_sit_pol, nom_cen_vot_sit_pol, cod_par, mie_mes_sit_pol, tes_mes_sit_pol, res_par_sit_pol, ins_sit_pol, des_res_sit_pol, niv_dir_sit_pol', 'safe', 'on'=>'search'),
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
			'cod_dp_enc' => 'Codigo',
			'reg_ele_sit_pol' => '¿Esta Inscrito en el Registro Electoral?',
			'par_pol_sit_pol' => '¿Esta Inscrito en algun Partido Politico?',
			'cod_par_pol' => 'Partido Politico',
			'otr_par_sit_pol' => 'Otro Partido',
			'nom_cen_vot_sit_pol' => 'Nombre del Centro de Votacion',
			'cod_edo' => 'Estado',
			'cod_mun' => 'Municipio',
			'cod_par' => 'Parroquia',
			'mie_mes_sit_pol' => '¿Es o ha sido Miembro de Mesa?',
			'tes_mes_sit_pol' => '¿Es o ha sido Testigo de Mesa?',
			'res_par_sit_pol' => '¿Tiene alguna Responsabilidad en su Partido Politico?',
			'ins_sit_pol' => 'Indique Instancia',
			'des_res_sit_pol' => 'Indique Responsabilidad',
			'niv_dir_sit_pol' => 'Nivel de Direccion',
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

		$criteria->compare('cod_dp_enc',$this->cod_dp_enc);
		$criteria->compare('reg_ele_sit_pol',$this->reg_ele_sit_pol,true);
		$criteria->compare('par_pol_sit_pol',$this->par_pol_sit_pol,true);
		$criteria->compare('cod_par_pol',$this->cod_par_pol);
		$criteria->compare('otr_par_sit_pol',$this->otr_par_sit_pol,true);
		$criteria->compare('nom_cen_vot_sit_pol',$this->nom_cen_vot_sit_pol,true);
		$criteria->compare('cod_par',$this->cod_par,true);
		$criteria->compare('mie_mes_sit_pol',$this->mie_mes_sit_pol,true);
		$criteria->compare('tes_mes_sit_pol',$this->tes_mes_sit_pol,true);
		$criteria->compare('res_par_sit_pol',$this->res_par_sit_pol,true);
		$criteria->compare('ins_sit_pol',$this->ins_sit_pol,true);
		$criteria->compare('des_res_sit_pol',$this->des_res_sit_pol,true);
		$criteria->compare('niv_dir_sit_pol',$this->niv_dir_sit_pol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}