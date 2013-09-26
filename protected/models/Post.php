<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property string $id
 * @property integer $post_uid
 * @property integer $post_time
 * @property integer $sort_type
 * @property string $pic_url
 * @property string $post_title
 * @property string $post_content
 * @property string $post_desc
 * @property integer $post_status
 * @property integer $menu_order
 * @property integer $from_type
 * @property string $post_refer_url
 * @property integer $like_count
 * @property integer $collect_count
 * @property integer $comment_count
 * @property integer $share_count
 * @property integer $last_edit_uid
 * @property integer $last_edit_time
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return '{{post}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('post_content', 'required'),
			array('post_uid, post_time, sort_type,post_type, post_status, menu_order, from_type, like_count, collect_count, comment_count, share_count, last_edit_uid, last_edit_time', 'numerical', 'integerOnly'=>true),
			array('pic_url, post_title, post_desc, post_refer_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, post_uid, post_time, sort_type, pic_url, post_title, post_content, post_desc, post_status, menu_order, from_type, post_refer_url, like_count, collect_count, comment_count, share_count, last_edit_uid, last_edit_time', 'safe', 'on'=>'search'),
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
			'post_uid' => 'Post Uid',
			'post_time' => '发表时间',
			'sort_type' => '文章分类',
			'post_type' =>'文章类型',
			'pic_url' =>'文章首图',
			'video_url'=> '视频地址',
			'post_title' => '标题',
			'post_content' => '内容',
			'post_desc' => '描述',
			'post_status' => '文章状态',
			'menu_order' => '显示权重',
			'from_type' => '文章来源类型',
			'post_refer_url' => '文章引用原址',
			'like_count' => '喜欢数',
			'collect_count' => '收藏数',
			'comment_count' => '评论数',
			'share_count' => '分享数',
			'last_edit_uid' => '最后更新者ID',
			'last_edit_time' => '最后更新时间',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('post_uid',$this->post_uid);
		$criteria->compare('post_time',$this->post_time);
		$criteria->compare('sort_type',$this->sort_type);
		$criteria->compare('pic_url',$this->pic_url,true);
		$criteria->compare('post_title',$this->post_title,true);
		$criteria->compare('post_content',$this->post_content,true);
		$criteria->compare('post_desc',$this->post_desc,true);
		$criteria->compare('post_status',$this->post_status);
		$criteria->compare('menu_order',$this->menu_order);
		$criteria->compare('from_type',$this->from_type);
		$criteria->compare('post_refer_url',$this->post_refer_url,true);
		$criteria->compare('like_count',$this->like_count);
		$criteria->compare('collect_count',$this->collect_count);
		$criteria->compare('comment_count',$this->comment_count);
		$criteria->compare('share_count',$this->share_count);
		$criteria->compare('last_edit_uid',$this->last_edit_uid);
		$criteria->compare('last_edit_time',$this->last_edit_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}