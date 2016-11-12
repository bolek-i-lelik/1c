<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comanda".
 *
 * @property integer $id
 * @property string $image
 * @property string $familia
 * @property string $nameandotec
 * @property string $dolzhnost
 * @property string $email
 */
class Comanda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comanda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'familia', 'nameandotec', 'dolzhnost', 'email'], 'required'],
            [['image', 'familia', 'nameandotec', 'dolzhnost', 'email'], 'string', 'max' => 255],
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
            'familia' => 'Фамилия',
            'nameandotec' => 'Имя и Отчество',
            'dolzhnost' => 'Должность',
            'email' => 'Email',
        ];
    }
}
