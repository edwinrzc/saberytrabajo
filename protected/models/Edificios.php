<?php

/**
 * This is the model class for table "edificios".
 *
 * The followings are the available columns in table 'edificios':
 * @property integer $id_edif
 * @property string $nom_edif
 * @property string $dir_edif
 * @property integer $num_apto_edif
 * @property boolean $area_comun_edif
 */
class Edificios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Edificios the static model class
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
		return 'edificios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_edif', 'required'),
			array('num_apto_edif', 'numerical', 'integerOnly'=>true),
			array('nom_edif', 'length', 'max'=>255),
			array('area_comun_edif', 'boolean','falseValue'=>'false','trueValue'=>'true'),
			array('dir_edif', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_edif, nom_edif, dir_edif, num_apto_edif, area_comun_edif', 'safe', 'on'=>'search'),
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
			'id_edif' => 'Id Edif',
			'nom_edif' => 'Nom Edif',
			'dir_edif' => 'Dir Edif',
			'num_apto_edif' => 'Num Apto Edif',
			'area_comun_edif' => 'Area Comun Edif',
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

		$criteria->compare('id_edif',$this->id_edif);
		$criteria->compare('nom_edif',$this->nom_edif,true);
		$criteria->compare('dir_edif',$this->dir_edif,true);
		$criteria->compare('num_apto_edif',$this->num_apto_edif);
		$criteria->compare('area_comun_edif',$this->area_comun_edif);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}