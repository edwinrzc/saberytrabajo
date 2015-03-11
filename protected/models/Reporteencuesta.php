<?php

/**
 * This is the model class for table "public.v_reporte_encuesta".
*
* The followings are the available columns in table 'public.v_reporte_encuesta':
* @property integer $cod_dp_enc
* @property string $estado
* @property string $municipio
* @property string $parroquia
* @property string $dir_com_dp_enc
* @property string $sec_dp_enc
* @property string $pun_ref_dp_enc
* @property string $pri_nom_dp_enc
* @property string $seg_nom_dp_enc
* @property string $pri_ape_dp_enc
* @property string $seg_ape_dp_enc
* @property string $nac
* @property integer $ced_dp_enc
* @property string $nom_nac_enc
* @property string $sit_leg_dp_enc
* @property string $fec_nac_dp_enc
* @property double $edad
* @property string $lug_nac_dp_enc
* @property string $par_nac_dp_enc
* @property string $sex_dp_enc
* @property string $est_emb_dp_enc
* @property string $sem_emb_dp_enc
* @property string $asi_ctrl_emb_dp_enc
* @property integer $cod_est_civ
* @property string $es_ind_dp_enc
* @property string $nom_com_ind
* @property string $mail_dp_enc
* @property string $tel_hab_dp_enc
* @property string $tel_cel_dp_enc
* @property string $est_act_dp_enc
* @property string $tip_ins_dp_enc
* @property string $nom_mot_est
* @property string $nom_niv_ins
* @property string $tip_per_dp_enc
* @property string $fec_reg_dp_enc
* @property string $nom_car_est
* @property string $ult_gra_cur_dp_enc
* @property string $tit_obt_dp_enc
* @property string $fam_pri_lib_dp_enc
* @property string $nom_par_fam
* @property string $nom_cen_pen
* @property string $org_soc_dp_enc
* @property string $nom_org_soc
* @property string $mis_soc_dp_enc
* @property string $nom_mis_soc
* @property string $nomjefe
*/
class Reporteencuesta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'public.v_reporte_encuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('cod_dp_enc, ced_dp_enc, cod_est_civ', 'numerical', 'integerOnly'=>true),
				array('edad', 'numerical'),
				array('estado', 'length', 'max'=>20),
				array('municipio, parroquia, nom_nac_enc, lug_nac_dp_enc, nom_com_ind, nom_niv_ins', 'length', 'max'=>50),
				array('dir_com_dp_enc, nom_mot_est', 'length', 'max'=>150),
				array('sec_dp_enc, pun_ref_dp_enc', 'length', 'max'=>80),
				array('pri_nom_dp_enc, seg_nom_dp_enc, pri_ape_dp_enc, seg_ape_dp_enc, nom_car_est', 'length', 'max'=>40),
				array('mail_dp_enc', 'length', 'max'=>100),
				array('tel_hab_dp_enc, tel_cel_dp_enc', 'length', 'max'=>16),
				array('ult_gra_cur_dp_enc', 'length', 'max'=>11),
				array('tit_obt_dp_enc, nom_par_fam, nom_cen_pen, nom_org_soc', 'length', 'max'=>60),
				array('nom_mis_soc', 'length', 'max'=>70),
				array('nac, sit_leg_dp_enc, fec_nac_dp_enc, par_nac_dp_enc, sex_dp_enc, est_emb_dp_enc, sem_emb_dp_enc, asi_ctrl_emb_dp_enc, es_ind_dp_enc, est_act_dp_enc, tip_ins_dp_enc, tip_per_dp_enc, fec_reg_dp_enc, fam_pri_lib_dp_enc, org_soc_dp_enc, mis_soc_dp_enc, nomjefe', 'safe'),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be searched.
				array('cod_dp_enc, estado, municipio, parroquia, dir_com_dp_enc, sec_dp_enc, pun_ref_dp_enc, pri_nom_dp_enc, seg_nom_dp_enc, pri_ape_dp_enc, seg_ape_dp_enc, nac, ced_dp_enc, nom_nac_enc, sit_leg_dp_enc, fec_nac_dp_enc, edad, lug_nac_dp_enc, par_nac_dp_enc, sex_dp_enc, est_emb_dp_enc, sem_emb_dp_enc, asi_ctrl_emb_dp_enc, cod_est_civ, es_ind_dp_enc, nom_com_ind, mail_dp_enc, tel_hab_dp_enc, tel_cel_dp_enc, est_act_dp_enc, tip_ins_dp_enc, nom_mot_est, nom_niv_ins, tip_per_dp_enc, fec_reg_dp_enc, nom_car_est, ult_gra_cur_dp_enc, tit_obt_dp_enc, fam_pri_lib_dp_enc, nom_par_fam, nom_cen_pen, org_soc_dp_enc, nom_org_soc, mis_soc_dp_enc, nom_mis_soc, nomjefe', 'safe', 'on'=>'search'),
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
				'estado' => 'Estado',
				'municipio' => 'Municipio',
				'parroquia' => 'Parroquia',
				'dir_com_dp_enc' => 'Direccion Completa',
				'sec_dp_enc' => 'Sector',
				'pun_ref_dp_enc' => 'Punto de Referencia',
				'pri_nom_dp_enc' => 'Primer Nombre',
				'seg_nom_dp_enc' => 'Segundo Nombre',
				'pri_ape_dp_enc' => 'Primer Apellido',
				'seg_ape_dp_enc' => 'Segundo Apellido',
				'nac' => 'Nacionalidad',
				'ced_dp_enc' => 'Cedula',
				'nom_nac_enc' => 'Nom Nac Enc',
				'sit_leg_dp_enc' => 'Situacion Legal',
				'fec_nac_dp_enc' => 'Fecha de Nacimiento',
				'edad' => 'Edad',
				'lug_nac_dp_enc' => 'Lugar de Nacimiento',
				'par_nac_dp_enc' => 'Partida de Nacimiento',
				'sex_dp_enc' => 'Sexo',
				'est_emb_dp_enc' => 'Est Emb Dp Enc',
				'sem_emb_dp_enc' => 'Sem Emb Dp Enc',
				'asi_ctrl_emb_dp_enc' => 'Asi Ctrl Emb Dp Enc',
				'cod_est_civ' => 'Cod Est Civ',
				'es_ind_dp_enc' => 'Es Ind Dp Enc',
				'nom_com_ind' => 'Nom Com Ind',
				'mail_dp_enc' => 'Mail Dp Enc',
				'tel_hab_dp_enc' => 'Tel Hab Dp Enc',
				'tel_cel_dp_enc' => 'Tel Cel Dp Enc',
				'est_act_dp_enc' => 'Est Act Dp Enc',
				'tip_ins_dp_enc' => 'Tip Ins Dp Enc',
				'nom_mot_est' => 'Nom Mot Est',
				'nom_niv_ins' => 'Nom Niv Ins',
				'tip_per_dp_enc' => 'Tip Per Dp Enc',
				'fec_reg_dp_enc' => 'Fec Reg Dp Enc',
				'nom_car_est' => 'Nom Car Est',
				'ult_gra_cur_dp_enc' => 'Ult Gra Cur Dp Enc',
				'tit_obt_dp_enc' => 'Tit Obt Dp Enc',
				'fam_pri_lib_dp_enc' => 'Fam Pri Lib Dp Enc',
				'nom_par_fam' => 'Nom Par Fam',
				'nom_cen_pen' => 'Nom Cen Pen',
				'org_soc_dp_enc' => 'Org Soc Dp Enc',
				'nom_org_soc' => 'Nom Org Soc',
				'mis_soc_dp_enc' => 'Mis Soc Dp Enc',
				'nom_mis_soc' => 'Nom Mis Soc',
				'nomjefe' => 'Nomjefe',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cod_dp_enc',$this->cod_dp_enc);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('parroquia',$this->parroquia,true);
		$criteria->compare('dir_com_dp_enc',$this->dir_com_dp_enc,true);
		$criteria->compare('sec_dp_enc',$this->sec_dp_enc,true);
		$criteria->compare('pun_ref_dp_enc',$this->pun_ref_dp_enc,true);
		$criteria->compare('pri_nom_dp_enc',$this->pri_nom_dp_enc,true);
		$criteria->compare('seg_nom_dp_enc',$this->seg_nom_dp_enc,true);
		$criteria->compare('pri_ape_dp_enc',$this->pri_ape_dp_enc,true);
		$criteria->compare('seg_ape_dp_enc',$this->seg_ape_dp_enc,true);
		$criteria->compare('nac',$this->nac,true);
		$criteria->compare('ced_dp_enc',$this->ced_dp_enc);
		$criteria->compare('nom_nac_enc',$this->nom_nac_enc,true);
		$criteria->compare('sit_leg_dp_enc',$this->sit_leg_dp_enc,true);
		$criteria->compare('fec_nac_dp_enc',$this->fec_nac_dp_enc,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('lug_nac_dp_enc',$this->lug_nac_dp_enc,true);
		$criteria->compare('par_nac_dp_enc',$this->par_nac_dp_enc,true);
		$criteria->compare('sex_dp_enc',$this->sex_dp_enc,true);
		$criteria->compare('est_emb_dp_enc',$this->est_emb_dp_enc,true);
		$criteria->compare('sem_emb_dp_enc',$this->sem_emb_dp_enc,true);
		$criteria->compare('asi_ctrl_emb_dp_enc',$this->asi_ctrl_emb_dp_enc,true);
		$criteria->compare('cod_est_civ',$this->cod_est_civ);
		$criteria->compare('es_ind_dp_enc',$this->es_ind_dp_enc,true);
		$criteria->compare('nom_com_ind',$this->nom_com_ind,true);
		$criteria->compare('mail_dp_enc',$this->mail_dp_enc,true);
		$criteria->compare('tel_hab_dp_enc',$this->tel_hab_dp_enc,true);
		$criteria->compare('tel_cel_dp_enc',$this->tel_cel_dp_enc,true);
		$criteria->compare('est_act_dp_enc',$this->est_act_dp_enc,true);
		$criteria->compare('tip_ins_dp_enc',$this->tip_ins_dp_enc,true);
		$criteria->compare('nom_mot_est',$this->nom_mot_est,true);
		$criteria->compare('nom_niv_ins',$this->nom_niv_ins,true);
		$criteria->compare('tip_per_dp_enc',$this->tip_per_dp_enc,true);
		$criteria->compare('fec_reg_dp_enc',$this->fec_reg_dp_enc,true);
		$criteria->compare('nom_car_est',$this->nom_car_est,true);
		$criteria->compare('ult_gra_cur_dp_enc',$this->ult_gra_cur_dp_enc,true);
		$criteria->compare('tit_obt_dp_enc',$this->tit_obt_dp_enc,true);
		$criteria->compare('fam_pri_lib_dp_enc',$this->fam_pri_lib_dp_enc,true);
		$criteria->compare('nom_par_fam',$this->nom_par_fam,true);
		$criteria->compare('nom_cen_pen',$this->nom_cen_pen,true);
		$criteria->compare('org_soc_dp_enc',$this->org_soc_dp_enc,true);
		$criteria->compare('nom_org_soc',$this->nom_org_soc,true);
		$criteria->compare('mis_soc_dp_enc',$this->mis_soc_dp_enc,true);
		$criteria->compare('nom_mis_soc',$this->nom_mis_soc,true);
		$criteria->compare('nomjefe',$this->nomjefe,true);

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reporteencuesta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}