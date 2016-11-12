<?php

use yii\db\Migration;

/**
 * Handles the creation for table `firepred`.
 */
class m161112_122848_create_firepred_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('firepred', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'link' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('firepred');
    }
}
