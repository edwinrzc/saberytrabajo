<?php

/**
 * This is the model class for table "viviendo.mvv_posesiones_vivienda".
 *
 * The followings are the available columns in table 'viviendo.mvv_posesiones_vivienda':
 * @property integer $cod_dp_enc
 * @property string $can_coc_pos_viv
 * @property string $can_lav_pos_viv
 * @property string $can_nev_pos_viv
 * @property string $can_sec_pos_viv
 * @property string $can_air_aco_pos_viv
 * @property string $can_cam_ind_pos_viv
 * @property string $can_cam_mat_pos_viv
 * @property string $can_lit_pos_viv
 * @property string $can_col_ind_pos_viv
 * @property string $can_col_mat_pos_viv
 * @property string $can_jue_com_pos_viv
 * @property string $can_jue_rec_pos_viv
 */
class Posesionesvivienda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Posesionesvivienda the static model class
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
		return 'viviendo.mvv_posesiones_vivienda';
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
			array('cod_dp_enc', 'numerical', 'integerOnly'=>true),
			array('can_coc_pos_viv, can_lav_pos_viv, can_nev_pos_viv, can_sec_pos_viv, can_air_aco_pos_viv, can_cam_ind_pos_viv, can_cam_mat_pos_viv, can_lit_pos_viv, can_col_ind_pos_viv, can_col_mat_pos_viv, can_jue_com_pos_viv, can_jue_rec_pos_viv', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_dp_enc, can_coc_pos_viv, can_lav_pos_viv, can_nev_pos_viv, can_sec_pos_viv, can_air_aco_pos_viv, can_cam_ind_pos_viv, can_cam_mat_pos_viv, can_lit_pos_viv, can_col_ind_pos_viv, can_col_mat_pos_viv, can_jue_com_pos_viv, can_jue_rec_pos_viv', 'safe', 'on'=>'search'),
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
			'can_coc_pos_viv' => 'Cocina',
			'can_lav_pos_viv' => 'Lavadora',
			'can_nev_pos_viv' => 'Nevera',
			'can_sec_pos_viv' => 'Secadora',
			'can_air_aco_pos_viv' => 'Aire Acondicionado',
			'can_cam_ind_pos_viv' => 'Camas Individuales',
			'can_cam_mat_pos_viv' => 'Camas Matrimoniales',
			'can_lit_pos_viv' => 'Camas Litera',
			'can_col_ind_pos_viv' => 'Colchon Individual',
			'can_col_mat_pos_viv' => 'Colchon Matrimonial',
			'can_jue_com_pos_viv' => 'Juego de Comedor',
			'can_jue_rec_pos_viv' => 'Juego de Recibo',
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
		$criteria->compare('can_coc_pos_viv',$this->can_coc_pos_viv,true);
		$criteria->compare('can_lav_pos_viv',$this->can_lav_pos_viv,true);
		$criteria->compare('can_nev_pos_viv',$this->can_nev_pos_viv,true);
		$criteria->compare('can_sec_pos_viv',$this->can_sec_pos_viv,true);
		$criteria->compare('can_air_aco_pos_viv',$this->can_air_aco_pos_viv,true);
		$criteria->compare('can_cam_ind_pos_viv',$this->can_cam_ind_pos_viv,true);
		$criteria->compare('can_cam_mat_pos_viv',$this->can_cam_mat_pos_viv,true);
		$criteria->compare('can_lit_pos_viv',$this->can_lit_pos_viv,true);
		$criteria->compare('can_col_ind_pos_viv',$this->can_col_ind_pos_viv,true);
		$criteria->compare('can_col_mat_pos_viv',$this->can_col_mat_pos_viv,true);
		$criteria->compare('can_jue_com_pos_viv',$this->can_jue_com_pos_viv,true);
		$criteria->compare('can_jue_rec_pos_viv',$this->can_jue_rec_pos_viv,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}