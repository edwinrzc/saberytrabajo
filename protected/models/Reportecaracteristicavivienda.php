<?php
/**
* This is the model class for table "v_reporte_caracteristica_vivienda".
*
* The followings are the available columns in table 'v_reporte_caracteristica_vivienda':
* @property integer $cod_dp_enc_1
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
	class Reportecaracteristicavivienda extends CActiveRecord
		{
	/**
	* @return string the associated database table name
	*/
	public function tableName()
		{
			return 'v_reporte_caracteristica_vivienda';
		}
/**
* @return array validation rules for model attributes.
*/
	public function rules()
	{
	// NOTE: you should only define rules for those attributes that
	// will receive user inputs.
		return array(
		array('cod_dp_enc_1', 'numerical', 'integerOnly'=>true),
		array('pre11_car_viv', 'length', 'max'=>1),
		array('pre12_car_viv', 'length', 'max'=>2),
		array('pre24_car_viv, pre25_car_viv, pre26_car_viv, pre27_car_viv, pre28_car_viv, pre29_car_viv, pre30_car_viv, pre31_car_viv', 'length', 'max'=>3),
		array('pre1_car_viv, pre2_car_viv, pre3_car_viv, pre4_car_viv, pre5_car_viv, pre6_car_viv, pre7_car_viv, pre8_car_viv, pre9_car_viv, pre10_car_viv, pre13_car_viv, pre14_car_viv, pre15_car_viv, pre16_car_viv, pre17_car_viv, pre18_car_viv, pre19_car_viv, pre20_car_viv, pre21_car_viv, pre22_car_viv, pre23_car_viv, pre32_car_viv, pre33_car_viv', 'safe'),
		// The following rule is used by search().
		// @todo Please remove those attributes that should not be searched.
		array('cod_dp_enc_1, pre1_car_viv, pre2_car_viv, pre3_car_viv, pre4_car_viv, pre5_car_viv, pre6_car_viv, pre7_car_viv, pre8_car_viv, pre9_car_viv, pre10_car_viv, pre11_car_viv, pre12_car_viv, pre13_car_viv, pre14_car_viv, pre15_car_viv, pre16_car_viv, pre17_car_viv, pre18_car_viv, pre19_car_viv, pre20_car_viv, pre21_car_viv, pre22_car_viv, pre23_car_viv, pre24_car_viv, pre25_car_viv, pre26_car_viv, pre27_car_viv, pre28_car_viv, pre29_car_viv, pre30_car_viv, pre31_car_viv, pre32_car_viv, pre33_car_viv', 'safe', 'on'=>'search'),
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
			'cod_dp_enc_1' => 'Cod Dp Enc 1',
			'pre1_car_viv' => 'Pre1 Car Viv',
			'pre2_car_viv' => 'Pre2 Car Viv',
			'pre3_car_viv' => 'Pre3 Car Viv',
			'pre4_car_viv' => 'Pre4 Car Viv',
			'pre5_car_viv' => 'Pre5 Car Viv',
			'pre6_car_viv' => 'Pre6 Car Viv',
			'pre7_car_viv' => 'Pre7 Car Viv',
			'pre8_car_viv' => 'Pre8 Car Viv',
			'pre9_car_viv' => 'Pre9 Car Viv',
			'pre10_car_viv' => 'Pre10 Car Viv',
			'pre11_car_viv' => 'Pre11 Car Viv',
			'pre12_car_viv' => 'Pre12 Car Viv',
			'pre13_car_viv' => 'Pre13 Car Viv',
			'pre14_car_viv' => 'Pre14 Car Viv',
			'pre15_car_viv' => 'Pre15 Car Viv',
			'pre16_car_viv' => 'Pre16 Car Viv',
			'pre17_car_viv' => 'Pre17 Car Viv',
			'pre18_car_viv' => 'Pre18 Car Viv',
			'pre19_car_viv' => 'Pre19 Car Viv',
			'pre20_car_viv' => 'Pre20 Car Viv',
			'pre21_car_viv' => 'Pre21 Car Viv',
			'pre22_car_viv' => 'Pre22 Car Viv',
			'pre23_car_viv' => 'Pre23 Car Viv',
			'pre24_car_viv' => 'Pre24 Car Viv',
			'pre25_car_viv' => 'Pre25 Car Viv',
			'pre26_car_viv' => 'Pre26 Car Viv',
			'pre27_car_viv' => 'Pre27 Car Viv',
			'pre28_car_viv' => 'Pre28 Car Viv',
			'pre29_car_viv' => 'Pre29 Car Viv',
			'pre30_car_viv' => 'Pre30 Car Viv',
			'pre31_car_viv' => 'Pre31 Car Viv',
			'pre32_car_viv' => 'Pre32 Car Viv',
			'pre33_car_viv' => 'Pre33 Car Viv',
			);
		}
/**
* Retrieves a list of models based on the current search/filter conditions.
*
* Typical usecase:
* - Initialize the model fields with values from filter form.
* - Execute this method to get CActiveDataProvider instance which will filter
* models according to data in model fields.
* - Pass data provider to CGridView, CListView or any similar widget.
*
* @return CActiveDataProvider the data provider that can return the models
* based on the search/filter conditions.
*/
	public function search()
		{
			// @todo Please modify the following code to remove attributes that should not be searched.
			$criteria=new CDbCriteria;
			$criteria->compare('cod_dp_enc_1',$this->cod_dp_enc_1);
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
/**
* Returns the static model of the specified AR class.
* Please note that you should have this exact method in all your CActiveRecord descendants!
* @param string $className active record class name.
* @return Reportecaracteristicavivienda the static model class
*/
	public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
	}