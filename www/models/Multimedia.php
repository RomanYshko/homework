<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "multimedia".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 */
class Multimedia extends \yii\db\ActiveRecord
{
    public $image;
    public $filename;
    public $string;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'multimedia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 250],
            [['img'], 'file']
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
            'img' => '',
        ];
    }


    public function beforeSave($insert){
        if ($this->isNewRecord) {
            //generate & upload
            $this->string = substr(uniqid('img'), 0, 12); //imgRandomString
            $this->image = UploadedFile::getInstance($this, 'img');
            $this->filename = 'multimedia/images/' . $this->string . '.' . $this->image->extension;
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
