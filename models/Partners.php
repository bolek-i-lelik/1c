<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property integer $id
 * @property string $logo
 * @property string $param1
 * @property string $param2
 * @property string $param3
 * @property string $param4
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['param1', 'param2', 'param3', 'param4'], 'required'],
            [['logo', 'param1', 'param2', 'param3', 'param4'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Логотип',
            'param1' => 'Параметр 1',
            'param2' => 'Параметр 2',
            'param3' => 'Параметр 3',
            'param4' => 'Параметр 4',
        ];
    }
}
