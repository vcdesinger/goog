<?php

/**
 * This is the model class for table "{{settings}}".
 *
 * The followings are the available columns in table '{{settings}}':
 * @property integer $id
 * @property string $title
 * @property string $mk
 * @property string $md
 * @property string $mail
 * @property string $hinfo
 * @property integer $imgpp
 * @property string $mt
 */
class Settings extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{settings}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, mk, md, mail, hinfo, imgpp, mt', 'required'),
			array('imgpp', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('mk, md, hinfo, mt', 'length', 'max'=>250),
			array('mail', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, mk, md, mail, hinfo, imgpp, mt', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'title' => 'Title',
			'mk' => 'Mk',
			'md' => 'Md',
			'mail' => 'Mail',
			'hinfo' => 'Hinfo',
			'imgpp' => 'Imgpp',
			'mt' => 'Mt',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('mk',$this->mk,true);
		$criteria->compare('md',$this->md,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('hinfo',$this->hinfo,true);
		$criteria->compare('imgpp',$this->imgpp);
		$criteria->compare('mt',$this->mt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Settings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
