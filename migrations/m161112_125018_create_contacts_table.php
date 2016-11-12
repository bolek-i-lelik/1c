<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contacts`.
 */
class m161112_125018_create_contacts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'address' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'tel' => $this->string()->notNull(),
            'facebook' => $this->string(),
            'vk' => $this->string(),
            'instagramm' => $this->string(),
            'karta' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contacts');
    }
}
