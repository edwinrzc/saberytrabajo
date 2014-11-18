<?php

/**
 * This is the model class for table "viviendo.mvv_tipo_construccion".
 *
 * The followings are the available columns in table 'viviendo.mvv_tipo_construccion':
 * @property integer $cod_tip_con
 * @property integer $cod_tip_viv
 * @property integer $cod_pro
 * @property string $num_tip_con
 */
class Tipoconstruccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tipoconstruccion the static model class
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
		return 'viviendo.mvv_tipo_construccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_tip_viv', 'required'),
			array('cod_tip_viv, cod_pro', 'numerical', 'integerOnly'=>true),
			array('num_tip_con', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_tip_con, cod_tip_viv, cod_pro, num_tip_con', 'safe', 'on'=>'search'),
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
			'cod_tip_con' => 'Cod Tip Con',
			'cod_tip_viv' => 'Cod Tip Viv',
			'cod_pro' => 'Cod Pro',
			'num_tip_con' => 'Num Tip Con',
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

		$criteria->compare('cod_tip_con',$this->cod_tip_con);
		$criteria->compare('cod_tip_viv',$this->cod_tip_viv);
		$criteria->compare('cod_pro',$this->cod_pro);
		$criteria->compare('num_tip_con',$this->num_tip_con,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function numeroVivienda($post,$cod_pro, $accion)
	{
		try
		{
			
			$sql = "";
			//print_r(count($post['cod_usu']));die;
			if(count($post) == 0)
			{
				throw new Exception('0');
			}
		
				
			for($i = 0; $i<count($post['num_tip_con']); $i++)
			{
				//die(count($post['cod_usu']));return;
				/*if(!empty($post['cod_tip_viv'][$i]))
				{
					
					
				}*/
				
				if(!is_numeric($post['cod_tip_viv'][$i]) && !is_numeric($post['num_tip_con'][$i]))
				{
					throw new Exception('-1');
				}
					
				switch ($accion)
				{
					case 'I':
						$sql = "INSERT 
								INTO viviendo.mvv_tipo_construccion(cod_tip_viv, cod_pro, num_tip_con)
								VALUES ( ".$post['cod_tip_viv'][$i].", $cod_pro,".$post['num_tip_con'][$i].");";
						//$row = $this->ejecutarSQL($sql);						
					break;
					case 'U':
						$sql = "UPDATE viviendo.mvv_tipo_construccion
								   SET num_tip_con=".$post['num_tip_con'][$i]."
								 WHERE cod_tip_viv= ".$post['cod_tip_viv'][$i]." AND cod_pro= $cod_pro;";
					break;
					
				}
				
				die($sql);
				
				Operaciones::ejecutarSQL($sql);
				
				
			}
				
			return true;
				
		}
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	
}