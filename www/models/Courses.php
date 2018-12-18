<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;


/**
 * This is the model class for table "courses".
 *
 * @property int $id
 * @property string $title
 * @property string $data
 * @property string $time
 * @property int $price
 * @property string $meta_teg
 * @property string $meta_description
 * @property string $img
 */
class Courses extends \yii\db\ActiveRecord
{
    public $image;
    public $filename;
    public $string;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'data', 'time', 'price'], 'required'],
            [['price'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['data', 'time'], 'string', 'max' => 100],
            //[['img'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'data' => 'Дата',
            'time' => 'Время',
            'price' => 'Цена',
            'meta_teg' => 'Meta Teg',
            'meta_description' => 'Meta Description',
            'img' => '',
        ];
    }

    public function beforeSave($insert){
        if ($this->isNewRecord) {
            //generate & upload
            $this->string = substr(uniqid('img'), 0, 12); //imgRandomString
            $this->image = UploadedFile::getInstance($this, 'img');
            $this->filename = 'courses/images/' . $this->string . '.' . $this->image->extension;
            $this->image->saveAs($this->filename);

            //save
            $this->img = '/' . $this->filename;
        }else{
            $this->image = UploadedFile::getInstance($this, 'img');
            if($this->image){
                $this->image->saveAs(substr($this->img, 1));
            }
        }

        return parent::beforeSave($insert);
    }


}
