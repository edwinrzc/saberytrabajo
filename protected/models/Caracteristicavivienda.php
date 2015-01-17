<?php

/**
 * This is the model class for table "viviendo.mvv_caracteristica_vivienda".
 *
 * The followings are the available columns in table 'viviendo.mvv_caracteristica_vivienda':
 * @property integer $cod_dp_enc
 * @property string $pre1_car_viv
 * @property string $pre2_car_viv
 * @property string $pre3_car_viv
 * @property string $pre4_car_viv
 * @property string $pre5_car_viv
 * @property string $pre6_car_viv
 * @property string $pre7_car_viv
 * @property string $pre8_car_viv
 * @property string $pre9_car_viv
 * @property string $pre10_car_viv
 * @property string $pre11_car_viv
 * @property string $pre12_car_viv
 * @property string $pre13_car_viv
 * @property string $pre14_car_viv
 * @property string $pre15_car_viv
 * @property string $pre16_car_viv
 * @property string $pre17_car_viv
 * @property string $pre18_car_viv
 * @property string $pre19_car_viv
 * @property string $pre20_car_viv
 * @property string $pre21_car_viv
 * @property string $pre22_car_viv
 * @property string $pre23_car_viv
 * @property string $pre24_car_viv
 * @property string $pre25_car_viv
 * @property string $pre26_car_viv
 * @property string $pre27_car_viv
 * @property string $pre28_car_viv
 * @property string $pre29_car_viv
 * @property string $pre30_car_viv
 * @property string $pre31_car_viv
 * @property string $pre32_car_viv
 * @property string $pre33_car_viv
 */
