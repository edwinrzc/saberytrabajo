<?php

/**
 * This is the model class for table "viviendo.mvv_alimentacion_semanal".
 *
 * The followings are the available columns in table 'viviendo.mvv_alimentacion_semanal':
 * @property integer $cod_dp_enc
 * @property string $car_roj_ali_sem
 * @property string $car_cor_ali_sem
 * @property string $car_mar_ali_sem
 * @property string $hor_ali_sem
 * @property string $fru_ali_sem
 * @property string $dul_ali_sem
 * @property string $car_ali_sem
 */
class Alimentacionsemanal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Alimentacionsemanal the static model class
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
		return 'viviendo.mvv_alimentacion_semanal';
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
			array('car_roj_ali_sem, car_cor_ali_sem, car_mar_ali_sem, hor_ali_sem, fru_ali_sem, dul_ali_sem, car_ali_sem', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_dp_enc, car_roj_ali_sem, car_cor_ali_sem, car_mar_ali_sem, hor_ali_sem, fru_ali_sem, dul_ali_sem, car_ali_sem', 'safe', 'on'=>'search'),
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
			'car_roj_ali_sem' => 'Carne Rojas',
			'car_cor_ali_sem' => 'Carne Blanca (Corral)',
			'car_mar_ali_sem' => 'Carne Blanca (Mar)',
			'hor_ali_sem' => 'Hortalizas',
			'fru_ali_sem' => 'Frutas',
			'dul_ali_sem' => 'Dulces/Golosinas',
			'car_ali_sem' => 'Carbohidratos (harinas, entre otros)',
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
		$criteria->compare('car_roj_ali_sem',$this->car_roj_ali_sem,true);
		$criteria->compare('car_cor_ali_sem',$this->car_cor_ali_sem,true);
		$criteria->compare('car_mar_ali_sem',$this->car_mar_ali_sem,true);
		$criteria->compare('hor_ali_sem',$this->hor_ali_sem,true);
		$criteria->compare('fru_ali_sem',$this->fru_ali_sem,true);
		$criteria->compare('dul_ali_sem',$this->dul_ali_sem,true);
		$criteria->compare('car_ali_sem',$this->car_ali_sem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}