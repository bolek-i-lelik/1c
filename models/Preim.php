<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preim".
 *
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $description
 */
class Preim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'preim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['image', 'title', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Изображение',
            'title' => 'Название',
            'description' => 'Описание',
        ];
    }
}
