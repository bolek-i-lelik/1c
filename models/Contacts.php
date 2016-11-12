<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $address
 * @property string $email
 * @property string $tel
 * @property string $facebook
 * @property string $vk
 * @property string $instagramm
 * @property string $karta
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'email', 'tel', 'karta'], 'required'],
            [['address', 'email', 'tel', 'facebook', 'vk', 'instagramm', 'karta'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Адрес',
            'email' => 'Email',
            'tel' => 'Телефон',
            'facebook' => 'Facebook',
            'vk' => 'Vk',
            'instagramm' => 'Instagramm',
            'karta' => 'карта',
        ];
    }
}
