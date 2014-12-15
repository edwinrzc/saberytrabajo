<?php

/**
 * This is the model class for table "viviendo.mvv_condicion_salud".
 *
 * The followings are the available columns in table 'viviendo.mvv_condicion_salud':
 * @property integer $cod_dp_enc
 * @property string $tie_tip_dis_con_sal
 * @property string $tip_dis_con_sal
 * @property string $tie_adi_con_sal
 * @property string $tip_adi_con_sal
 * @property string $otr_adi_con_sal
 * @property string $pad_enf_con_sal
 * @property string $rec_tra_con_sal
 * @property string $tip_tra_con_sal
 * @property integer $cod_enf
 * @property string $des_tra_con_sal
 * @property string $otr_enf_con_sal
 * @property string $otr_des_tra_con_sal
 * @property string $req_ayu_tec_con_sal
 * @property string $fre_med_con_sal
 * @property string $rec_asi_med_con_sal
 * @property string $tip_asi_med_con_sal
 * @property string $alt_apr_con_sal
 * @property string $pes_apro_con_sal
 * @property string $num_com_dia_con_sal
 * @property string $con_com_cas_con_sal
 * @property string $con_com_fue_cas_con_sal
 * @property integer $cod_cad_ali
 * @property string $otr_cad_ali
 */
class Condicionsalud extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Condicionsalud the static model class
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
		return 'viviendo.mvv_condicion_salud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_dp_enc', 'required'),
			array('cod_dp_enc, cod_enf, cod_cad_ali', 'numerical', 'integerOnly'=>true),
			array('tie_tip_dis_con_sal, tip_dis_con_sal, tie_adi_con_sal, pad_enf_con_sal, rec_tra_con_sal, tip_tra_con_sal, req_ayu_tec_con_sal, tip_asi_med_con_sal', 'length', 'max'=>1),
			array('tip_adi_con_sal', 'length', 'max'=>30),
			array('otr_adi_con_sal', 'length', 'max'=>20),
			array('otr_enf_con_sal', 'length', 'max'=>80),
			array('fre_med_con_sal', 'length', 'max'=>2),
			array('con_com_cas_con_sal, rec_asi_med_con_sal, con_com_fue_cas_con_sal', 'length', 'max'=>3),
			array('alt_apr_con_sal, pes_apro_con_sal', 'length', 'max'=>4),
			array('otr_cad_ali', 'length', 'max'=>40),
			array('des_tra_con_sal, otr_des_tra_con_sal, num_com_dia_con_sal', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_dp_enc, tie_tip_dis_con_sal, tip_dis_con_sal, tie_adi_con_sal, tip_adi_con_sal, otr_adi_con_sal, pad_enf_con_sal, rec_tra_con_sal, tip_tra_con_sal, cod_enf, des_tra_con_sal, otr_enf_con_sal, otr_des_tra_con_sal, req_ayu_tec_con_sal, fre_med_con_sal, rec_asi_med_con_sal, tip_asi_med_con_sal, alt_apr_con_sal, pes_apro_con_sal, num_com_dia_con_sal, con_com_cas_con_sal, con_com_fue_cas_con_sal, cod_cad_ali, otr_cad_ali', 'safe', 'on'=>'search'),
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
				'requerida' => array(self::MANY_MANY, 'Ayudatecnica', 'viviendo.mvv_ayuda_requerida(cod_dp_enc,cod_ayu_tec)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_dp_enc' => 'Codigo',
			'tie_tip_dis_con_sal' => '¿Tiene algun tipo de discapacidad?',
			'tip_dis_con_sal' => 'Tipos de discapacidad',
			'tie_adi_con_sal' => '¿Tiene alguna Adiccion y/o Vicio?',
			'tip_adi_con_sal' => 'Tipo de Adiccion',
			'otr_adi_con_sal' => 'Otra Adiccion',
			'pad_enf_con_sal' => '¿Padece de alguna enfermedad?',
			'rec_tra_con_sal' => '¿Recibe algún tratamiento?',
			'tip_tra_con_sal' => 'Tipo de Tratamiento',
			'cod_enf' => 'Enfermedad',
			'des_tra_con_sal' => 'Tratamiento',
			'otr_enf_con_sal' => 'Otra Enfermedad',
			'otr_des_tra_con_sal' => 'Tratamiento',
			'req_ayu_tec_con_sal' => 'Requiere ayuda tecnica',
			'fre_med_con_sal' => 'Frecuencia de Asistencia Medica',
			'rec_asi_med_con_sal' => 'Recibe Asistencia Medica',
			'tip_asi_med_con_sal' => 'Tipo de Asistencia Medica',
			'alt_apr_con_sal' => 'Altura (Aprox.)',
			'pes_apro_con_sal' => 'Peso (Aprox.)',
			'num_com_dia_con_sal' => 'Nº de Comidas Diarias',
			'con_com_cas_con_sal' => 'Consumo de Alimentos en casa (%)',
			'con_com_fue_cas_con_sal' => 'Consumo de Alimentos fuera de casa (%)',
			'cod_cad_ali' => '¿Donde adquiere regularmente los Alimentos?',
			'otr_cad_ali' => 'Otro establecimiento',
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
		$criteria->compare('tie_tip_dis_con_sal',$this->tie_tip_dis_con_sal,true);
		$criteria->compare('tip_dis_con_sal',$this->tip_dis_con_sal,true);
		$criteria->compare('tie_adi_con_sal',$this->tie_adi_con_sal,true);
		$criteria->compare('tip_adi_con_sal',$this->tip_adi_con_sal,true);
		$criteria->compare('otr_adi_con_sal',$this->otr_adi_con_sal,true);
		$criteria->compare('pad_enf_con_sal',$this->pad_enf_con_sal,true);
		$criteria->compare('rec_tra_con_sal',$this->rec_tra_con_sal,true);
		$criteria->compare('tip_tra_con_sal',$this->tip_tra_con_sal,true);
		$criteria->compare('cod_enf',$this->cod_enf);
		$criteria->compare('des_tra_con_sal',$this->des_tra_con_sal,true);
		$criteria->compare('otr_enf_con_sal',$this->otr_enf_con_sal,true);
		$criteria->compare('otr_des_tra_con_sal',$this->otr_des_tra_con_sal,true);
		$criteria->compare('req_ayu_tec_con_sal',$this->req_ayu_tec_con_sal,true);
		$criteria->compare('fre_med_con_sal',$this->fre_med_con_sal,true);
		$criteria->compare('rec_asi_med_con_sal',$this->rec_asi_med_con_sal,true);
		$criteria->compare('tip_asi_med_con_sal',$this->tip_asi_med_con_sal,true);
		$criteria->compare('alt_apr_con_sal',$this->alt_apr_con_sal,true);
		$criteria->compare('pes_apro_con_sal',$this->pes_apro_con_sal,true);
		$criteria->compare('num_com_dia_con_sal',$this->num_com_dia_con_sal,true);
		$criteria->compare('con_com_cas_con_sal',$this->con_com_cas_con_sal,true);
		$criteria->compare('con_com_fue_cas_con_sal',$this->con_com_fue_cas_con_sal,true);
		$criteria->compare('cod_cad_ali',$this->cod_cad_ali);
		$criteria->compare('otr_cad_ali',$this->otr_cad_ali,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}