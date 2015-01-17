<?php

/**
 * This is the model class for table "dpt_municipal".
 *
 * The followings are the available columns in table 'dpt_municipal':
 * @property integer $gid
 * @property string $cod_estado
 * @property string $estado
 * @property string $cap_estado
 * @property string $cod_munic
 * @property string $ci_munici
 * @property string $municipio
 * @property string $cap_munic
 * @property string $nota
 * @property string $hectares
 * @property string $geom
 */
class Municipal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Municipal the static model class
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
		return 'dpt_municipal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_estado, cod_munic', 'length', 'max'=>3),
			array('estado', 'length', 'max'=>17),
			array('cap_estado, municipio, cap_munic, nota', 'length', 'max'=>50),
			array('ci_munici', 'length', 'max'=>6),
			array('hectares, geom', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gid, cod_estado, estado, cap_estado, cod_munic, ci_munici, municipio, cap_munic, nota, hectares, geom', 'safe', 'on'=>'search'),
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
			'cap_estado' => 'Cap Estado',
			'cod_munic' => 'Cod Munic',
			'ci_munici' => 'Ci Munici',
			'municipio' => 'Municipio',
			'cap_munic' => 'Cap Munic',
			'nota' => 'Nota',
			'hectares' => 'Hectares',
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
		$criteria->compare('cap_estado',$this->cap_estado,true);
		$criteria->compare('cod_munic',$this->cod_munic,true);
		$criteria->compare('ci_munici',$this->ci_munici,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('cap_munic',$this->cap_munic,true);
		$criteria->compare('nota',$this->nota,true);
		$criteria->compare('hectares',$this->hectares,true);
		$criteria->compare('geom',$this->geom,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}