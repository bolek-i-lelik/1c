<?php

use yii\db\Migration;

/**
 * Handles the creation for table `uslugi`.
 */
class m161112_123757_create_uslugi_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('uslugi', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'link' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'idjs' => $this->string(),
            'image' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('uslugi');
    }
}
