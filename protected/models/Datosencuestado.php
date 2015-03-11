<?php

/**
 * This is the model class for table "viviendo.mvv_dp_encuestado".
 *
 * The followings are the available columns in table 'viviendo.mvv_dp_encuestado':
 * @property integer $cod_dp_enc
 * @property string $cod_par
 * @property string $dir_com_dp_enc
 * @property string $sec_dp_enc
 * @property string $pun_ref_dp_enc
 * @property string $pri_nom_dp_enc
 * @property string $seg_nom_dp_enc
 * @property string $pri_ape_dp_enc
 * @property string $seg_ape_dp_enc
 * @property string $nac_dp_enc
 * @property integer $ced_dp_enc
 * @property integer $cod_nac_enc
 * @property string $sit_leg_dp_enc
 * @property string $fec_nac_dp_enc
 * @property string $lug_nac_dp_enc
 * @property string $par_nac_dp_enc
 * @property string $sex_dp_enc
 * @property string $est_emb_dp_enc
 * @property string $sem_emb_dp_enc
 * @property string $asi_ctrl_emb_dp_enc
 * @property integer $cod_est_civ
 * @property string $es_ind_dp_enc
 * @property integer $cod_com_ind
 * @property string $mail_dp_enc
 * @property string $tel_hab_dp_enc
 * @property string $tel_cel_dp_enc
 * @property string $est_act_dp_enc
 * @property string $tip_ins_dp_enc
 * @property integer $cod_mot_est
 * @property integer $cod_niv_ins
 * @property string $tip_per_dp_enc
 * @property integer $cod_est_per_dp_enc
 * @property string $fec_reg_dp_enc
 * @property integer $cod_car_est
 * @property string $ult_gra_cur_dp_enc
 * @property string $tit_obt_dp_enc
 * @property string $fam_pri_lib_dp_enc
 * @property integer $cod_par_fam
 * @property integer $cod_cen_pen
 * @property string $org_soc_dp_enc
 * @property integer $cod_org_soc
 * @property string $mis_soc_dp_enc
 * @property integer $cod_mis_soc
 * @property integer $cod_jef_fam_dp_enc
 * @property integer $cod_par_jef_fam_dp_enc
 * @property integer $gru_fam_dp_enc
 */
class Datosencuestado extends CActiveRecord
{
	
	public $cod_edo;
	
	public $cod_mun;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Datosencuestado the static model class
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
		return 'viviendo.mvv_dp_encuestado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.		
		
