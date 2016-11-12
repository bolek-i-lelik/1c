<?php

use yii\db\Migration;

/**
 * Handles the creation for table `comanda`.
 */
class m161112_124603_create_comanda_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comanda', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->notNull(),
            'familia' => $this->string()->notNull(),
            'nameandotec' => $this->string()->notNull(),
            'dolzhnost' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comanda');
    }
}
