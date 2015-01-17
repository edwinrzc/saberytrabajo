<?php

/**
 * This is the model class for table "viviendo.mvv_enfermedad".
 *
 * The followings are the available columns in table 'viviendo.mvv_enfermedad':
 * @property integer $cod_enf
 * @property string $nom_enf
 * @property string $des_enf
 */
class Enfermedad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Enfermedad the static model class
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
		return 'viviendo.mvv_enfermedad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_enf', 'required'),
			array('nom_enf', 'length', 'max'=>40),
			array('des_enf', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_enf, nom_enf, des_enf', 'safe', 'on'=>'search'),
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
			'cod_enf' => 'Codigo',
			'nom_enf' => 'Enfermedad',
			'des_enf' => 'Descripcion',
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

		$criteria->compare('cod_enf',$this->cod_enf);
		$criteria->compare('nom_enf',$this->nom_enf,true);
		$criteria->compare('des_enf',$this->des_enf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}