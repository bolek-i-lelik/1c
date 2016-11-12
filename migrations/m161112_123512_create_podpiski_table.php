<?php

use yii\db\Migration;

/**
 * Handles the creation for table `podpiski`.
 */
class m161112_123512_create_podpiski_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('podpiski', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'price' => $this->string()->notNull(),
            'period' => $this->string()->notNull(),
            'link' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('podpiski');
    }
}
