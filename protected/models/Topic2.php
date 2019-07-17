<?php

/**
 * This is the model class for table "topic2".
 *
 * The followings are the available columns in table 'topic2':
 * @property integer $tp1_id
 * @property integer $tp2_id
 * @property string $tp2_name
 * @property string $tp2_des
 * @property integer $create_by
 * @property string $create_date
 * @property integer $update_by
 * @property string $update_date
 * @property string $active
 *
 * The followings are the available model relations:
 * @property Topic1 $tp1
 * @property Topic3[] $topic3s
 */
class Topic2 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'topic2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tp1_id, create_by, update_by', 'numerical', 'integerOnly'=>true),
			array('tp2_name, tp2_des', 'length', 'max'=>255),
			array('active', 'length', 'max'=>1),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tp1_id, tp2_id, tp2_name, tp2_des, create_by, create_date, update_by, update_date, active', 'safe', 'on'=>'search'),
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
			'tp1' => array(self::BELONGS_TO, 'Topic1', 'tp1_id'),
			'topic3s' => array(self::HAS_MANY, 'Topic3', 'tp2_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tp1_id' => 'Tp1',
			'tp2_id' => 'Tp2',
			'tp2_name' => 'Tp2 Name',
			'tp2_des' => 'Tp2 Des',
			'create_by' => 'Create By',
			'create_date' => 'Create Date',
			'update_by' => 'Update By',
			'update_date' => 'Update Date',
			'active' => 'Active',
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

		$criteria->compare('tp1_id',$this->tp1_id);
		$criteria->compare('tp2_id',$this->tp2_id);
		$criteria->compare('tp2_name',$this->tp2_name,true);
		$criteria->compare('tp2_des',$this->tp2_des,true);
		$criteria->compare('create_by',$this->create_by);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('active',$this->active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Topic2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
