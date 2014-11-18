<?php

/**
 * This is the model class for table "viviendo.mvv_nacionalidad_encuestado".
 *
 * The followings are the available columns in table 'viviendo.mvv_nacionalidad_encuestado':
 * @property integer $cod_nac_enc
 * @property string $nom_nac_enc
 * @property string $des_nac_enc
 */
class Nacionalidades extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nacionalidades the static model class
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
		return 'viviendo.mvv_nacionalidad_encuestado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_nac_enc', 'required'),
			array('nom_nac_enc', 'length', 'max'=>50),
			array('des_nac_enc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_nac_enc, nom_nac_enc, des_nac_enc', 'safe', 'on'=>'search'),
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
			'cod_nac_enc' => 'Codigo',
			'nom_nac_enc' => 'Nacionalidad',
			'des_nac_enc' => 'Descripcion',
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

		$criteria->compare('cod_nac_enc',$this->cod_nac_enc);
		$criteria->compare('nom_nac_enc',$this->nom_nac_enc,true);
		$criteria->compare('des_nac_enc',$this->des_nac_enc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}