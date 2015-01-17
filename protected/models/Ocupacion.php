<?php

/**
 * This is the model class for table "viviendo.mvv_ocupacion".
 *
 * The followings are the available columns in table 'viviendo.mvv_ocupacion':
 * @property integer $cod_ocu
 * @property string $nom_ocu
 * @property string $des_ocu
 */
class Ocupacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ocupacion the static model class
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
		return 'viviendo.mvv_ocupacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_ocu', 'required'),
			array('nom_ocu', 'length', 'max'=>30),
			array('des_ocu', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_ocu, nom_ocu, des_ocu', 'safe', 'on'=>'search'),
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
			'cod_ocu' => 'Cod Ocu',
			'nom_ocu' => 'Nom Ocu',
			'des_ocu' => 'Des Ocu',
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

		$criteria->compare('cod_ocu',$this->cod_ocu);
		$criteria->compare('nom_ocu',$this->nom_ocu,true);
		$criteria->compare('des_ocu',$this->des_ocu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}