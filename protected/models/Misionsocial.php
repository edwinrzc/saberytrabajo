<?php

/**
 * This is the model class for table "viviendo.mvv_mision_social".
 *
 * The followings are the available columns in table 'viviendo.mvv_mision_social':
 * @property integer $cod_mis_soc
 * @property string $nom_mis_soc
 * @property string $des_mis_soc
 */
class Misionsocial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Misionsocial the static model class
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
		return 'viviendo.mvv_mision_social';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_mis_soc', 'required'),
			array('nom_mis_soc', 'length', 'max'=>70),
			array('des_mis_soc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_mis_soc, nom_mis_soc, des_mis_soc', 'safe', 'on'=>'search'),
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
			'cod_mis_soc' => 'Codigo',
			'nom_mis_soc' => 'Mision Social',
			'des_mis_soc' => 'Descripcion',
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

		$criteria->compare('cod_mis_soc',$this->cod_mis_soc);
		$criteria->compare('nom_mis_soc',$this->nom_mis_soc,true);
		$criteria->compare('des_mis_soc',$this->des_mis_soc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function descripcion($id){
		$data= self::model()->findByPk($id);
		return $descripcion=$data["nom_mis_soc"];
	
	}
}