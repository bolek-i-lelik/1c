<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "svoistva".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 */
class Svoistva extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svoistva';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            /*[['code', 'name'], 'string', 'max' => 255],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'product_id' => 'Product_id',
        ];
    }
}
