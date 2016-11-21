<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $description
 * @property string $delete
 * @property string $price
 * @property string $articul
 * @property string $group
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            /*[['name', 'code', 'description', 'delete', 'price', 'articul', 'group'], 'string', 'max' => 255],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'description' => 'Description',
            'delete' => 'Delete',
            'price' => 'Price',
            'articul' => 'Articul',
            'group' => 'Group',
        ];
    }
}
