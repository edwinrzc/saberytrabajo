<?php

/**
 * This is the model class for table "viviendo.mvv_ayuda_tecnica".
 *
 * The followings are the available columns in table 'viviendo.mvv_ayuda_tecnica':
 * @property integer $cod_ayu_tec
 * @property string $nom_ayu_tec
 * @property string $des_ayu_tec
 */
class Ayudatecnica extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ayudatecnica the static model class
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
		return 'viviendo.mvv_ayuda_tecnica';
	}
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_ayu_tec', 'required'),
			array('nom_ayu_tec', 'length', 'max'=>40),
			array('des_ayu_tec', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_ayu_tec, nom_ayu_tec, des_ayu_tec', 'safe', 'on'=>'search'),
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
			'cod_ayu_tec' => 'Codigo',
			'nom_ayu_tec' => 'Ayuda Tecnica',
			'des_ayu_tec' => 'Descripcion',
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

		$criteria->compare('cod_ayu_tec',$this->cod_ayu_tec);
		$criteria->compare('nom_ayu_tec',$this->nom_ayu_tec,true);
		$criteria->compare('des_ayu_tec',$this->des_ayu_tec,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}