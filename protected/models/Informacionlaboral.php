<?php

/**
 * This is the model class for table "viviendo.mvv_informacion_laboral".
 *
 * The followings are the available columns in table 'viviendo.mvv_informacion_laboral':
 * @property integer $cod_dp_enc
 * @property integer $cod_ocu
 * @property string $tra_act_inf_lab
 * @property string $tip_ins_inf_lab
 * @property string $fue_ing_inf_lab
 * @property string $ing_per_inf_lab
 * @property string $act_ext_inf_lab
 * @property string $mon_act_ext_inf_lab
 * @property string $tot_ing_per_inf_lab
 * @property string $sec_tra_inf_lab
 * @property string $esg_ali_inf_lab
 * @property string $esg_med_inf_lab
 * @property string $esg_vic_inf_lab
 * @property string $esg_beb_alc_inf_lab
 * @property string $esg_edu_inf_lab
 * @property string $esg_rec_inf_lab
 * @property string $esg_ser_bas_inf_lab
 * @property string $esg_arr_inf_lab
 * @property string $esg_jue_aza_inf_lab
 * @property string $esg_fam_externo_inf_lab
 * @property string $esg_cre_inf_lab
 * @property string $esg_otr_inf_lab
 */
class Informacionlaboral extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Informacionlaboral the static model class
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
		return 'viviendo.mvv_informacion_laboral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_dp_enc, fue_ing_inf_lab', 'required'),
			array('cod_dp_enc, cod_ocu', 'numerical', 'integerOnly'=>true),
			array('mon_act_ext_inf_lab,ing_per_inf_lab, tot_ing_per_inf_lab,esg_ali_inf_lab, esg_med_inf_lab, esg_vic_inf_lab, esg_beb_alc_inf_lab, esg_edu_inf_lab, esg_rec_inf_lab, esg_ser_bas_inf_lab, esg_arr_inf_lab, esg_jue_aza_inf_lab, esg_fam_externo_inf_lab, esg_cre_inf_lab, esg_otr_inf_lab', 'default', 'value'=>NULL),
			array('tra_act_inf_lab, sec_tra_inf_lab', 'length', 'max'=>1),
			array('tip_ins_inf_lab', 'length', 'max'=>2),
			array('act_ext_inf_lab', 'length', 'max'=>30),
			array('fue_ing_inf_lab, ing_per_inf_lab, mon_act_ext_inf_lab, tot_ing_per_inf_lab, esg_ali_inf_lab, esg_med_inf_lab, esg_vic_inf_lab, esg_beb_alc_inf_lab, esg_edu_inf_lab, esg_rec_inf_lab, esg_ser_bas_inf_lab, esg_arr_inf_lab, esg_jue_aza_inf_lab, esg_fam_externo_inf_lab, esg_cre_inf_lab, esg_otr_inf_lab', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_dp_enc, cod_ocu, tra_act_inf_lab, tip_ins_inf_lab, fue_ing_inf_lab, ing_per_inf_lab, act_ext_inf_lab, mon_act_ext_inf_lab, tot_ing_per_inf_lab, sec_tra_inf_lab, esg_ali_inf_lab, esg_med_inf_lab, esg_vic_inf_lab, esg_beb_alc_inf_lab, esg_edu_inf_lab, esg_rec_inf_lab, esg_ser_bas_inf_lab, esg_arr_inf_lab, esg_jue_aza_inf_lab, esg_fam_externo_inf_lab, esg_cre_inf_lab, esg_otr_inf_lab', 'safe', 'on'=>'search'),
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
			'cod_dp_enc' => 'Cod Dp Enc',
			'cod_ocu' => 'Ocupaci&oacute;n / Oficio',
			'tra_act_inf_lab' => '&iquest;Trabaja?',
			'tip_ins_inf_lab' => 'Tipo de Instituci&oacute;n',
			'fue_ing_inf_lab' => 'Fuentes de Ingresos',
			'ing_per_inf_lab' => 'Total Ingresos',
			'act_ext_inf_lab' => 'Actividad Extra',
			'mon_act_ext_inf_lab' => 'Monto Extra',
			'tot_ing_per_inf_lab' => 'TOTAL INGRESOS (Ingr.Personal + Ingr. Extra)',
			'sec_tra_inf_lab' => 'Sector Laboral',
			'esg_ali_inf_lab' => 'Alimentaci&oacute;n',
			'esg_med_inf_lab' => 'Medicina',
			'esg_vic_inf_lab' => 'Vicios',
			'esg_beb_alc_inf_lab' => 'Bebidas Alcoholicas',
			'esg_edu_inf_lab' => 'Educaci&oacute;n',
			'esg_rec_inf_lab' => 'Recreaci&oacute;n',
			'esg_ser_bas_inf_lab' => 'Servicios Basicos',
			'esg_arr_inf_lab' => 'Arrendamiento',
			'esg_jue_aza_inf_lab' => 'Juegos de Azar',
			'esg_fam_externo_inf_lab' => 'Familiares Externos',
			'esg_cre_inf_lab' => 'Cr&eacute;ditos',
			'esg_otr_inf_lab' => 'Otros',
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
		$criteria->compare('cod_ocu',$this->cod_ocu);
		$criteria->compare('tra_act_inf_lab',$this->tra_act_inf_lab,true);
		$criteria->compare('tip_ins_inf_lab',$this->tip_ins_inf_lab,true);
		$criteria->compare('fue_ing_inf_lab',$this->fue_ing_inf_lab,true);
		$criteria->compare('ing_per_inf_lab',$this->ing_per_inf_lab,true);
		$criteria->compare('act_ext_inf_lab',$this->act_ext_inf_lab,true);
		$criteria->compare('mon_act_ext_inf_lab',$this->mon_act_ext_inf_lab,true);
		$criteria->compare('tot_ing_per_inf_lab',$this->tot_ing_per_inf_lab,true);
		$criteria->compare('sec_tra_inf_lab',$this->sec_tra_inf_lab,true);
		$criteria->compare('esg_ali_inf_lab',$this->esg_ali_inf_lab,true);
		$criteria->compare('esg_med_inf_lab',$this->esg_med_inf_lab,true);
		$criteria->compare('esg_vic_inf_lab',$this->esg_vic_inf_lab,true);
		$criteria->compare('esg_beb_alc_inf_lab',$this->esg_beb_alc_inf_lab,true);
		$criteria->compare('esg_edu_inf_lab',$this->esg_edu_inf_lab,true);
		$criteria->compare('esg_rec_inf_lab',$this->esg_rec_inf_lab,true);
		$criteria->compare('esg_ser_bas_inf_lab',$this->esg_ser_bas_inf_lab,true);
		$criteria->compare('esg_arr_inf_lab',$this->esg_arr_inf_lab,true);
		$criteria->compare('esg_jue_aza_inf_lab',$this->esg_jue_aza_inf_lab,true);
		$criteria->compare('esg_fam_externo_inf_lab',$this->esg_fam_externo_inf_lab,true);
		$criteria->compare('esg_cre_inf_lab',$this->esg_cre_inf_lab,true);
		$criteria->compare('esg_otr_inf_lab',$this->esg_otr_inf_lab,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}