<?php

use yii\db\Migration;

/**
 * Handles the creation for table `product`.
 */
class m161121_183206_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'code' => $this->string(),
            'description' => $this->string(),
            'delete' => $this->string(),
            'price' => $this->string(),
            'articul' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
