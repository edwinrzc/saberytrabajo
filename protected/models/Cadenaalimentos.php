<?php

/**
 * This is the model class for table "viviendo.mvv_cadena_alimentos".
 *
 * The followings are the available columns in table 'viviendo.mvv_cadena_alimentos':
 * @property integer $cod_cad_ali
 * @property string $nom_cad_ali
 * @property string $des_cad_ali
 */
class Cadenaalimentos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cadenaalimentos the static model class
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
		return 'viviendo.mvv_cadena_alimentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_cad_ali', 'required'),
			array('nom_cad_ali', 'length', 'max'=>40),
			array('des_cad_ali', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_cad_ali, nom_cad_ali, des_cad_ali', 'safe', 'on'=>'search'),
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
			'cod_cad_ali' => 'Codigo',
			'nom_cad_ali' => 'Cadena de Alimentos',
			'des_cad_ali' => 'Descripcion',
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

		$criteria->compare('cod_cad_ali',$this->cod_cad_ali);
		$criteria->compare('nom_cad_ali',$this->nom_cad_ali,true);
		$criteria->compare('des_cad_ali',$this->des_cad_ali,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}