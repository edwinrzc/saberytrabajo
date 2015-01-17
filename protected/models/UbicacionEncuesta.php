<?php

/**
 * This is the model class for table "viviendo.mvv_ubicacion_encuesta".
 *
 * The followings are the available columns in table 'viviendo.mvv_ubicacion_encuesta':
 * @property integer $cod_ubi_enc
 * @property string $cod_par
 * @property string $dir_com_ubi_enc
 * @property string $sec_ubi_enc
 * @property string $pun_ref_ubi_enc
 * @property string $fec_reg_ubi_enc
 */
class UbicacionEncuesta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UbicacionEncuesta the static model class
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
		return 'viviendo.mvv_ubicacion_encuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_par', 'length', 'max'=>6),
			array('dir_com_ubi_enc', 'length', 'max'=>150),
			array('sec_ubi_enc, pun_ref_ubi_enc', 'length', 'max'=>80),
			array('fec_reg_ubi_enc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_ubi_enc, cod_par, dir_com_ubi_enc, sec_ubi_enc, pun_ref_ubi_enc, fec_reg_ubi_enc', 'safe', 'on'=>'search'),
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
			'cod_ubi_enc' => 'Cod Ubi Enc',
			'cod_par' => 'Cod Par',
			'dir_com_ubi_enc' => 'Dir Com Ubi Enc',
			'sec_ubi_enc' => 'Sec Ubi Enc',
			'pun_ref_ubi_enc' => 'Pun Ref Ubi Enc',
			'fec_reg_ubi_enc' => 'Fec Reg Ubi Enc',
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

		$criteria->compare('cod_ubi_enc',$this->cod_ubi_enc);
		$criteria->compare('cod_par',$this->cod_par,true);
		$criteria->compare('dir_com_ubi_enc',$this->dir_com_ubi_enc,true);
		$criteria->compare('sec_ubi_enc',$this->sec_ubi_enc,true);
		$criteria->compare('pun_ref_ubi_enc',$this->pun_ref_ubi_enc,true);
		$criteria->compare('fec_reg_ubi_enc',$this->fec_reg_ubi_enc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}