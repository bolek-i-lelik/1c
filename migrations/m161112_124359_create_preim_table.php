<?php

use yii\db\Migration;

/**
 * Handles the creation for table `preim`.
 */
class m161112_124359_create_preim_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('preim', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('preim');
    }
}
