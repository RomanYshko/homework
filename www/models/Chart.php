<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chart".
 *
 * @property int $id
 * @property string $title
 * @property string $data_start
 * @property string $time
 * @property int $price
 * @property string $visiting_days
 * @property int $quantity
 */
class Chart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'data_start', 'time', 'price', 'visiting_days', 'quantity'], 'required'],
            [['data_start'], 'safe'],
            [['price', 'quantity'], 'integer'],
            [['title'], 'string', 'max' => 200],
            [['time'], 'string', 'max' => 100],
            [['visiting_days'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'title' => 'Названия',
            'data_start' => 'Дата начала',
            'time' => 'Продолжительность по времени',
            'price' => 'Цена',
            'visiting_days' => 'Продолжительность по дням',
            'quantity' => 'Кол-во занятий',
        ];
    }
}
