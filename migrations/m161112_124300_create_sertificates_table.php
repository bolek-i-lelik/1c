<?php

use yii\db\Migration;

/**
 * Handles the creation for table `sertificates`.
 */
class m161112_124300_create_sertificates_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sertificates', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sertificates');
    }
}
