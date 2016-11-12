<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tags`.
 */
class m161112_124915_create_tags_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tags', [
            'id' => $this->primaryKey(),
            'link' => $this->string()->notNull(),
            'text' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tags');
    }
}
