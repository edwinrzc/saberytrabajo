<?php

/**
 * This is the model class for table "viviendo.mvv_centro_penitenciario".
 *
 * The followings are the available columns in table 'viviendo.mvv_centro_penitenciario':
 * @property integer $cod_cen_pen
 * @property string $nom_cen_pen
 * @property string $cod_edo
 * @property string $est_reg
 */
class Centropenitenciario extends CActiveRecord
{
	public $cod_estado;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Centropenitenciario the static model class
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
		return 'viviendo.mvv_centro_penitenciario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_cen_pen', 'required'),
			array('nom_cen_pen', 'length', 'max'=>60),
			array('cod_edo', 'length', 'max'=>2),
			array('est_reg', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_cen_pen, nom_cen_pen, cod_edo, est_reg', 'safe', 'on'=>'search'),
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
			'codEstado' => array(self::BELONGS_TO, 'Estadal', 'cod_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_cen_pen' => 'Codigo',
			'nom_cen_pen' => 'Centro Penitenciario',
			'cod_edo' => 'Estado',
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

		$criteria->compare('cod_cen_pen',$this->cod_cen_pen);
		$criteria->compare('nom_cen_pen',$this->nom_cen_pen,true);
		$criteria->compare('cod_edo',$this->cod_edo,true);
		$criteria->compare('est_reg',$this->est_reg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}