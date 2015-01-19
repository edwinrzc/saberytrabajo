<?php

/**
 * This is the model class for table "dpt_parroquial".
 *
 * The followings are the available columns in table 'dpt_parroquial':
 * @property integer $gid
 * @property string $id
 * @property string $cod_estado
 * @property string $estado
 * @property string $cap_estado
 * @property string $cod_munic
 * @property string $ci_munici
 * @property string $municipio
 * @property string $cap_munic
 * @property string $cod_parroq
 * @property string $ci_parroq
 * @property string $parroquia
 * @property string $cap_parroq
 * @property string $nota
 * @property string $hectareas
 * @property string $perimeter
 * @property string $sup_ha
 * @property string $geom
 */
class Parroquial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Parroquial the static model class
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
		return 'dpt_parroquial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gid', 'required'),
			array('gid', 'numerical', 'integerOnly'=>true),
			array('id, ci_munici, ci_parroq', 'length', 'max'=>6),
			array('cod_estado, cod_munic, cod_parroq', 'length', 'max'=>3),
			array('estado', 'length', 'max'=>20),
			array('cap_estado, municipio, cap_munic, parroquia, cap_parroq, nota', 'length', 'max'=>50),
			array('hectareas, perimeter, sup_ha, geom', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gid, id, cod_estado, estado, cap_estado, cod_munic, ci_munici, municipio, cap_munic, cod_parroq, ci_parroq, parroquia, cap_parroq, nota, hectareas, perimeter, sup_ha, geom', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'cod_estado' => 'Cod Estado',
			'estado' => 'Estado',
			'cap_estado' => 'Cap Estado',
			'cod_munic' => 'Cod Munic',
			'ci_munici' => 'Ci Munici',
			'municipio' => 'Municipio',
			'cap_munic' => 'Cap Munic',
			'cod_parroq' => 'Cod Parroq',
			'ci_parroq' => 'Ci Parroq',
			'parroquia' => 'Parroquia',
			'cap_parroq' => 'Cap Parroq',
			'nota' => 'Nota',
			'hectareas' => 'Hectareas',
			'perimeter' => 'Perimeter',
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
		$criteria->compare('id',$this->id,true);
		$criteria->compare('cod_estado',$this->cod_estado,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cap_estado',$this->cap_estado,true);
		$criteria->compare('cod_munic',$this->cod_munic,true);
		$criteria->compare('ci_munici',$this->ci_munici,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('cap_munic',$this->cap_munic,true);
		$criteria->compare('cod_parroq',$this->cod_parroq,true);
		$criteria->compare('ci_parroq',$this->ci_parroq,true);
		$criteria->compare('parroquia',$this->parroquia,true);
		$criteria->compare('cap_parroq',$this->cap_parroq,true);
		$criteria->compare('nota',$this->nota,true);
		$criteria->compare('hectareas',$this->hectareas,true);
		$criteria->compare('perimeter',$this->perimeter,true);
		$criteria->compare('sup_ha',$this->sup_ha,true);
		$criteria->compare('geom',$this->geom,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function descripcion($id){
		$data= self::model()->findByPk($id);
		return $descripcion=$data["parroquia"];
	
	}
	
	public function descripcionterritorial($id,$opc){
		$ordenTerr = '';
	
		switch ($opc) {
			case 'E':
				$ordenTerr = 'estado';
				break;
	
			case 'M':
				$ordenTerr = 'municipio';
				break;
	
			case 'P':
				$ordenTerr = 'parroquia';
				break;
		}
		$parroquia = self::model()->findByAttributes(array('ci_parroq'=>$id));
		return $descripcion=$parroquia[$ordenTerr];
	
	}
}