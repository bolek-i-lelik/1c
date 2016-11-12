<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "podpiski".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property string $period
 * @property string $link
 * @property string $image
 */
class Podpiski extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'podpiski';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'period', 'link', 'image'], 'required'],
            [['title', 'price', 'period', 'link', 'image'], 'string', 'max' => 255],
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
            'price' => 'Цена',
            'period' => 'Период',
            'link' => 'Ссылка',
            'image' => 'Изображение',
        ];
    }
}
