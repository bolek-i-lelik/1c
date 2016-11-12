<?php

use yii\db\Migration;

/**
 * Handles the creation for table `products`.
 */
class m161112_123218_create_products_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->notNull(),
            'link' => $this->string()->notNull(),
            'price' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'idjs' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('products');
    }
}
