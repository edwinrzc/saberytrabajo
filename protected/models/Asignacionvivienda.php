<?php

/**
 * This is the model class for table "viviendo.mvv_asignacion_vivienda".
 *
 * The followings are the available columns in table 'viviendo.mvv_asignacion_vivienda':
 * @property integer $cod_asi_viv
 * @property string $num_viv_asi_viv
 * @property integer $cod_pro
 * @property integer $cod_dp_enc
 * @property integer $cod_user
 * @property string $fec_reg_asi_viv
 */
class Asignacionvivienda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Asignacionvivienda the static model class
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
		return 'viviendo.mvv_asignacion_vivienda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num_viv_asi_viv, cod_pro, cod_dp_enc, cod_user', 'required'),
			array('num_viv_asi_viv, cod_dp_enc', 'unique'),
			array('cod_pro, cod_dp_enc, cod_user', 'numerical', 'integerOnly'=>true),
			array('num_viv_asi_viv', 'length', 'max'=>10),
			array('fec_reg_asi_viv', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_asi_viv, num_viv_asi_viv, cod_pro, cod_dp_enc, cod_user, fec_reg_asi_viv', 'safe', 'on'=>'search'),
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
				'jefe'=>array(self::HAS_MANY, 'Datosencuestado', 'cod_dp_enc'),
				'proyecto' => array(self::BELONGS_TO, 'Proyecto', 'cod_pro'),
				'persona' => array(self::BELONGS_TO, 'Datosencuestado', 'cod_dp_enc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_asi_viv' => 'Codigo',
			'num_viv_asi_viv' => 'Numero Vivienda',
			'cod_pro' => 'Proyecto',
			'cod_dp_enc' => 'Beneficiario',
			'cod_user' => 'Usuario de Registro',
			'fec_reg_asi_viv' => 'Fecha de Registro',
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

		$criteria->compare('cod_asi_viv',$this->cod_asi_viv);
		$criteria->compare('num_viv_asi_viv',$this->num_viv_asi_viv,true);
		$criteria->compare('cod_pro',$this->cod_pro);
		$criteria->compare('cod_dp_enc',$this->cod_dp_enc);
		$criteria->compare('cod_user',$this->cod_user);
		$criteria->compare('fec_reg_asi_viv',$this->fec_reg_asi_viv,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}