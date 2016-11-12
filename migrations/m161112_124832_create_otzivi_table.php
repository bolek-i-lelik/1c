<?php

use yii\db\Migration;

/**
 * Handles the creation for table `otzivi`.
 */
class m161112_124832_create_otzivi_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('otzivi', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('otzivi');
    }
}
