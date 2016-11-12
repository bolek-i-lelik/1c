<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $image
 * @property string $link
 * @property string $price
 * @property string $description
 * @property string $idjs
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'link', 'price', 'description'], 'required'],
            [['image', 'link', 'price', 'description', 'idjs'], 'string', 'max' => 255],
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
            'link' => 'Ссылка',
            'price' => 'Цена',
            'description' => 'Описание',
            'idjs' => 'Идентификатор',
        ];
    }
}
