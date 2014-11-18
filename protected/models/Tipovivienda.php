<?php

/**
 * This is the model class for table "viviendo.mvv_tipo_vivienda".
 *
 * The followings are the available columns in table 'viviendo.mvv_tipo_vivienda':
 * @property integer $cod_tip_viv
 * @property string $nom_tip_viv
 */
class Tipovivienda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tipovivienda the static model class
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
		return 'viviendo.mvv_tipo_vivienda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_tip_viv', 'required'),
			array('nom_tip_viv', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_tip_viv, nom_tip_viv', 'safe', 'on'=>'search'),
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
			'cod_tip_viv' => 'Cod Tip Viv',
			'nom_tip_viv' => 'Nom Tip Viv',
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

		$criteria->compare('cod_tip_viv',$this->cod_tip_viv);
		$criteria->compare('nom_tip_viv',$this->nom_tip_viv,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}