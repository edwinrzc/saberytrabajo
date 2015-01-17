<?php

/**
 * This is the model class for table "banner".
 *
 * The followings are the available columns in table 'banner':
 * @property integer $cod_ban
 * @property string $nom_ban
 * @property integer $sec_ban
 * @property string $url_ban
 * @property string $img_ban
 */
class Banner extends CActiveRecord
{
	
	public $imagen;
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Banner the static model class
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
		return 'banner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_ban, sec_ban, img_ban', 'required'),
			array('sec_ban', 'numerical', 'integerOnly'=>true),
			array('nom_ban, url_ban, img_ban', 'length', 'max'=>100),
			array('imagen', 'file', 'types'=>'jpg, gif, png'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_ban, nom_ban, sec_ban, url_ban, img_ban', 'safe', 'on'=>'search'),
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
			'cod_ban' => 'Cod Ban',
			'nom_ban' => 'Titulo',
			'sec_ban' => 'Sección',
			'url_ban' => 'Url',
			'img_ban' => 'Imagen',
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

		$criteria->compare('cod_ban',$this->cod_ban);
		$criteria->compare('nom_ban',$this->nom_ban,true);
		$criteria->compare('sec_ban',$this->sec_ban);
		$criteria->compare('url_ban',$this->url_ban,true);
		$criteria->compare('img_ban',$this->img_ban,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}