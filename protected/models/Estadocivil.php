<?php

/**
 * This is the model class for table "viviendo.mvv_estado_civil".
 *
 * The followings are the available columns in table 'viviendo.mvv_estado_civil':
 * @property integer $cod_est_civ
 * @property string $nom_est_civ
 * @property string $des_est_civ
 * @property string $est_reg
 */
class Estadocivil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estadocivil the static model class
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
		return 'viviendo.mvv_estado_civil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_est_civ', 'required'),
			array('nom_est_civ', 'length', 'max'=>20),
			array('est_reg', 'length', 'max'=>1),
			array('des_est_civ', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_est_civ, nom_est_civ, des_est_civ, est_reg', 'safe', 'on'=>'search'),
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
			'cod_est_civ' => 'Codigo',
			'nom_est_civ' => 'Estado Civil',
			'des_est_civ' => 'Descripcion',
			'est_reg' => 'Estatus',
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

		$criteria->compare('cod_est_civ',$this->cod_est_civ);
		$criteria->compare('nom_est_civ',$this->nom_est_civ,true);
		$criteria->compare('des_est_civ',$this->des_est_civ,true);
		$criteria->compare('est_reg',$this->est_reg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function descripcion($id){
		$data= self::model()->findByPk($id);
		return $descripcion=$data["nom_est_civ"];
	
	}
}