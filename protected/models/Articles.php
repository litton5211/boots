<?php

/**
 * This is the model class for table "articles".
 *
 * The followings are the available columns in table 'articles':
 * @property integer $ArtID
 * @property string $ArtTitle
 * @property integer $ArtSort
 * @property integer $ArtClicks
 * @property string $ArtAddTime
 * @property string $ArtUpdateTime
 * @property string $ArtSource
 * @property string $ArtAuthor
 * @property string $ArtKeywords
 * @property string $ArtDescription
 * @property string $ArtContent
 * @property integer $ArtIsTop
 * @property integer $ArtIsRec
 * @property integer $ArtIsReview
 * @property string $ArtPic
 * @property string $ArtAccessories
 *
 * The followings are the available model relations:
 */
class Articles extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Articles the static model class
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
		return '{{articles}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ArtTitle,ArtContent','required'),
			array('ArtSort', 'numerical', 'integerOnly'=>true),
			array('ArtTitle, ArtPic', 'length', 'max'=>255),
			array('ArtAddTime, ArtUpdateTime, ArtDescription, ArtContent', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ArtID, ArtTitle, ArtSort, ArtAddTime, ArtUpdateTime, ArtDescription, ArtContent, ArtPic', 'safe', 'on'=>'search'),
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
		     'sorts' => array(self::BELONGS_TO, 'Sorts', 'ArtSort'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ArtID' => 'Art',
			'ArtTitle' => '文章标题',
			'ArtSort' => '文章类别',
			'ArtAddTime' => 'Art Add Time',
			'ArtUpdateTime' => 'Art Update Time',
			'ArtDescription' => '文章摘要',
			'ArtContent' => '文章内容',
			'ArtPic' => '文章图片',
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

		$criteria->compare('ArtID',$this->ArtID);
		$criteria->compare('ArtTitle',$this->ArtTitle,true);
		$criteria->compare('ArtSort',$this->ArtSort);
		$criteria->compare('ArtAddTime',$this->ArtAddTime,true);
		$criteria->compare('ArtUpdateTime',$this->ArtUpdateTime,true);
		$criteria->compare('ArtDescription',$this->ArtDescription,true);
		$criteria->compare('ArtContent',$this->ArtContent,true);
		$criteria->compare('ArtPic',$this->ArtPic,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	public function getTypeOptions($flag = true) {
		$asort = Sorts::model()->findAllByAttributes(array('SortType'=>2,'SortFID'=>0));
		$data = array();
		foreach ($asort as $sort){			
			$data[$sort->sortid] = $sort->SortName;
			$childs = Sorts::model()->findAllByAttributes(array('SortFID'=>$sort->sortid));
			foreach($childs as $child){
				$data[$child->sortid] = $flag ? '├─'.$child->SortName : $child->SortName;
			}
		}		
		return $data;
	}
	
	protected function beforeValidate()
        {
                if($this->isNewRecord)
                {
                        $this->ArtAddTime = $this->ArtUpdateTime = new CDbExpression('NOW()');
                } else {
                        $this->ArtUpdateTime = new CDbExpression('NOW()');
                       }
                return parent::beforeValidate();
        }
	
}