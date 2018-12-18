<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $courses_id
 * @property string $title
 * @property string $img
 * @property string $course_description
 * @property string $course_program
 * @property string $data_start
 * @property string $duration
 * @property int $price
 * @property int $free_places
 *
 * @property Courses $courses
 */
class Post extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['courses_id', 'title',  'course_description', 'course_program', 'data_start', 'duration', 'price', 'free_places'], 'required'],
            [['title'], 'string', 'max' => 150],
            [['courses_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['courses_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'courses_id' => 'Категория курса',
            'title' => 'Названия',
            'img' => '',
            'course_description' => 'Описание',
            'course_program' => 'Програма курса',
            'data_start' => 'Дата начала',
            'duration' => 'Продолжительность',
            'price' => 'Цена',
            'free_places' => 'Свободные места',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasOne(Courses::className(), ['id' => 'courses_id']);
    }


}
