<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uslugi".
 *
 * @property integer $id
 * @property string $title
 * @property string $link
 * @property string $description
 * @property string $idjs
 * @property string $image
 */
class Uslugi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uslugi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'link', 'description', 'image'], 'required'],
            [['title', 'link', 'description', 'idjs', 'image'], 'string', 'max' => 255],
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
            'link' => 'Ссылка',
            'description' => 'Описание',
            'idjs' => 'Идентификатор',
            'image' => 'Изображение',
        ];
    }
}
