<?php

/**
 * This is the model class for table "dpt_estadal".
 *
 * The followings are the available columns in table 'dpt_estadal':
 * @property integer $gid
 * @property string $cod_estado
 * @property string $estado
 * @property string $km2
 * @property string $sup_ha
 * @property string $geom
 */
class Estadal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estadal the static model class
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
		return 'dpt_estadal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_estado', 'length', 'max'=>50),
			array('estado', 'length', 'max'=>20),
			array('km2, sup_ha, geom', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gid, cod_estado, estado, km2, sup_ha, geom', 'safe', 'on'=>'search'),
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
			'gid' => 'Gid',
			'cod_estado' => 'Cod Estado',
			'estado' => 'Estado',
			'km2' => 'Km2',
			'sup_ha' => 'Sup Ha',
			'geom' => 'Geom',
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

		$criteria->compare('gid',$this->gid);
		$criteria->compare('cod_estado',$this->cod_estado,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('km2',$this->km2,true);
		$criteria->compare('sup_ha',$this->sup_ha,true);
		$criteria->compare('geom',$this->geom,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}