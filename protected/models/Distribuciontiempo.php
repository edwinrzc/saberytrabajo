<?php

/**
 * This is the model class for table "viviendo.mvv_distribucion_tiempo".
 *
 * The followings are the available columns in table 'viviendo.mvv_distribucion_tiempo':
 * @property integer $cod_dis_tie
 * @property integer $cod_dp_enc
 * @property string $tip_dis_tie
 * @property string $hor_tra_reg_dis_tie
 * @property string $hor_rec_dis_tie
 * @property string $hor_dep_dis_tie
 * @property string $hor_jue_aza_dis_tie
 * @property string $hor_com_fam_dis_tie
 * @property string $hor_tv_dis_tie
 * @property string $hor_lec_dis_tie
 * @property string $hor_otr_act_dis_tie
 */
class Distribuciontiempo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Distribuciontiempo the static model class
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
		return 'viviendo.mvv_distribucion_tiempo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_dp_enc, tip_dis_tie', 'required'),
			array('cod_dp_enc', 'numerical', 'integerOnly'=>true),
			array('tip_dis_tie', 'length', 'max'=>2),
			array('hor_tra_reg_dis_tie, hor_dep_dis_tie, hor_jue_aza_dis_tie, hor_com_fam_dis_tie, hor_tv_dis_tie, hor_lec_dis_tie, hor_otr_act_dis_tie', 'length', 'max'=>5),
			array('hor_rec_dis_tie', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_dis_tie, cod_dp_enc, tip_dis_tie, hor_tra_reg_dis_tie, hor_rec_dis_tie, hor_dep_dis_tie, hor_jue_aza_dis_tie, hor_com_fam_dis_tie, hor_tv_dis_tie, hor_lec_dis_tie, hor_otr_act_dis_tie', 'safe', 'on'=>'search'),
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
			'cod_dis_tie' => 'Codigo',
			'cod_dp_enc' => 'Codigo 2',
			'tip_dis_tie' => 'Tipo de Distribucion',
			'hor_tra_reg_dis_tie' => 'Trabajo Regular',
			'hor_rec_dis_tie' => 'Recreacion',
			'hor_dep_dis_tie' => 'Deportes',
			'hor_jue_aza_dis_tie' => 'Juegos de Azar',
			'hor_com_fam_dis_tie' => 'Compartir Familiar',
			'hor_tv_dis_tie' => 'TV',
			'hor_lec_dis_tie' => 'Lectura',
			'hor_otr_act_dis_tie' => 'Otras Actividades',
		);
	}
	
	
	/**
	 * @return
	 */
	public function salvarDistribucion($accion,$atr)
	{
		$sql = "";
		switch ($accion)
		{
			case 'I':
				if(is_array($atr))
				{
					$sql = "INSERT INTO viviendo.mvv_distribucion_tiempo(
					cod_dp_enc, tip_dis_tie, hor_tra_reg_dis_tie, hor_rec_dis_tie,
					hor_dep_dis_tie, hor_jue_aza_dis_tie, hor_com_fam_dis_tie, hor_tv_dis_tie,
					hor_lec_dis_tie, hor_otr_act_dis_tie)
					VALUES ($atr[cod_dp_enc], '$atr[tip_dis_tie]', '$atr[hor_tra_reg_dis_tie]', '$atr[hor_rec_dis_tie]',
					'$atr[hor_dep_dis_tie]', '$atr[hor_jue_aza_dis_tie]','$atr[hor_com_fam_dis_tie]', '$atr[hor_tv_dis_tie]',
					'$atr[hor_lec_dis_tie]', '$atr[hor_otr_act_dis_tie]');";
						
				}
				break;
		}
	
	
		return Operaciones::ejecutarSQL($sql);
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

		$criteria->compare('cod_dis_tie',$this->cod_dis_tie);
		$criteria->compare('cod_dp_enc',$this->cod_dp_enc);
		$criteria->compare('tip_dis_tie',$this->tip_dis_tie,true);
		$criteria->compare('hor_tra_reg_dis_tie',$this->hor_tra_reg_dis_tie,true);
		$criteria->compare('hor_rec_dis_tie',$this->hor_rec_dis_tie,true);
		$criteria->compare('hor_dep_dis_tie',$this->hor_dep_dis_tie,true);
		$criteria->compare('hor_jue_aza_dis_tie',$this->hor_jue_aza_dis_tie,true);
		$criteria->compare('hor_com_fam_dis_tie',$this->hor_com_fam_dis_tie,true);
		$criteria->compare('hor_tv_dis_tie',$this->hor_tv_dis_tie,true);
		$criteria->compare('hor_lec_dis_tie',$this->hor_lec_dis_tie,true);
		$criteria->compare('hor_otr_act_dis_tie',$this->hor_otr_act_dis_tie,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}