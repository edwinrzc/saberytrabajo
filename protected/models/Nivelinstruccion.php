<?php

/**
 * This is the model class for table "viviendo.mvv_nivel_instruccion".
 *
 * The followings are the available columns in table 'viviendo.mvv_nivel_instruccion':
 * @property integer $cod_niv_ins
 * @property string $nom_niv_ins
 * @property string $des_niv_ins
 */
class Nivelinstruccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nivelinstruccion the static model class
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
		return 'viviendo.mvv_nivel_instruccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_niv_ins', 'required'),
			array('nom_niv_ins', 'length', 'max'=>50),
			array('des_niv_ins', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_niv_ins, nom_niv_ins, des_niv_ins', 'safe', 'on'=>'search'),
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
			'cod_niv_ins' => 'Codigo',
			'nom_niv_ins' => 'Nivel de Instruccion',
			'des_niv_ins' => 'Descripcion',
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

		$criteria->compare('cod_niv_ins',$this->cod_niv_ins);
		$criteria->compare('nom_niv_ins',$this->nom_niv_ins,true);
		$criteria->compare('des_niv_ins',$this->des_niv_ins,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function descripcion($id){
		$data= self::model()->findByPk($id);
		return $descripcion=$data["nom_niv_ins"];
	
	}
}