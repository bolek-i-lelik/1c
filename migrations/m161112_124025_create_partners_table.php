<?php

use yii\db\Migration;

/**
 * Handles the creation for table `partners`.
 */
class m161112_124025_create_partners_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('partners', [
            'id' => $this->primaryKey(),
            'logo' => $this->string()->notNull(),
            'param1' => $this->string()->notNull(),
            'param2' => $this->string()->notNull(),
            'param3' => $this->string()->notNull(),
            'param4' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('partners');
    }
}
