<?php

/**
 * This is the model class for table "viviendo.mvv_ayuda_requerida".
 *
 * The followings are the available columns in table 'viviendo.mvv_ayuda_requerida':
 * @property integer $cod_dp_enc
 * @property integer $cod_ayu_tec
 */
class Ayudarequerida extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ayudarequerida the static model class
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
		return 'viviendo.mvv_ayuda_requerida';
	}
	
	
	public function insertarRequerimiento($id, $param )
	{
		$sql = '';
		//print_r($param['cod_ayu_tec']);die;
		if(!empty($param))
		{
			
			if(is_array($param))
			{
				$sql = 'DELETE FROM viviendo.mvv_ayuda_requerida WHERE cod_dp_enc = '.$id.';';
				
				Operaciones::ejecutarSQL($sql);
			}
			
			
			for ($i=0; $i<count($param['cod_ayu_tec']); $i++)
			{
				$sql = 'INSERT INTO viviendo.mvv_ayuda_requerida(cod_dp_enc, cod_ayu_tec)
    					VALUES ('.$id.', '.$param['cod_ayu_tec'][$i].');';
				
				Operaciones::ejecutarSQL($sql);
			}
		}
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_dp_enc', 'required'),
			array('cod_dp_enc, cod_ayu_tec', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_dp_enc, cod_ayu_tec', 'safe', 'on'=>'search'),
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
			'cod_dp_enc' => 'Cod Dp Enc',
			'cod_ayu_tec' => 'Cod Ayu Tec',
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

		$criteria->compare('cod_dp_enc',$this->cod_dp_enc);
		$criteria->compare('cod_ayu_tec',$this->cod_ayu_tec);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}