<?php

/**
 * This is the model class for table "viviendo.mvv_comunidad_indigena".
 *
 * The followings are the available columns in table 'viviendo.mvv_comunidad_indigena':
 * @property integer $cod_com_ind
 * @property string $nom_com_ind
 * @property string $des_com_ind
 */
class Comunidadindigena extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comunidadindigena the static model class
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
		return 'viviendo.mvv_comunidad_indigena';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_com_ind', 'required'),
			array('nom_com_ind', 'length', 'max'=>50),
			array('des_com_ind', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_com_ind, nom_com_ind, des_com_ind', 'safe', 'on'=>'search'),
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
			'cod_com_ind' => 'Codigo',
			'nom_com_ind' => 'Comunidad Indigena',
			'des_com_ind' => 'Descripcion',
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

		$criteria->compare('cod_com_ind',$this->cod_com_ind);
		$criteria->compare('nom_com_ind',$this->nom_com_ind,true);
		$criteria->compare('des_com_ind',$this->des_com_ind,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function descripcion($id){
		$data= self::model()->findByPk($id);
		return $descripcion=$data["nom_com_ind"];
	
	}
}