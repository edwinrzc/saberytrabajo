<?php

/**
 * This is the model class for table "viviendo.mvv_organizacion_social".
 *
 * The followings are the available columns in table 'viviendo.mvv_organizacion_social':
 * @property integer $cod_org_soc
 * @property string $nom_org_soc
 * @property string $des_org_soc
 */
class Organizacionsocial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Organizacionsocial the static model class
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
		return 'viviendo.mvv_organizacion_social';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_org_soc', 'required'),
			array('nom_org_soc', 'length', 'max'=>60),
			array('des_org_soc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_org_soc, nom_org_soc, des_org_soc', 'safe', 'on'=>'search'),
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
			'cod_org_soc' => 'Codigo',
			'nom_org_soc' => 'Organizacion Social',
			'des_org_soc' => 'Descripcion',
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

		$criteria->compare('cod_org_soc',$this->cod_org_soc);
		$criteria->compare('nom_org_soc',$this->nom_org_soc,true);
		$criteria->compare('des_org_soc',$this->des_org_soc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function descripcion($id){
		$data= self::model()->findByPk($id);
		return $descripcion=$data["nom_org_soc"];
	
	}
}