		return array(
				array('cod_par,pri_nom_dp_enc, pri_ape_dp_enc, nac_dp_enc, ced_dp_enc, cod_nac_enc', 'required'),
				array('ced_dp_enc, cod_nac_enc, cod_est_civ, cod_com_ind, cod_mot_est, cod_niv_ins, cod_est_per_dp_enc, cod_car_est, cod_par_fam, cod_cen_pen, cod_org_soc, cod_mis_soc, cod_jef_fam_dp_enc, cod_par_jef_fam_dp_enc,gru_fam_dp_enc', 'numerical', 'integerOnly'=>true),
				array('cod_par', 'length', 'max'=>6),
				array('dir_com_dp_enc', 'length', 'max'=>150),
				array('sec_dp_enc, pun_ref_dp_enc', 'length', 'max'=>80),
				array('pri_nom_dp_enc, seg_nom_dp_enc, pri_ape_dp_enc, seg_ape_dp_enc', 'length', 'max'=>40),
				array('nac_dp_enc, par_nac_dp_enc, sex_dp_enc, est_emb_dp_enc, asi_ctrl_emb_dp_enc, es_ind_dp_enc, est_act_dp_enc, fam_pri_lib_dp_enc, org_soc_dp_enc, mis_soc_dp_enc', 'length', 'max'=>1),
				array('es_ind_dp_enc,est_emb_dp_enc,asi_ctrl_emb_dp_enc,fam_pri_lib_dp_enc,est_act_dp_enc', 'default', 'value'=>'N'),
				array('cod_nac_enc, cod_est_civ, cod_com_ind, cod_mot_est, cod_niv_ins, cod_est_per_dp_enc, cod_car_est, cod_par_fam, cod_cen_pen, cod_org_soc, cod_mis_soc, cod_jef_fam_dp_enc, cod_par_jef_fam_dp_enc', 'default', 'value'=>NULL),
				array('sit_leg_dp_enc', 'length', 'max'=>3),
				array('lug_nac_dp_enc', 'length', 'max'=>50),
				array('mail_dp_enc', 'length', 'max'=>100),
				array('tel_hab_dp_enc, tel_cel_dp_enc', 'length', 'max'=>16),
				array('tip_ins_dp_enc, tip_per_dp_enc,gru_fam_dp_enc', 'length', 'max'=>2),
				array('ult_gra_cur_dp_enc', 'length', 'max'=>11),
				array('tit_obt_dp_enc', 'length', 'max'=>60),
				array('fec_nac_dp_enc, sem_emb_dp_enc, fec_reg_dp_enc', 'safe'),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array('cod_dp_enc, cod_par, dir_com_dp_enc, sec_dp_enc, pun_ref_dp_enc, pri_nom_dp_enc, seg_nom_dp_enc, pri_ape_dp_enc, seg_ape_dp_enc, nac_dp_enc, ced_dp_enc, cod_nac_enc, sit_leg_dp_enc, fec_nac_dp_enc, lug_nac_dp_enc, par_nac_dp_enc, sex_dp_enc, est_emb_dp_enc, sem_emb_dp_enc, asi_ctrl_emb_dp_enc, cod_est_civ, es_ind_dp_enc, cod_com_ind, mail_dp_enc, tel_hab_dp_enc, tel_cel_dp_enc, est_act_dp_enc, tip_ins_dp_enc, cod_mot_est, cod_niv_ins, tip_per_dp_enc, cod_est_per_dp_enc, fec_reg_dp_enc, cod_car_est, ult_gra_cur_dp_enc, tit_obt_dp_enc, fam_pri_lib_dp_enc, cod_par_fam, cod_cen_pen, org_soc_dp_enc, cod_org_soc, mis_soc_dp_enc, cod_mis_soc, cod_jef_fam_dp_enc, cod_par_jef_fam_dp_enc,gru_fam_dp_enc', 'safe', 'on'=>'search'),
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
				'jefe'=>array(self::BELONGS_TO, 'Datosencuestado', 'cod_dp_enc'),
				'nacionalidad' => array(self::BELONGS_TO, 'Nacionalidades', 'cod_nac_enc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_dp_enc' => 'Codigo',
			'cod_edo' => 'Estado',
			'cod_mun' => 'Municipio',
			'cod_par' => 'Parroquia',
			'dir_com_dp_enc' => 'Direccion Completa',
			'sec_dp_enc' => 'Sector',
			'pun_ref_dp_enc' => 'Punto de Referencia',
			'pri_nom_dp_enc' => 'Primer Nombre',
			'seg_nom_dp_enc' => 'Segundo Nombre',
			'pri_ape_dp_enc' => 'Primer Apellido',
			'seg_ape_dp_enc' => 'Segundo Apellido',
			'nac_dp_enc' => 'Nac',
			'ced_dp_enc' => 'Cedula',
			'cod_nac_enc' => 'Nacionalidad',
			'sit_leg_dp_enc' => 'Situacion Legal',
			'fec_nac_dp_enc' => 'Fecha de Nacimiento',
			'lug_nac_dp_enc' => 'Lugar Nacimiento',
			'par_nac_dp_enc' => 'Partida de Nacimiento',
			'sex_dp_enc' => 'Sexo',
			'est_emb_dp_enc' => 'Se encuentra embarazada',
			'sem_emb_dp_enc' => 'Semanas de Embarazada',
			'asi_ctrl_emb_dp_enc' => 'Asiste a Control Prenatal',
			'cod_est_civ' => 'Estado Civil',
			'es_ind_dp_enc' => 'Es Indigena',
			'cod_com_ind' => 'Comunidad Indigena',
			'mail_dp_enc' => 'Correo Electronico',
			'tel_hab_dp_enc' => 'Tel. Habitacion',
			'tel_cel_dp_enc' => 'Celular',
			'est_act_dp_enc' => 'Estudia Actualmente',
			'tip_ins_dp_enc' => 'Tipo de Institucion',
			'cod_mot_est' => 'Motivo de no Estudio',
			'cod_niv_ins' => 'Nivel de Instrucci�n',
			'tip_per_dp_enc' => 'Tipo Persona Encuestada',
			'cod_est_per_dp_enc' => 'Cod Est Per Dp Enc',
			'fec_reg_dp_enc' => 'Fecha de Registro',
			'cod_car_est' => 'Carrera de Estudio',
			'ult_gra_cur_dp_enc' => 'Ultimo A�o Cursado',
			'tit_obt_dp_enc' => 'Titulo Obtenido',
			'fam_pri_lib_dp_enc' => 'Familiar Privado de Libertad',
			'cod_par_fam' => 'Parentesco',
			'cod_cen_pen' => 'Centro Penitenciario',
			'org_soc_dp_enc' => 'Pertenece a una Organizacion',
			'cod_org_soc' => 'Organizacion Social',
			'mis_soc_dp_enc' => 'Pertenece a una Mision',
			'cod_mis_soc' => 'Mision Social',
			'cod_jef_fam_dp_enc' => 'Jefe de Familia',
			'cod_par_jef_fam_dp_enc' => 'Parentesco Familiar',
			'gru_fam_dp_enc'=>'Grupo Familiar',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($tipo = 0,$id = false)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cod_dp_enc',$this->cod_dp_enc);
		$criteria->compare('cod_par',$this->cod_par,true);
		$criteria->compare('dir_com_dp_enc',$this->dir_com_dp_enc,true);
		$criteria->compare('sec_dp_enc',$this->sec_dp_enc,true);
		$criteria->compare('pun_ref_dp_enc',$this->pun_ref_dp_enc,true);
		$criteria->compare('pri_nom_dp_enc',$this->pri_nom_dp_enc,true);
		$criteria->compare('seg_nom_dp_enc',$this->seg_nom_dp_enc,true);
		$criteria->compare('pri_ape_dp_enc',$this->pri_ape_dp_enc,true);
		$criteria->compare('seg_ape_dp_enc',$this->seg_ape_dp_enc,true);
		$criteria->compare('nac_dp_enc',$this->nac_dp_enc,true);
		$criteria->compare('ced_dp_enc',$this->ced_dp_enc);
		$criteria->compare('cod_nac_enc',$this->cod_nac_enc);
		$criteria->compare('sit_leg_dp_enc',$this->sit_leg_dp_enc,true);
		$criteria->compare('fec_nac_dp_enc',$this->fec_nac_dp_enc,true);
		$criteria->compare('lug_nac_dp_enc',$this->lug_nac_dp_enc,true);
		$criteria->compare('par_nac_dp_enc',$this->par_nac_dp_enc,true);
		$criteria->compare('sex_dp_enc',$this->sex_dp_enc,true);
		$criteria->compare('est_emb_dp_enc',$this->est_emb_dp_enc,true);
		$criteria->compare('sem_emb_dp_enc',$this->sem_emb_dp_enc,true);
		$criteria->compare('asi_ctrl_emb_dp_enc',$this->asi_ctrl_emb_dp_enc,true);
		$criteria->compare('cod_est_civ',$this->cod_est_civ);
		$criteria->compare('es_ind_dp_enc',$this->es_ind_dp_enc,true);
		$criteria->compare('cod_com_ind',$this->cod_com_ind);
		$criteria->compare('mail_dp_enc',$this->mail_dp_enc,true);
		$criteria->compare('tel_hab_dp_enc',$this->tel_hab_dp_enc,true);
		$criteria->compare('tel_cel_dp_enc',$this->tel_cel_dp_enc,true);
		$criteria->compare('est_act_dp_enc',$this->est_act_dp_enc,true);
		$criteria->compare('tip_ins_dp_enc',$this->tip_ins_dp_enc,true);
		$criteria->compare('cod_mot_est',$this->cod_mot_est);
		$criteria->compare('cod_niv_ins',$this->cod_niv_ins);
		$criteria->compare('tip_per_dp_enc',$this->tip_per_dp_enc,true);
		$criteria->compare('cod_est_per_dp_enc',$this->cod_est_per_dp_enc);
		$criteria->compare('fec_reg_dp_enc',$this->fec_reg_dp_enc,true);
		$criteria->compare('cod_car_est',$this->cod_car_est);
		$criteria->compare('ult_gra_cur_dp_enc',$this->ult_gra_cur_dp_enc,true);
		$criteria->compare('tit_obt_dp_enc',$this->tit_obt_dp_enc,true);
		$criteria->compare('fam_pri_lib_dp_enc',$this->fam_pri_lib_dp_enc,true);
		$criteria->compare('cod_par_fam',$this->cod_par_fam);
		$criteria->compare('cod_cen_pen',$this->cod_cen_pen);
		$criteria->compare('org_soc_dp_enc',$this->org_soc_dp_enc,true);
		$criteria->compare('cod_org_soc',$this->cod_org_soc);
		$criteria->compare('mis_soc_dp_enc',$this->mis_soc_dp_enc,true);
		$criteria->compare('cod_mis_soc',$this->cod_mis_soc);
		$criteria->compare('cod_jef_fam_dp_enc',$this->cod_jef_fam_dp_enc);
		$criteria->compare('cod_par_jef_fam_dp_enc',$this->cod_par_jef_fam_dp_enc);
		$criteria->compare('gru_fam_dp_enc',$this->gru_fam_dp_enc);
		
		switch($tipo)
		{
			case 0:
				$criteria->condition="tip_per_dp_enc = 'JF' ";
			break;
			case 1:
				$criteria->condition="tip_per_dp_enc = 'GF' AND cod_jef_fam_dp_enc = $id";
			break;
		}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	
	
	public function incrementarGrupofamiliar($id)
	{
		$sql = '';
		$num = '';
		
		if(!empty($id))
		{
			$sql = "SELECT gru_fam_dp_enc FROM viviendo.mvv_dp_encuestado 
					WHERE cod_dp_enc = $id;";
			
			$num = Operaciones::consultarSQL($sql);
			//print_r($num);die;
			
			if(count($num)>0)
			{
				$num = $num['gru_fam_dp_enc'] + 1;
					
				$sql = "UPDATE viviendo.mvv_dp_encuestado
				SET gru_fam_dp_enc = $num
				WHERE cod_dp_enc = $id;";
					
				return Operaciones::ejecutarSQL($sql);
			}
			
		}
	}
	
	
	public function verificaDatos($id,$usu)
	{
		$sql = '';
		
		if(!empty($id) && !empty($usu))
		{
			$sql = "SELECT f_verificaDatos ($id, '".$usu."')";
			Operaciones::ejecutarSQL($sql);
		}
	}
	
	public function nombre_estado() {
		$data= Parroquial::model()->findByAttributes(array('id'=>$this->cod_par));
		return $data['estado'];
	}
}