class Caracteristicavivienda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Caracteristicavivienda the static model class
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
		return 'viviendo.mvv_caracteristica_vivienda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_dp_enc,pre1_car_viv,pre2_car_viv,pre3_car_viv,pre4_car_viv', 'required'),
			array('cod_dp_enc', 'numerical', 'integerOnly'=>true),
			array('pre1_car_viv', 'length', 'max'=>11),
			array('pre2_car_viv, pre4_car_viv, pre7_car_viv, pre32_car_viv, pre33_car_viv', 'length', 'max'=>15),
			array('pre3_car_viv, pre9_car_viv', 'length', 'max'=>10),
			array('pre5_car_viv', 'length', 'max'=>30),
			array('pre6_car_viv', 'length', 'max'=>40),
			array('pre8_car_viv', 'length', 'max'=>9),
			array('pre10_car_viv', 'length', 'max'=>12),
			array('pre11_car_viv, pre15_car_viv, pre21_car_viv, pre22_car_viv, pre23_car_viv', 'length', 'max'=>1),
			array('pre12_car_viv, pre13_car_viv', 'length', 'max'=>2),
			array('pre14_car_viv, pre16_car_viv', 'length', 'max'=>4),
			array('pre17_car_viv', 'length', 'max'=>7),
			array('pre18_car_viv', 'length', 'max'=>5),
			array('pre19_car_viv', 'length', 'max'=>6),
			array('pre20_car_viv, pre24_car_viv, pre25_car_viv, pre26_car_viv, pre27_car_viv, pre28_car_viv, pre29_car_viv, pre30_car_viv, pre31_car_viv', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_dp_enc, pre1_car_viv, pre2_car_viv, pre3_car_viv, pre4_car_viv, pre5_car_viv, pre6_car_viv, pre7_car_viv, pre8_car_viv, pre9_car_viv, pre10_car_viv, pre11_car_viv, pre12_car_viv, pre13_car_viv, pre14_car_viv, pre15_car_viv, pre16_car_viv, pre17_car_viv, pre18_car_viv, pre19_car_viv, pre20_car_viv, pre21_car_viv, pre22_car_viv, pre23_car_viv, pre24_car_viv, pre25_car_viv, pre26_car_viv, pre27_car_viv, pre28_car_viv, pre29_car_viv, pre30_car_viv, pre31_car_viv, pre32_car_viv, pre33_car_viv', 'safe', 'on'=>'search'),
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
			'cod_dp_enc' => 'Codigo',
			'pre1_car_viv' => 'Tipo de vivienda',
			'pre2_car_viv' => 'Cuales son las condiciones de tenencia de la vivienda',
			'pre3_car_viv' => 'Cual es la tenencia del terreno',
			'pre4_car_viv' => 'En que zona est&aacute; ubicada',
			'pre5_car_viv' => 'Qué característica tiene la zona de la ubicación de la vivienda',
			'pre6_car_viv' => 'De qué manera llega a  la vivienda',
			'pre7_car_viv' => 'Materiales predominantes en las paredes internas',
			'pre8_car_viv' => 'Cuál es material predominante en el techo',
			'pre9_car_viv' => 'Cuál es material predominante del piso',
			'pre10_car_viv' => 'Cómo se distribuyen para dormir en las habitaciones o espacios de la vivienda',
			'pre11_car_viv' => 'Cuántos Baños tiene la vivienda',
			'pre12_car_viv' => 'Cuántos Dormitorios tiene la vivienda',
			'pre13_car_viv' => 'La Vivienda cuenta con Servicio de Agua Blanca',
			'pre14_car_viv' => 'Como llega normalmente el Agua a la Vivienda',
			'pre15_car_viv' => 'La Vivienda Almacena Agua',
			'pre16_car_viv' => 'Qué utilizan para almacenar el Agua',
			'pre17_car_viv' => 'Cómo están Distribuidos el o los Baños con los que cuenta la Vivienda',
			'pre18_car_viv' => 'Donde está ubicado el o los Baños o Letrinas de la Vivienda',
			'pre19_car_viv' => 'A dónde va el Agua de Desecho de la Poceta',
			'pre20_car_viv' => 'A dónde va el Agua de Desecho del Fregadero, Ducha, Batea y Lavamanos',
			'pre21_car_viv' => 'La Vivienda cuenta con Servicio Eléctrico',
			'pre22_car_viv' => 'La Vivienda cuenta con Servicio Telefónico Fijo',
			'pre23_car_viv' => 'La Vivienda cuenta con Servicio de Internet',
			'pre24_car_viv' => 'Centros de Educación Inicial',
			'pre25_car_viv' => 'Centros de Educación Primaria',
			'pre26_car_viv' => 'Centros de Educación Básica/Diversificada',
			'pre27_car_viv' => 'Centros de Educación Superior',
			'pre28_car_viv' => 'Centros de Atención Primaria',
			'pre29_car_viv' => 'Centros de Diagnóstico Integral',
			'pre30_car_viv' => 'Centros Hospitalarios',
			'pre31_car_viv' => 'Centros de Salud/Clínicas Privadas',
			'pre32_car_viv' => 'Medio de Transporte predominante',
			'pre33_car_viv' => 'Exposición a Factores de Riesgo Ambiental',
			'cod_edo'=>'Estado',
			'cod_mun'=>'Municipio',
			'cod_par'=>'Parroquia',
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
		$criteria->compare('pre1_car_viv',$this->pre1_car_viv,true);
		$criteria->compare('pre2_car_viv',$this->pre2_car_viv,true);
		$criteria->compare('pre3_car_viv',$this->pre3_car_viv,true);
		$criteria->compare('pre4_car_viv',$this->pre4_car_viv,true);
		$criteria->compare('pre5_car_viv',$this->pre5_car_viv,true);
		$criteria->compare('pre6_car_viv',$this->pre6_car_viv,true);
		$criteria->compare('pre7_car_viv',$this->pre7_car_viv,true);
		$criteria->compare('pre8_car_viv',$this->pre8_car_viv,true);
		$criteria->compare('pre9_car_viv',$this->pre9_car_viv,true);
		$criteria->compare('pre10_car_viv',$this->pre10_car_viv,true);
		$criteria->compare('pre11_car_viv',$this->pre11_car_viv,true);
		$criteria->compare('pre12_car_viv',$this->pre12_car_viv,true);
		$criteria->compare('pre13_car_viv',$this->pre13_car_viv,true);
		$criteria->compare('pre14_car_viv',$this->pre14_car_viv,true);
		$criteria->compare('pre15_car_viv',$this->pre15_car_viv,true);
		$criteria->compare('pre16_car_viv',$this->pre16_car_viv,true);
		$criteria->compare('pre17_car_viv',$this->pre17_car_viv,true);
		$criteria->compare('pre18_car_viv',$this->pre18_car_viv,true);
		$criteria->compare('pre19_car_viv',$this->pre19_car_viv,true);
		$criteria->compare('pre20_car_viv',$this->pre20_car_viv,true);
		$criteria->compare('pre21_car_viv',$this->pre21_car_viv,true);
		$criteria->compare('pre22_car_viv',$this->pre22_car_viv,true);
		$criteria->compare('pre23_car_viv',$this->pre23_car_viv,true);
		$criteria->compare('pre24_car_viv',$this->pre24_car_viv,true);
		$criteria->compare('pre25_car_viv',$this->pre25_car_viv,true);
		$criteria->compare('pre26_car_viv',$this->pre26_car_viv,true);
		$criteria->compare('pre27_car_viv',$this->pre27_car_viv,true);
		$criteria->compare('pre28_car_viv',$this->pre28_car_viv,true);
		$criteria->compare('pre29_car_viv',$this->pre29_car_viv,true);
		$criteria->compare('pre30_car_viv',$this->pre30_car_viv,true);
		$criteria->compare('pre31_car_viv',$this->pre31_car_viv,true);
		$criteria->compare('pre32_car_viv',$this->pre32_car_viv,true);
		$criteria->compare('pre33_car_viv',$this->pre33_car_viv,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}