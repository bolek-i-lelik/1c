<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firepred".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $image
 */
class Firepred extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firepred';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'link', 'image'], 'required'],
            [['title', 'description', 'link', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'link' => 'Link',
            'image' => 'Image',
        ];
    }
}
