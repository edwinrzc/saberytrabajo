<?php

/**
 * This is the model class for table "viviendo.mvv_carrera_estudio".
 *
 * The followings are the available columns in table 'viviendo.mvv_carrera_estudio':
 * @property integer $cod_car_est
 * @property string $nom_car_est
 * @property string $des_car_est
 * @property string $est_reg
 */
class Carreraestudio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Carreraestudio the static model class
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
		return 'viviendo.mvv_carrera_estudio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_car_est', 'length', 'max'=>40),
			array('est_reg', 'length', 'max'=>1),
			array('des_car_est', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_car_est, nom_car_est, des_car_est, est_reg', 'safe', 'on'=>'search'),
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
			'cod_car_est' => 'Codigo',
			'nom_car_est' => 'Nombre de la Carrera',
			'des_car_est' => 'Descripcion',
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

		$criteria->compare('cod_car_est',$this->cod_car_est);
		$criteria->compare('nom_car_est',$this->nom_car_est,true);
		$criteria->compare('des_car_est',$this->des_car_est,true);
		$criteria->compare('est_reg',$this->est_reg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function descripcion($id){
		$data= self::model()->findByPk($id);
		return $descripcion=$data["nom_car_est"];
	
	}
}