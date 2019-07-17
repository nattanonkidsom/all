<?php

/**
 * This is the model class for table "topic3".
 *
 * The followings are the available columns in table 'topic3':
 * @property integer $tp2_id
 * @property integer $tp3_id
 * @property string $tp3_name
 * @property string $tp3_des
 * @property integer $create_by
 * @property string $create_date
 * @property integer $update_by
 * @property string $update_date
 * @property string $active
 *
 * The followings are the available model relations:
 * @property Document[] $documents
 * @property Topic2 $tp2
 */
class Topic3 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'topic3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_date', 'required'),
			array('tp2_id, create_by, update_by', 'numerical', 'integerOnly'=>true),
			array('tp3_name, tp3_des', 'length', 'max'=>255),
			array('active', 'length', 'max'=>1),
			array('update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tp2_id, tp3_id, tp3_name, tp3_des, create_by, create_date, update_by, update_date, active', 'safe', 'on'=>'search'),
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
			'documents' => array(self::HAS_MANY, 'Document', 'tp3_id'),
			'tp2' => array(self::BELONGS_TO, 'Topic2', 'tp2_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tp2_id' => 'Tp2',
			'tp3_id' => 'Tp3',
			'tp3_name' => 'Tp3 Name',
			'tp3_des' => 'Tp3 Des',
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

		$criteria->compare('tp2_id',$this->tp2_id);
		$criteria->compare('tp3_id',$this->tp3_id);
		$criteria->compare('tp3_name',$this->tp3_name,true);
		$criteria->compare('tp3_des',$this->tp3_des,true);
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
	 * @return Topic3 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
