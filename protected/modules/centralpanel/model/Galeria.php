<?php

/**
 * This is the model class for table "galeria".
 *
 * The followings are the available columns in table 'galeria':
 * @property integer $gal_id
 * @property string $gal_nom
 * @property string $gal_des
 * @property string $gal_fec_reg
 */
class Galeria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Galeria the static model class
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
		return 'galeria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gal_nom', 'required'),
			array('gal_nom', 'length', 'max'=>60),
			array('gal_des, gal_fec_reg', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gal_id, gal_nom, gal_des, gal_fec_reg', 'safe', 'on'=>'search'),
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
			'gal_id' => 'Gal',
			'gal_nom' => 'Gal Nom',
			'gal_des' => 'Gal Des',
			'gal_fec_reg' => 'Gal Fec Reg',
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

		$criteria->compare('gal_id',$this->gal_id);
		$criteria->compare('gal_nom',$this->gal_nom,true);
		$criteria->compare('gal_des',$this->gal_des,true);
		$criteria->compare('gal_fec_reg',$this->gal_fec_reg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}