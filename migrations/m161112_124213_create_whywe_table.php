<?php

use yii\db\Migration;

/**
 * Handles the creation for table `whywe`.
 */
class m161112_124213_create_whywe_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('whywe', [
            'id' => $this->primaryKey(),
            'text' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('whywe');
    }
}
